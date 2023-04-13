<?php get_header(); ?>

<section class="w-full h-4/4 flex flex-col-reverse lg:flex-row  justify-center items-center bg-white-red font-poppins text-off-black mt-[80px] mb-20 imgas lg:align-center lg:px-[10.4%]">
    <div class="flex flex-col w-3/4 md:w-4/4 justify-between lg:min-h-[560px]">
        <h1 class="text-5xl md:text-[60px] lg:text-[88px] font-prata p-0 md:leading-[86px] align-center">Joanna Helander</h1>
        <div class="w-2/6 mt-4 w-full mr-4 lg:w-auto lg:mr-[5%] max-w-[700px]">
            <p class="text-xl flex flex-col gap-4 w-full">
                <span class="w-full">Learn about Joanna Helander, a photographer, writer, and filmmaker born in Ruda Slaska in 1948. Arrested for protesting the invasion of Czechoslovakia, she emigrated to Sweden in 1971 and became an accomplished photographer, receiving the Swedish "Photographer of the Year" award in 1983.
                </span>
                <span>
                    Her early contacts with Poland's democratic opposition led her to direct a festival of independent Polish culture in Sweden in 1981, and she went on to publish books of photography and translations of Polish poetry. She has also directed and produced several films based on her own photographs. Joanna Helander's work has appeared in publications and television programs in Poland, Germany, and the U.S.A.
                </span>
            </p>
        </div>
        <div class="flex flex-col md:flex-row gap-6 mt-20 h-fit">
            <a href="#biography" id="biography-button" class="btn-white py-2.5 px-5 text-center flex items-center justify-center m-0">Read her biography</a>
            <a href="#interview" id="interview-button" class="btn-wine py-2.5 px-5 text-center flex items-center justify-center m-0">Read her interview</a>
        </div>
    </div>
    <div class="flex  md:justify-start justify-center md:w-3/4 lg:w-2/4  lg:min-w-[400px] lg:max-w-[600px]">
        <img class="h-full w-3/4 md:w-3/4 lg:w-full object-fill shadow-2xl" src="<?php echo get_template_directory_uri(); ?>/assets/Joanna-interview.jpg" alt="">
    </div>
</section>
<?php
$images_per_page = 15;
$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$offset = ($paged - 1) * $images_per_page;
?>
<section class="bg-white imgas">
    <div class="py-12 px-[8%] pr-8 justify-start md:pl-[8%] md:pb-2">
        <h2 class="font-prata text-4xl lg:text-6xl pb-4">
            Photography by Joanna Helander
        </h2>
    </div>
    <div class="w-auto flex flex-col justify-center items-center">

        <div class="masonry text-center bg-white w-screen px-[8%]">
            <?php
			$images_per_page = 12;
			$paged = get_query_var('paged') ? get_query_var('paged') : 1;
			$offset = ($paged - 1) * $images_per_page;

			$query_images_args = array(
				'post_type' => 'photo',
				'posts_per_page' => $images_per_page,
				'paged' => $paged,
				'offset' => $offset,
				'orderby' => 'post_date',
				'order' => 'DESC',
				'post_status' => 'publish',
				'size' => 'full',
			);

			$query_images = new WP_Query($query_images_args);

			$image_urls = array(); // Initialize the array

			while ($query_images->have_posts()) {
				$query_images->the_post();
				$post_content = get_the_content();
				preg_match_all('/<img[^>]+>/', $post_content, $matches);
				$images = $matches[0];
				foreach ($images as $image) {
					preg_match('/src="([^"]+)"/i', $image, $image_src);
					$image_url = $image_src[1];
					$image_urls[] = $image_url;
				}
			}
			foreach ($image_urls as $image_url) { ?>
                <div class="inline-block align-top overflow-hidden masonry-item w-[39%] md:w-[26.3%] lg:w-[26.7%] mb-4">
                    <a href="<?php echo $image_url; ?>" target="_blank">
                        <img class="w-full hover:scale-110 transition duration-500 ease-in-out h-auto object-cover object-center" src="<?php echo $image_url; ?>" alt="">
                    </a>
                </div>
			<?php } ?>
        </div>
    </div>
    <div class="flex justify-start md:justify-end px-[8%] pt-4">
        <a href=<?php echo get_site_url(); ?>/photo class="btn-wine py-2.5 px-5 text-center flex items-center justify-center">More of her photographs <img class="ml-2 rotate-180" src="<?php echo get_template_directory_uri(); ?>/assets/arrow-white.svg" alt=""></a>
    </div>
