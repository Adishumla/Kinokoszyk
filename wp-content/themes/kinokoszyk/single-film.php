<?php 

remove_filter( 'the_content', 'wpautop' );
$year = get_field("year");
$directorAndScreenwriters = get_field("director_and_screenwriters");
$directorOfPhotography = get_field("director_of_photography");
$producedBy = get_field("produced_by");
$sound = get_field("sound");
$editor = get_field("editor");
$music = get_field("music");
$image = get_field('image');
$heroImage = get_field('heroImage');
$language = get_field('language');

$trailer = get_field('trailer');
$trailerSrc = get_post_meta(get_the_ID(), "trailer")[0];

// $trailerSrc = substr($trailer, strpos($trailer, "src=") + 4);
// $trailerSrc = substr($trailerSrc, 0, strpos($trailerSrc, "?feature=oembed"));

$showMore = false;

$maxQuotes = 6;
$quotes = [];
for($i = 1; $i <= $maxQuotes; $i++)
{
    $quote = get_field("quote" . $i);
    $quoted = get_field("quoted" . $i);
    if($quote && $quoted)
    {
        $quotes[$i]["quote"] = $quote;
        $quotes[$i]["quoted"] = $quoted;
    }
}

$quote1 = [];
$quote1["quote"] = get_field("quote1");
$quote1["author"] = get_field("quoted1");
$quote2 = [];
$quote2["quote"] = get_field("quote2");
$quote2["author"] = get_field("quoted2");

$awards = [];
if(get_field("award1")) $awards[] = get_field("award1");
if(get_field("award2")) $awards[] = get_field("award2");
if(get_field("award3")) $awards[] = get_field("award3");
if(get_field("award4")) $awards[] = get_field("award4");

get_header(); ?>



<main class="px-[10.4%] bg-off-white">
    <div class="mb-[20%] w-full aspect-video [&>iframe]:top-[5vw]  [&>iframe]:w-full [&>iframe]:h-full [&>iframe]:z-1 [&>iframe]:relative "> 
        <div class="bg-white-red w-[100%] h-[32vw] left-0 absolute "></div>
        <?php  if($trailer){
            echo $trailer;
        }
        else if($heroImage){ ?>
            <img class=" object-cover object-top drop-shadow-[10px_14px_14px_rgba(0,0,0,0.25)] w-full h-full"  src="<?= $heroImage['url'] ?>" alt="<?= $heroImage["alt"] ?>">
   
           
        <?php }
        else { ?>
         <img class=" object-cover object-top drop-shadow-[10px_14px_14px_rgba(0,0,0,0.25)] w-full h-full"  src="<?= $image['url'] ?>" alt="<?= $image["alt"] ?>">



        
        <?php } ?>

    </div>

    <section class="flex gap-x-[5.8%]">
        <div class="flex flex-col min-w-[32%] w-[32%]">
            <span class="font-poppins text-[20px] leading-[28px]  mb-[12px]" ><?= $year ?> </span>
            <img class="w-full object-cover row-span-2 drop-shadow-[10px_14px_14px_rgba(0,0,0,0.25)]"  src="<?= $image['url'] ?>" alt="<?= $image["alt"] ?>">
        </div>
        <div class="flex flex-col gap-y-[21px]">
            <h2 class="font-prata text-[80px] leading-[86px] mt-[26px] font-normal"><?php the_title(); ?></h2>
            <?php remove_filter( 'the_content', 'wpautop' );?>
            <?php add_filter( 'the_content', 'nl2br' );?>
            
            <div class="font-poppins text-[20px] leading[28px]"><?php the_content(); ?></div>
        </div>
    </section>

    <section class="pb-[160px]">
        <div class="flex justify-between px-[2.3%] bg-white-red mt-[80px]  pt-[40px] pb-[60px] font-poppins text-[20px] leading-[28px] gap-x-[6%]">
            <div>
                <?php if($language):?>  <p class="text-[20px] leading-[28px]"><b>Language:</b> <?= $language ?></li><?php endif ?>
                <p><b>Director & Screenwriters:</b> <?= $directorAndScreenwriters ?></li>
                <p><b>Produced by:</b> <?= $producedBy ?></li>
                
                
                <?php if($directorOfPhotography):?><p class=" more-info hidden"><b>Director of Photography:</b> <?= $directorOfPhotography?></p class=" more-info hidden"><?php endif?>
                <?php if($editor):?><p class=" more-info hidden"><b>Editor:</b> <?= $editor?></p> <?php endif ?>
                <?php if($sound):?><p class=" more-info hidden"><b>Sound:</b> <?= $sound?></p> <?php endif ?>
                <?php if($music):?><p class=" more-info hidden"><b>Music:</b> <?= $music?></p> <?php endif ?>    
                
                




                
            </div>
            <div class="flex flex-col justify-between h-[132px] text-[16px] leading-[18px]">
                    <?php if($trailer):?><button onclick="window.location.href='<?=$trailerSrc?>'" class="btn-wine text-center" ">
                        <p>Watch trailer</p>
                    </button><?php endif?>
                   
                   


                    <?php if( $directorOfPhotography || $editor || $sound || $music):?> <button onclick="toggleMoreInfo()" class="btn-white text-center">
                        <p class="  ">More information</p>
                    </button> <?php endif ?>

                    
            </div>
        </div> 
    </section>
    <?php if(array_key_exists(0, $awards)): ?>  
          
        <section id="Awards" class="mt-[-80px] mb-[160px]">
            <h2 class="font-poppins text-[28px] leading-[37px]">Awards</h2>
            <div class="flex justify-center gap-x-[2%]">
            <?php foreach($awards as $award):?>
                <div class="w-[18.6vw] h-[18.6vw] flex object-contain " >
            
                    <img class="object-contain w-full" src=<?=$award["url"]?> alt="<?=$award["alt"]?>"  srcset="<?= wp_get_attachment_image_srcset($award["id"])?>" sizes="15vw">
                </div>
            
            <?php endforeach; ?>
            </div>
        </section>

    <?php endif; ?>

    <?php if(array_key_exists(1, $quotes)):?>
        <section id="Quotes">
            <?php foreach($quotes as $quote): ?>
                <div class="pb-[160px]">
                <p class=" font-prata text-[38px] leading-[46px]"><?=$quote["quote"]?></p>
                <p class=" font-poppins text-[18px] leading-[18px] mt-[10px] text-right text-wine"><?=$quote["quoted"]?></p>
                </div>


            <?php endforeach ?>
        </section>
    <?php endif; ?>
   

</main>

<script>

    const moreInfos = document.querySelectorAll(".more-info")


    const toggleMoreInfo = () => {

          moreInfos.forEach(infoP => {
            infoP.classList.toggle("hidden");
          });
    } 

</script>



<?php get_footer(); ?>