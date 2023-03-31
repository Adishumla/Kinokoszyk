<?php
/**
 * get all images from media library
 */
//limit 20 images per page

$query_images_args = array(
	'post_type'      => 'attachment',
	'post_mime_type' => 'image',
	'post_status'    => 'inherit',
	'posts_per_page' => - 1,
    'order' => 'DESC',
    'post_per_page' => 2,
);
$query_images = new WP_Query( $query_images_args );
$images = array();

?>

<header>
  <?php get_header(); ?>
</header>
<section class="w-full h-2/3 flex flex-col justify-center items-center bg-white-red poppins text-off-black">
	<div class="ml-28">
	<h1 class="text-3xl font-light text-wine">Kino Koszyk p<span class="font-normal">hotography</span></h1>
  <h2 class="text-9xl font-prata"> Photography </h2>
        <h2><?php the_field('photo_title'); ?></h2>
        <div class="w-1/2 mt-4">
	    <p class="text-xl">En text för att lyfta nyfikenheten för besökarna att kika på Kino Kosyzks tidigare event.
        Även en kort text om att informera besökarna till att kika på Kinos facebook sida för mer information om “mindre event”.</p>
        </div>
    </div>
</section>
<section class="bg-off-white">
    <div class="grid grid-cols-3 gap-[31px] m-[102px]">
            <?php
            $i = 0;
            if ( $query_images->have_posts() ) {
	            foreach ( $query_images->posts as $image ) {
		            $i ++;
		            if ( $i % 3 == 1 ) {
			            $images1[] = $image->ID;
		            }
		            if ( $i % 3 == 2 ) {
			            $images2[] = $image->ID;
		            }
		            if ( $i % 3 == 0 ) {
			            $images3[] = $image->ID;
		            }
	            }
            }
            while ( $query_images->have_posts() ) {
                $query_images->the_post();
            }
            ?>
        <div class="col-span-1">
            <?php
            foreach ( $images1 as $image ) {
                ?>
                    <div class="w-full mb-[26px] overflow-hidden">
                        <img class="w-full hover:scale-110 transition duration-500 ease-in-out" src="<?php echo wp_get_attachment_url( $image ); ?>" alt="">
                    </div>
                <?php
            }
            ?>
        </div>
        <div class="col-span-1">
            <?php
            foreach ( $images2 as $image ) {
                ?>
                <div class="w-full mb-[26] overflow-hidden">
                    <img class="w-full hover:scale-110 transition duration-500 ease-in-out" src="<?php echo wp_get_attachment_url( $image ); ?>" alt="">
                </div>
                <?php
            }
            ?>
        </div>
        <div class="col-span-1">
            <?php
            foreach ( $images3 as $image ) {
                ?>
                <div class="w-full mb-[26] overflow-hidden">
                    <img class="w-full hover:scale-110 transition duration-500 ease-in-out" src="<?php echo wp_get_attachment_url( $image ); ?>" alt="" onclick="openModal();currentSlide(1)">
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</section>

<footer>
  <?php get_footer(); ?>
</footer>

<!-- Modal -->


<script>
    const images = document.querySelectorAll("img");
    const modal = document.querySelector(".modal");

    //modal script
    images.forEach(image => {
        image.addEventListener("click", () => {
            modal.classList.add("open");
            const originalSrc = image.getAttribute("src");
            modal.querySelector("img").src = originalSrc;
        });
    });

</script>