</section>
<section class="flex flex-col items-center bg-white pt-12 md:pt-20 lg:pt-12 imgas gap-12">
    <div class="w-10/12 md:w-11/12  md:max-h-[400px] lg:max-h-[443px] md:w-|762px] lg:w-4/5 flex flex-col md:flex-row lg:flex-row justify-center h-fit shadow-2xl">
        <div class="w-full md:w-1/3 lg:w-1/3 flex justify-center group-hover:bg-off-white overflow-hidden">
            <img class="w-full object-cover hover:scale-110 duration-200" src="<?php echo get_template_directory_uri(); ?>/assets/film-joanna.jpg" alt="">
        </div>
        <div class="w-full md:w-2/3 lg:w-2/3 flex flex-col justify-between p-6 md:p-10 lg:p-10 md:px-6">
            <div>
                <h3 class=" text-3xl md:text-4xl lg:text-4xl leading-[38px] font-bold hover:underline transition duration-200 ease-in-out">
                    <a href=<?php echo get_site_url(); ?>/film>Film made by Joanna</a>
                </h3>
            </div>
            <div class="my-8 text-[20px]">
                <p class="text-[18px]">Experience the beauty and tragedy of wartime Poland through the eyes of filmmakers who bring these powerful stories to life on the big screen. Witness the struggles and triumphs of ordinary people caught up in the midst of one of the greatest conflicts in history. Don't miss the opportunity to be moved and inspired.</p>
            </div>
            <div class="flex justify-start md:justify-end lg:justify-end mb-4">
                <a href=<?php echo get_site_url(); ?>/film class="btn-wine py-2.5 px-5 text-center flex items-center justify-center">More of her films <img class="ml-2 rotate-180" src="<?php echo get_template_directory_uri(); ?>/assets/arrow-white.svg" alt=""></a>
            </div>
        </div>
    </div>
    <div class="w-10/12 md:w-11/12  md:max-h-[400px] lg:max-h-[443px] md:w-|762px] lg:w-4/5 flex flex-col md:flex-row lg:flex-row justify-center h-fit shadow-2xl">
        <div class="w-full md:w-1/3 lg:w-1/3 flex justify-center group-hover:bg-off-white overflow-hidden">
            <img class="w-full object-cover hover:scale-110 duration-200" src="<?php echo get_template_directory_uri(); ?>/assets/book-joanna.jpg" alt="">
        </div>

        <div class="w-full md:w-2/3 lg:w-2/3 flex flex-col justify-between p-6 md:p-10 md:px-6 lg:p-10">
            <div>
                <h3 class=" text-3xl md:text-4xl lg:text-4xl leading-[38px] font-bold hover:underline hover:cursor-pointer transition duration-200 ease-in-out">
                    <a href=<?php echo get_site_url(); ?>/book>Book made by Joanna</a>
                </h3>
            </div>
            <div class="my-8 text-[20px]">
                <p class="text-[20px]">Experience the beauty and tragedy of wartime Poland through the eyes of filmmakers who bring these powerful stories to life on the big screen. Witness the struggles and triumphs of ordinary people caught up in the midst of one of the greatest conflicts in history. Don't miss the opportunity to be moved and inspired.</p>
            </div>
            <div class="flex justify-start md:justify-end lg:justify-end mb-4">
                <a href=<?php echo get_site_url(); ?>/book class="btn-wine py-2.5 px-5 text-center flex items-center justify-center">More of her books <img class="ml-2 rotate-180" src="<?php echo get_template_directory_uri(); ?>/assets/arrow-white.svg" alt=""></a>
            </div>
        </div>
    </div>
