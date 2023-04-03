<?php get_header(); ?>

<body>


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
      <div id="aboutPicture" class="h-[643.21px] w-[450px] shadowHome">
        <img src="<?= get_template_directory_uri() ?>/assets/about.jpg" alt="about image" class="object-fill h-full w-full min-w-[450px]">
      </div>
      <div id=aboutTextbox class="w-[673px] h-[268px] ">
        <h2 class="font-prata text-[80px] leading-[58px] mb-[26px]">Kino Koszyk</h2>
        <p class="poppins text-[20px] leading-[28px]">A text to raise the curiosity of visitors to look at Kino Kosyzk's previous events. Also a short text to inform visitors to look at Kino's Facebook page for more information about "smaller events".</p>
        <a class="btn-wine flex items-center" href="<?php echo get_permalink(get_page_by_path("about")) ?>">
          <div class="arrow ml-[178.5px]"><img src="<?= get_template_directory_uri() ?>/assets/arrow-white.svg" alt="arrow right"></div>
          <div class="ml-[69.5px]">
            Read more
          </div>
        </a>
      </div>
    </div>
  </section>

  <section id="joanna">
    <div class="w-full vh-section bg-white-red flex flex-row justify-center items-center gap-[165px]">
      <div id=joannaTextbox class=" w-[673px] h-[331px] gap-[32px] ">
        <h3 class="poppins text-[26px] text-wine">Photographer</h3>
        <h2 class="font-prata text-[80px] leading-[86px] mb-[22px]">Joanna Helander</h2>
        <p class="poppins text-[20px] leading-[28px]">Discover the beauty captured through the lens of our talented artist Joanna. Explore her stunning photography and allow yourself to be transported to new worlds of wonder and awe.</p>
        <a class="btn-wine flex items-center" href="<?php echo get_permalink(get_page_by_path("photos")) ?>">
          <div class="arrow ml-[179px]"><img src="<?= get_template_directory_uri() ?>/assets/arrow-white.svg" alt="arrow right"></div>
          <div class="ml-[69px]">
            See photos
          </div>
        </a>
      </div>
      <!-- tror de ville att picture grid skulle vara responsivt -->
      <div id="pictureGrid" class=" grid grid-cols-2 grid-rows-2 h-[744.67px] w-[530px] gap-[30px] min-w-[530px]">
        <div class=" h-[357.3px] w-[250px] shadowHome">
          <img src="<?= get_template_directory_uri() ?>/assets/_Szczyrk2_L.jpg" alt="ladies sitting together on the ground" class="object-cover h-full w-full">
        </div>
        <div class="h-[357.3px] w-[250px] shadowHome ">
          <img src="<?= get_template_directory_uri() ?>/assets/event-home.jpg" alt="lady working" class="object-fill h-full w-full">
        </div>
        <div class="h-[357.3px] w-[250px] shadowHome ">
          <img src="<?= get_template_directory_uri() ?>/assets/ladySmoking.jpg" alt="picure of lady smoking" class="object-cover h-full w-full">
        </div>
        <div class="h-[357.3px] w-[250px] shadowHome">
          <img src="<?= get_template_directory_uri() ?>/assets/power.jpg" alt="picture of the womensday in ruda 1976" class="object-fill h-full w-full">
        </div>
      </div>
  </section>

  <section id="film">
    <div class=" w-full vh-section  flex justify-center items-center flex-col ">
      <img src="<?= get_template_directory_uri() ?>/assets/film.jpg" alt="" class="object-cover w-full vh-section">
      <div id=filmTextbox class="w-[673px] h-[268px] absolute right-0 mr-[180px] gap-[32px] text-off-white">
        <h2 class="font-prata text-[80px] leading-[58px] mb-[26px] ">Film</h2>
        <p class="poppins text-[20px] leading-[28px]">Discover the beauty captured through the lens of our talented artist Joanna. Explore her stunning photography and allow yourself to be transported to new worlds of wonder and awe.</p>
        <a class="btn-white flex items-center" href="<?php echo get_permalink(get_page_by_path("films")) ?>">
          <div class="arrow ml-[170px]"><img src="<?= get_template_directory_uri() ?>/assets/arrow-black.svg" alt="arrow right"></div>
          <div class="ml-[78px]">
            See films
          </div>
        </a>
      </div>
    </div>
  </section>

  <section id="event">
    <div class=" w-full vh-section bg-white-red flex flex-row items-center justify-center gap-[165px]">
      <div id="eventPicture" class="h-[643.21px] w-[450px] shadowHome">
        <img src="<?= get_template_directory_uri() ?>/assets/event-home.jpg" alt="event image" class="object-fill h-full w-full min-w-[450px]">
      </div>
      <div id=eventTextbox class="w-[673px] h-[268px]">
        <h2 class="font-prata text-[80px] leading-[58px] mb-[26px] ">Event</h2>
        <p class="poppins text-[20px] leading-[28px]">A text to raise the curiosity of visitors to look at Kino Kosyzk's previous events. Also a short text to inform visitors to look at Kino's Facebook page for more information about "smaller events".</p>
        <div id="btnContainer" class="flex flex-row flex-wrap gap-[24px]">
          <a class="btn-white flex items-center" href="<?php echo get_permalink(get_page_by_path("events")) ?>">
            <div class="arrow ml-[177.5px]"><img src="<?= get_template_directory_uri() ?>/assets/arrow-black.svg" alt="arrow right"></div>
            <div class="ml-[70.5px]">

              See events
            </div>
          </a>
          <a class="btn-wine flex items-center" href="https://www.facebook.com/joanna.helander.169">
            <div class="arrow ml-[213.5px]"><img src="<?= get_template_directory_uri() ?>/assets/arrow-white.svg" alt="arrow right"></div>
            <div class="ml-[34.5px]">
              Events on Facebook
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>

  <section id="partners">
    <div class="w-full h-[383.7px] bg-pink-200">
      <h3>
        Här ska partners sektionen visas
      </h3>

    </div>

    <!-- <?php if (get_field('home_hero')) : ?>
            <img src="<?php the_field('home_hero'); ?>" />
	    <?php endif; ?> -->
  </section>


  <?php get_footer(); ?>
</body>

</html>