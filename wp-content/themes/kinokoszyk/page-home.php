<?php get_header(); ?>

<?php get_header(); ?>


<section id="hero">
  <div>
    <img src="<?= get_template_directory_uri() ?>/assets/compressedPictures/heroCompressed.webp" alt="Hero Image of a parade on a mountain" class="object-cover w-full vh-hero">
    <div id="heroTitle" class=" bottom-0 absolute">
      <h1 class="poppins text-[200px] leading-[152px] text-white">KINO KOSZYK</h1>
    </div>
  </div>

</section>
<section id="about" class="px-8 bg-off-white ">
  <div class=" w-full vh-section flex flex-row justify-evenly items-center gap-[5%]">
    <div id="aboutPicture" class=" shadowHome h-7/12 w-5/12 max-w-[450px] max-h-[643.21px]">
      <img src="<?= get_template_directory_uri() ?>/assets/compressedPictures/umbrellaMan.webp" alt="about image of a man with an umbrella staring over the ocean" class="object-cover">
    </div>
    <div id=aboutTextbox class="textboxHome">
      <h2 class="font-prata text-[80px] leading-[58px] mb-[26px]">Kino Koszyk</h2>
      <p class="poppins text-[20px] leading-[28px]">With a passion for storytelling and a commitment to authenticity, Kino Koszyk produces thought-provoking documentaries that provide insight into the complex and fascinating history, culture, and people of Poland. Through their work, they aim to promote greater understanding and appreciation of this beautiful country and its people.</p>
      <a class="btn-wine flex items-center mt-[60px]" href="<?php echo get_permalink(get_page_by_path("about")) ?>">
        <div class="arrow ml-[178.5px]"><img src="<?= get_template_directory_uri() ?>/assets/arrow-white.svg" alt="arrow right"></div>
        <div class="ml-[69.5px]">
          Read more
        </div>
      </a>
    </div>
  </div>
</section>


<!-- denna sektion skapar scroll pga av bilderna just nu -->
<section id="joanna" class="px-8 bg-white-red">
  <div class="w-full vh-section  flex flex-row justify-evenly items-center gap-[5%]">
    <div id=joannaTextbox class=" textboxHome h-[744.67px] ">
      <h3 class="poppins text-[26px] text-wine">Photographer</h3>
      <h2 class="font-prata text-[80px] leading-[86px] mb-[26px]">Joanna Helander</h2>
      <p class="poppins text-[20px] leading-[28px]">Discover the beauty captured through the lens of our talented artist Joanna. Explore her stunning photography and allow yourself to be transported to new worlds of wonder and awe.</p>
      <a class="btn-wine flex items-center mt-[60px]" href="<?php echo get_permalink(get_page_by_path("photos")) ?>">
        <div class="arrow ml-[179px]"><img src="<?= get_template_directory_uri() ?>/assets/arrow-white.svg" alt="arrow right"></div>
        <div class="ml-[69px]">
          See photos
        </div>
      </a>
    </div>

    <div id="pictureGrid" class=" grid grid-cols-2 grid-rows-2 max-h-[744.67px] max-w-[530px] gap-[30px] w-6/12 h-8/12 ">
      <div class=" max-h-[357.3px] max-w-[250px] shadowHome">
        <img src="<?= get_template_directory_uri() ?>/assets/compressedPictures/womanGroupSmall.webp" alt="Photograph example of ladies sitting together on the ground laughing" class="object-cover h-full w-full ">
      </div>
      <div class="max-h-[357.3px] max-w-[250px] shadowHome ">
        <img src="<?= get_template_directory_uri() ?>/assets/compressedPictures/womanWorkingSmall.webp" alt="Photograph example of a woman working" class="object-fill h-full w-full">
      </div>
      <div class="max-h-[357.3px] max-w-[250px] shadowHome ">
        <img src="<?= get_template_directory_uri() ?>/assets/compressedPictures/womanSmokingSmall.webp" alt="Photograph example of a woman smoking" class="object-cover h-full w-full">
      </div>
      <div class="max-h-[357.3px] max-w-[250px] shadowHome">
        <img src="<?= get_template_directory_uri() ?>/assets/compressedPictures/powerSmall.webp" alt="Phtograph example of the womensday in ruda 1976" class="object-fill h-full w-full">
      </div>
    </div>
</section>

<section id="film">
  <div class=" w-full vh-section  flex justify-center items-center flex-col ">
    <img src="<?= get_template_directory_uri() ?>/assets/compressedPictures/filmCompressed.webp" alt="Big photograph of a woman sitting on stairs of a ruined building" class="object-cover w-full vh-section">
    <div id=filmTextbox class="w-[673px] h-[268px] absolute right-0 mr-[180px] gap-[32px] text-off-white">
      <h2 class="font-prata text-[80px] leading-[58px] mb-[26px] ">Film</h2>
      <p class="poppins text-[20px] leading-[28px]">Experience the magic of cinema with Kino Kozsyks. Our films take you on a journey beyond the screen, with captivating stories and stunning visuals that will leave you inspired. Don't miss out on the opportunity to immerse yourself in the world of Kino Kozsyks. </p>
      <a class="btn-white flex items-center mt-[50px]" href="<?php echo get_permalink(get_page_by_path("films")) ?>">
        <div class="arrow ml-[170px]"><img src="<?= get_template_directory_uri() ?>/assets/arrow-black.svg" alt="arrow right"></div>
        <div class="ml-[78px] ">
          See films
        </div>
      </a>
    </div>
  </div>
</section>

<section id="event" class="px-8 bg-white-red">
  <div class=" w-full vh-section flex flex-row items-center justify-evenly gap-[5%]">
    <div id="eventPicture" class="shadowHome h-7/12 w-5/12 max-w-[450px] max-h-[643.21px]">
      <img src="<?= get_template_directory_uri() ?>/assets/compressedPictures/womanWorkingBig.webp" alt="Event image of a woman working" class="object-cover">
    </div>
    <div id=eventTextbox class="textboxHome">
      <h2 class="font-prata text-[80px] leading-[58px] mb-[26px] ">Event</h2>
      <p class="poppins text-[20px] leading-[28px]">Discover the latest movie screenings and events at Kino Koszyk's event page! Immerse yourself in a world of cinema and entertainment with our diverse range of films, from classics to new releases. Join us for a unique cinematic experience in the heart of the city. Book your tickets now and be a part of the excitement!</p>
      <div id="btnContainer" class="flex flex-row flex-wrap gap-[24px] mt-[50px]">
        <a class="btn-white flex items-center" href="<?php echo get_permalink(get_page_by_path("events")) ?>">
          <div class="arrow ml-[177.5px]"><img src="<?= get_template_directory_uri() ?>/assets/arrow-black.svg" alt="arrow right"></div>
          <div class="ml-[70.5px]">

            See events
          </div>
        </a>
        <a class="btn-wine flex items-center" href="https://www.facebook.com/joanna.helander.169">
          <div class="arrow ml-[213.5px]"><img src="<?= get_template_directory_uri() ?>/assets/arrow-white.svg" alt="arrow right"></div>
          <div class="ml-[34.5px] ">
            Events on Facebook
          </div>
        </a>
      </div>
    </div>
  </div>
</section>

<section id="partners">
  <!-- h-[383.7px] -->
  <?php get_template_part('content', 'partners') ?>


  <!-- <?php if (get_field('home_hero')) : ?>
            <img src="<?php the_field('home_hero'); ?>" />
      <?php endif; ?> -->
</section>

<?php get_footer(); ?>