</section>
<section class="py-12 lg:py-40 md:py-20 imgas bg-white">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 flex-row justify-center items-start bg-off-white py-8 px-[8%] md:px-28 lg:px-44 bg-white-red">
    <div class="">
        <h3 class="text-[28px] md:text-[38px] leading-[38px] font-bold mb-4 text-wine">Scholarship</h3>
        <p class="text-[18px] md:text-[20px] flex justify-between align-self-start pt-1 flex-col gap-4">
            <span>
                Sveriges Författarfond: Multiple times.
            </span>
            <span>
                Bildkonstnärsfonden: Multiple times.
            </span>
            <span>
                Konstnärsnämnden: 10-year scholarship as a filmmaker in 2001. 2-year scholarship in 2017 and 2020.
            </span>
            <span>
                Svenska Filminstitutet: Scholarship 2003.
            </span>
            <span>
                Stiftelsen Gnistan: Göteborg 2019.
            </span>
            <span>
                Residensstipendium: Paris 2022, Svenska Fotografers Förbund.
            </span>
            <span>
                Stiftelsens Katz Stipendium: Göteborg 2022.
            </span>
        </p>
    </div>
    <div>
        <h3 class="text-[28px] md:text-[38px] leading-[38px] font-bold imgas text-wine mb-4">Awards</h3>
        <p class="text-[18px] md:text-[20px] flex justify-between align-self-start pt-1 flex-col gap-4">
            <span>
                John Cassavetes Prize from the publishing house Korpen (together with Tommy Berggren) 1995.
            </span>
            <span>
                Polish Foreign Minister's Grand Prize in 2001 (together with Bo Persson).
            </span>
            <span>
                Commemorative Medal of Solidarity, Poland 2005.
            </span>
            <span>
                Freedom and Solidarity Medal, Poland President Bronislaw Komorowski, 2012.
            </span>
            <span>
                City of Prague Medal for the Defense of Human Rights, Prague 2013.
            </span>
            <span>
                Czech Senate Award for Defense of Human Rights, 2018.
            </span>
        </p>
    </div>
    </div>
