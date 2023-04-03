<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/output.css">
  <link rel="stylesheet" href="css/tailwind.css">
  <title>Home</title>
</head>

<body>
  <?php get_header();
  ?>


  <section id="hero">
    <!-- nu är heron 100vh men den ska vara 100vh minus headern höjd -->
    <div>
      <!-- ska vara en bild i denna div -->
      <img src="<?= get_template_directory_uri() ?>/assets/hero.jpg" alt="hero image" class="object-cover w-full vh-hero">
      <div id="heroTitle" class=" bottom-0 absolute">
        <h1 class="poppins text-[200px] leading-[152px] text-white">KINO KOSZYK</h1>
      </div>
    </div>

  </section>

  <section id="about">
    <div class=" w-full vh-section bg-off-white flex flex-row justify-center items-center gap-[165px]">
      <div id="aboutPicture" class="h-[643.21px] w-[450px] bg-purple-300 shadowHome">
        <img src="<?= get_template_directory_uri() ?>/assets/about.jpg" alt="about image" class="object-fill h-full w-full shadowHome">
      </div>
      <div id=aboutTextbox class="w-[673px] h-[268px] gap-[32px] bg-purple-50">
        <h2 class="font-prata text-[80px] leading-[86px]">Kino Koszyk</h2>
        <p class="poppins text-[20px] leading-[28px]">A text to raise the curiosity of visitors to look at Kino Kosyzk's previous events. Also a short text to inform visitors to look at Kino's Facebook page for more information about "smaller events".</p>
        <button class="btn-wine mt-[50px]">
          <div class="arrow"><img src="<?= get_template_directory_uri() ?>/assets/arrow-white.svg" alt="arrow right"></div>
          Read more
        </button>
      </div>
    </div>
  </section>

  <section id="joanna">
    <div class="w-full vh-section bg-white-red flex flex-row justify-center items-center gap-[165px]">
      <div id=joannaTextbox class=" w-[673px] h-[331px] bg-yellow-50 gap-[32px] ">
        <h3 class="poppins text-[26px] text-wine">Photographer</h3>
        <h2 class="font-prata text-[80px] leading-[86px] ">Joanna Helander</h2>
        <p class="poppins text-[20px] leading-[28px]">Discover the beauty captured through the lens of our talented artist Joanna. Explore her stunning photography and allow yourself to be transported to new worlds of wonder and awe.</p>
        <button class="btn-wine mt-[50px]">
          <div class="arrow"><img src="<?= get_template_directory_uri() ?>/assets/arrow-white.svg" alt="arrow right"></div>
          See photos
        </button>
      </div>
      <!-- tror de ville att picture grid skulle vara responsivt -->
      <div id="pictureGrid" class=" grid grid-cols-2 grid-rows-2 h-[744.67px] w-[530px] gap-[30px]">
        <div class=" h-[357.3px] w-[250px] shadowHome ">
          <img src="<?= get_template_directory_uri() ?>/assets/hero.jpg" alt="hero image" class="object-fill h-full w-full">
        </div>
        <div class="h-[357.3px] w-[250px] shadowHome bg-gray-50">
          <img src="<?= get_template_directory_uri() ?>/assets/hero.jpg" alt="hero image" class="object-fill h-full w-full">
        </div>
        <div class="h-[357.3px] w-[250px] shadowHome bg-gray-50">
          <img src="<?= get_template_directory_uri() ?>/assets/hero.jpg" alt="hero image" class="object-fill h-full w-full">
        </div>
        <div class="h-[357.3px] w-[250px] shadowHome bg-gray-50">
          <img src="<?= get_template_directory_uri() ?>/assets/hero.jpg" alt="hero image" class="object-fill h-full w-full">
        </div>
      </div>
  </section>

  <section id="film">
    <div class=" w-full vh-section bg-pink-300 flex justify-center items-center flex-col ">
      <img src="<?= get_template_directory_uri() ?>/assets/film.jpg" alt="hero image" class="object-cover w-full vh-section">
      <div id=filmTextbox class="w-[673px] h-[268px] absolute right-0 mr-[180px] gap-[32px] text-off-white bg-black">
        <h2 class="font-prata text-[80px] leading-[86px] ">Film</h2>
        <p class="poppins text-[20px] leading-[28px]">Discover the beauty captured through the lens of our talented artist Joanna. Explore her stunning photography and allow yourself to be transported to new worlds of wonder and awe.</p>
        <button class="btn-wine mt-[50px]">
          <div class="arrow"><img src="<?= get_template_directory_uri() ?>/assets/arrow-white.svg" alt="arrow right"></div>
          See films
        </button>
      </div>
    </div>
  </section>

  <section id="event">
    <div class=" w-full vh-section bg-white-red flex flex-row justify-center items-center gap-[165px]">
      <div id="eventPicture" class="h-[643.21px] w-[450px] bg-purple-300 shadowHome ">
        <img src="<?= get_template_directory_uri() ?>/assets/event-home.jpg" alt="event image" class="object-fill h-full w-full">
      </div>
      <div id=eventTextbox class="w-[673px] h-[268px] mr-[180px] gap-[32px] bg-purple-50">
        <h2 class="font-prata text-[80px] leading-[86px] ">Event</h2>
        <p class="poppins text-[20px] leading-[28px]">A text to raise the curiosity of visitors to look at Kino Kosyzk's previous events. Also a short text to inform visitors to look at Kino's Facebook page for more information about "smaller events".</p>
        <div id="btnContainer" class="flex flex-row space-x-20">
          <button class="btn-wine mt-[50px]">
            <div class="arrow"><img src="<?= get_template_directory_uri() ?>/assets/arrow-white.svg" alt="arrow right"></div>
            See events
          </button>
          <button class="btn-wine mt-[50px]">
            <div class="arrow"><img src="<?= get_template_directory_uri() ?>/assets/arrow-white.svg" alt="arrow right"></div>
            Events on Facebook
          </button>
        </div>
      </div>
    </div>
  </section>

  <section id="partners">

    <!-- <?php if (get_field('home_hero')) : ?>
            <img src="<?php the_field('home_hero'); ?>" />
	    <?php endif; ?> -->
  </section>


  <?php get_footer(); ?>
</body>

</html>