</section>
<section id="interview" class="bg-black lg:px-44 absolute top-0 left-0 w-full h-fit hidden z-50">
    <div class="bg-off-white py-[102px] px-6 md:px-20 lg:px-44 font-poppins max-w-[1151px] mx-auto">
        <div class="float-right  lg:mr-[-150px] lg:mt-[-50px] h-auto top-0 right-0 lg:top-12 p-10 cursor-pointer close-interview">
            <img class="" src="<?php echo get_template_directory_uri(); ?>/assets/icon-exit.svg" alt="">
        </div>
        <h1 class="text-5xl md:text-7xl font-bold text-start pt-20 font-prata">
            REALITY MIS EN SCENE
        </h1>
        <h2 class="text-[20px] leading-[20px] text-start pt-4 pb-9">
            Interview with Joanna Helander by Jerzy Illg for Polish journal Naglos
        </h2>
        <div>
            <p class="text-[20px] flex flex-col gap-4">
                <span>
                    <b>Jerzy Illg:</b> Tell me what it felt like to return to Poland after emigratingto Sweden.
                </span>
                <span>
                    <b>Joanna Helander:</b> The first time I came back to Poland after living over five years in Sweden was in March 1976. I had trained as a photographer in Gothenburg, and now I wanted to take pictures of Ruda, my home town in southern Poland, where my parents, my brother, my aunt and my grandmother was still living.
                </span>
                <span>
                    I was 28 and had begun to feel curious about the place I had once left with such enormous relief, well, fled from. I only had to get out at its railway station to be hit by a strange and surprising emotion. These cobblestones, these rusty hinges, the Karlik beerstand – all of it was all so familiar, yet utterly new, as if I was seeing it for the first time. The first old woman in traditional long skirts I met with recognised me instantly, the ironminer’s brass band the town was so proud of was marching down the main street in a funeral procession –suddenly everything gripped me, felt so close.
                </span>
                <span>
                    Evidently it was this kind of aestehtic that, unbeknown to me, had shaped my nature! I felt a tremendous need to grab hold of what I was experiencing, fix it all in some way. And then, this immediate sense of belonging… The Silesian dialect, the humour, the jokes, the local place names; Godula, Bobrek, Orzegow…Yet all this – these allotments with their gooseberry bushes, blackcurrants and cherry trees – was so irremediably poisoned. These freshly painted doorways, the well-kept houses. And – right on their doorsteps – a coke refinery belching smoke that stifled you, stung your eyes. But I was surprised, too, by the resilience, the vitality, the irrepressible humour of individuals I ran into, realising to my amazement that somewhere deep down inside them their sense of personal dignity was fully intact, unbroken.
                </span>
                <span>
                    <b>Jerzy Illg:</b> Let´s go back to your photos…Joanna Helander:I find it hard to describe or analyze my own photos, what I can´t express in words I express in pictures. But one thing I do think I see, clearly: the touch of darkness and melancholy in my Polish pictures is not to be found in my Swedish ones, not in the same way. They are lighter, in both senses. When I exhibited in Poland in 1979 a Katowice journalist said the Poland I had depicted didn´t exist in reality, it could only be a put up job, ordered by the CIA. I burst out laughing. It seems to me in spite of everything my pictures don´t lack humour… 
                </span>
                <span>
                    <b>Jerzy Illg:</b> A lot of people have written that your books, exhibitions and films approach your subjects with tenderness.
                </span>
                <span>
                    <b>Joanna Helander:</b> I take it as a compliment…
                </span>
                <span>
                    <b>Jerzy Illg:</b> There is so much warmth in your pictures. It makes your photos into something more than documentaries.
                </span>
                <span>
                    <b>Joanna Helander:</b> Because I am not just documenting, am I? Not limiting myself to mere facts. Purely documentary photos are not very exciting. Anyone who wants to mirror reality must first stage it. 
                </span>
                <span>
                    <b>Jerzy Illg:</b> That is what turns photos into works of art. The people in your pictures, your Ruda, if you like, are raised to mythological status. Tell me, do you think your way of seeing the world is in some way connected with the blend of Polish, German and Jewish? With your being born in a border country, has that meant something?  Joanna Helander: There is something in that, certainly. Yet I must say the fact of my having emigrated and suddenly finding myself on another planet has been most important of all. It´s given me an extra dimension in life, the kind of detachment one needs if one is to see clearly.
                </span>
                <span>
                    From a conversation published in the Polish journal Naglos, October 1994
                </span>
            </p>
            <div class="float-right  lg:mr-[-100px] h-auto top-0 right-0 lg:top-12 cursor-pointer close-interview">
                <img class="" src="<?php echo get_template_directory_uri(); ?>/assets/icon-exit.svg" alt="">
            </div>
        </div>

    </div>
</section>

    <section id="biography" class=" bg-black lg:px-44 absolute top-0 left-0 w-full h-fit hidden z-50 ">
        <div class="max-w-[1151px] bg-off-white py-[102px] px-6 md:px-20 lg:px-44 font-poppins lg:mx-auto">
            <div class="float-right lg:mr-[-150px] lg:mt-[-50px] h-auto top-0 right-0 lg:top-12 p-10 cursor-pointer close-biography">
                <img class="" src="<?php echo get_template_directory_uri(); ?>/assets/icon-exit.svg" alt="">
            </div>
            <h1 class="text-5xl md:text-7xl font-bold text-start pt-20 font-prata">
                BIOGRAPHY
            </h1>
            <h2 class="text-[20px] leading-[20px] text-start pt-4 pb-9">
                Joanna Helander
            </h2>
            <div>
                <p class="text-[20px] flex flex-col gap-4">
                <span>
                    Joanna Helander, nee Koszyk, was born in Ruda Slaska in 1948. While studying Roman languages and literature at Jagiellonian University in Cracow in 1968, she was arrested for protesting against the invasion of Czechoslovakia by the countries of the Warsaw Pact.
                </span>
                    <span>
After emigrating to Sweden in 1971, Joanna Helander finished her schooling in Gothenburg with a degree in photography. Her talents in the medium were soon recognized and when, in Sweden in 1978, she published her first book of photographs, Kobieta (Woman), inspired by her return visits to Poland, she also revealed her gifts as a writer. In 1983, she received the Swedish "Photographer of the Year" award.                </span>
                    <span>
Joanna Helander's early contacts with artists and intellectuals of Poland's democratic opposition were instrumental in bringing about the great festival of independent Polish culture which she directed in Sweden in 1981. At that time, she edited "The Gag and the Word", which included her translations into Swedish of poems by Stanislaw Baranczak and Ryszard Krynicki.                </span>
                    <span>
Together with Bo Persson, she translated a larger selection of Krynicki's poems, and these, accompanied by her photographs, appeared under the title "The Planet Phantasmagoria" in 1996.
"Gerard K-Letters from Poland", the story of her Silesian family, was a great popular success in Sweden when it was published in 1986 and it was subsequently broadcasted as a radio play.                </span>
                    <span>
Photography also took Joanna Helander into filmmaking. On the basis of her own photographs she made the short films "Babcia, Who is a Good Father?", "Tales of Gerard K" and "Long Live Poland!". In collaboration with Bo Persson, she directed and co-produced the full-length film, "Eighth Day Theatre" , which won several awards, as well as the films "Returning", devoted to the fate of her Silesian-Jewish family, and The Twins from Cracow.                </span>
                    <span>
Joanna Helander is also well known in Poland where her work has appeared in a number of newspapers, journals, on bookcovers, etc. Her photographs were featured in the books Powroty-Returning, published by A5, and in Anna Bikont and Joanna Szczesny's Memory's Rubbish, Friends and Dreams, dedicated to Wislawa Szymborska and published by Proszynski i S-ka. A fragment in Polish from her book Gerard K - Letters from Poland, as well as an interview with the author appeared in the cultural journal 'Na Glos', 15/16.                </span>
                    <span>
A feature about Joanna Helander, titled "The Silesian Woman from Göteborg" was made for Polish Television by Joanna Illg. The Polish film director Kazimierz Kutz dedicated a program to her in in his television series Happy, if Sad.                </span>
                    <span>
In addition to her artistic work in Sweden and Poland, Joanna Helander writes for and publishes her photographs in newspapers and journals in several other countries, including Germany and the U.S.A.                </span>

                </p>
                <div class="float-right lg:mr-[-100px] h-auto top-0 right-0 lg:top-12 cursor-pointer close-biography">
                    <img class="" src="<?php echo get_template_directory_uri(); ?>/assets/icon-exit.svg" alt="">
                </div>
            </div>

        </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.min.js"></script>

<script>
    window.addEventListener('load', function() {
        masonry.layout();
    });
    const interviewButton = document.getElementById('interview-button');
    const biographyButton = document.getElementById('biography-button');
    const interviewSection = document.getElementById('interview');
    const closeInterview = document.querySelectorAll('.close-interview');
    const biographySection = document.getElementById('biography');
    const closeBiography = document.querySelectorAll('.close-biography');
    const body = document.querySelector('body');
    const imgas = document.querySelectorAll('.imgas');

    interviewButton.addEventListener('click', () => {
        interviewSection.classList.remove('hidden');
        imgas.forEach((imga) => {
            imga.classList.add('hidden');
        });
    });

    closeInterview.forEach((close) => {
        close.addEventListener('click', () => {
            interviewSection.classList.add('hidden');
            window.scrollTo(0, 0)
            imgas.forEach((imga) => {
                imga.classList.remove('hidden');
            });
        });
    });

    biographyButton.addEventListener('click', () => {
        biographySection.classList.remove('hidden');
        imgas.forEach((imga) => {
            imga.classList.add('hidden');
        });
    });

closeBiography.forEach((close) => {
        close.addEventListener('click', () => {
            biographySection.classList.add('hidden');
            window.scrollTo(0, 0)
            imgas.forEach((imga) => {
                imga.classList.remove('hidden');
            });
        }
    );
});


        var masonry = new Masonry('.masonry', {
            itemSelector: '.masonry-item',
            columnWidth: '.masonry-item',
            percentPosition: true,
            gutter: 20,
            horizontalOrder: true,
        });

</script>

<?php get_footer() ?>