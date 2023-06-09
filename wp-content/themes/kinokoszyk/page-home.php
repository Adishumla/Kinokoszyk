<?php get_header(); ?>


<section id="hero">

  <div class="overflow-hidden">
    <div class="w-[250%] sm:w-full">
      <img src="<?= get_template_directory_uri() ?>/assets/compressedPictures/heroCompressed.webp" alt="Hero Image of a parade on a mountain" class="object-cover w-full h-[calc(100vh-100px)]  lg:h-[calc(100vh-89px)] ">
    </div>
    <div id="heroTitle" class=" bottom-0 absolute">
      <h1 class="poppins text-[80px] leading-[64px] sm:text-[100px] sm:leading-[76px] lg:text-[200px] lg:leading-[152px] text-white">KINO KOSZYK</h1>
    </div>
  </div>

</section>
<section id="about" class="px-8 bg-off-white ">
  <div class=" w-full h-[1164px] sm:h-[649px] lg:h-[1100px] flex flex-col items-center sm:flex-row sm:justify-evenly sm:items-center gap-[48px] sm:gap-[5%]">
    <div id="aboutPicture" class="">
      <!-- mt-[48px] sm:mt-0 shadowHome w-[380px] h-[542px] sm:max-w-[243px] sm:max-h-[341px] sm:h-7/12 sm:w-5/12 lg:max-w-[450px] lg:max-h-[643.21px] -->
      <img src="<?= get_template_directory_uri() ?>/assets/compressedPictures/umbrellaMan.webp" alt="about image of a man with an umbrella staring over the ocean" class="object-cover shadowHome mt-[48px] w-[380px] h-[542px] lg:w-[450px] lg:h-[643.21px] sm:mt-0 sm:w-[243px] sm:h-[341px]">
    </div>
    <div id=aboutTextbox class="flex flex-col justify-center w-[380px] sm:w-[319px] lg:w-[673px]">
      <h2 class="font-prata text-[52px] leading-[60px]  ls:text-[60px] ls:leading-[68px] lg:text-[80px] lg:leading-[86px] mb-[26px]">Kino Koszyk</h2>
      <p class="poppins text-[18px] leading-[28px] sm:text-[20px] sm:leading-[28px]">With a passion for storytelling and a commitment to authenticity, Kino Koszyk produces thought-provoking documentaries that provide insight into the complex and fascinating history, culture, and people of Poland. Through their work, they aim to promote greater understanding and appreciation of this beautiful country and its people.</p>
      <a class="btn-wine flex items-center mt-[60px]" href="<?php echo get_site_url(); ?>/about ">
        <div class="arrow ml-[178.5px]"><img src="<?= get_template_directory_uri() ?>/assets/arrow-white.svg" alt="arrow right"></div>
        <div class="ml-[69.5px]">
          Read more
        </div>
      </a>
    </div>
  </div>
</section>


<section id="joanna" class="px-8 bg-white-red">
  <div class="w-full h-[1244px] sm:h-[649px] lg:h-[1100px] flex flex-col-reverse items-center sm:flex-row sm:justify-evenly sm:items-center sm:gap-[5%]">
    <div id=joannaTextbox class=" flex flex-col mb-[100px] sm:mb-0 justify-center w-[380px] sm:w-[319px] lg:w-[673px]">
      <h3 class="poppins text-[24px] leading-[28px] sm:text-[24px] sm:leading-[28px] lg:text-[26px] lg:leading-[37px] text-wine">Photographer</h3>
      <!-- För att få Joanna Helander att lägga sig på rad så måste fonten vara en annan storlek samt leadingen. -->
      <h2 class="font-prata text-[52px] leading-[60px]  ls:text-[60px] ls:leading-[68px] lg:text-[80px] lg:leading-[86px] mb-[26px]">Joanna Helander</h2>
      <p class="poppins text-[18px] leading-[28px] sm:text-[20px] sm:leading-[28px]">Discover the beauty captured through the lens of our talented artist Joanna. Explore her stunning photography and allow yourself to be transported to new worlds of wonder and awe.</p>
      <a class="btn-wine flex items-center mt-[60px]" href="<?php echo get_site_url(); ?>/photo ">
        <div class="arrow ml-[179px]"><img src="<?= get_template_directory_uri() ?>/assets/arrow-white.svg" alt="arrow right"></div>
        <div class="ml-[69px]">
          See photos
        </div>
      </a>
    </div>

    <div id="pictureGrid" class="grid grid-cols-2 grid-rows-2 w-[378px] h-[638px] gap-[21.4px] mb-[48px] lg:h-[744.67px] lg:w-[530px] lg:gap-[30px] sm:w-[243px] sm:h-[341px] sm:gap-[13.75px]">
      <!-- w-[378px] h-[638px] gap-[25.7px] sm:max-w-[243px] sm:max-h-[341px] sm:gap-[13.74px] lg:max-h-[744.67px] lg:max-w-[530px] lg:gap-[30px] ls:w-6/12 ls:h-8/12 mb-[48px] sm:mb-0 -->
      <div class=" shadowHome">
        <img src="<?= get_template_directory_uri() ?>/assets/compressedPictures/womanGroupSmall.webp" alt="Photograph example of ladies sitting together on the ground laughing" class="object-cover h-full w-full ">
      </div>
      <div class=" shadowHome ">
        <img src="<?= get_template_directory_uri() ?>/assets/compressedPictures/womanWorkingSmall.webp" alt="Photograph example of a woman working" class="object-fill h-full w-full">
      </div>
      <div class=" shadowHome ">
        <img src="<?= get_template_directory_uri() ?>/assets/compressedPictures/womanSmokingSmall.webp" alt="Photograph example of a woman smoking" class="object-cover h-full w-full">
      </div>
      <div class=" shadowHome">
        <img src="<?= get_template_directory_uri() ?>/assets/compressedPictures/powerSmall.webp" alt="Phtograph example of the womensday in ruda 1976" class="object-fill h-full w-full">
      </div>
    </div>
</section>

<section id="film">
  <div class=" w-full h-[1106px] sm:h-[649px] lg:h-[1100px] flex justify-center items-center flex-col overflow-hidden ">
    <div class="w-[180%] sm:w-full">
      <img src="<?= get_template_directory_uri() ?>/assets/compressedPictures/filmCompressed.webp" alt="Big photograph of a woman sitting on stairs of a ruined building" class="object-cover w-full h-[1106px] sm:h-[649px] lg:h-[1100px] object-left-top">
    </div>
    <div id=filmTextbox class="w-[380px] h-[370px] lg:w-[673px] sm:w-[319px] lg:h-[268px] absolute mt-[580px] sm:mt-0 sm:right-0 lg:mr-[5%] md:mr-[14%] sm:mr-[8%] gap-[32px] text-off-white">
      <h2 class="font-prata text-[52px] leading-[60px]  ls:text-[60px] ls:leading-[68px] lg:text-[80px] lg:leading-[86px] mb-[26px]">Film</h2>
      <p class="poppins text-[18px] leading-[28px] sm:text-[20px] sm:leading-[28px]">Experience the magic of cinema with Kino Kozsyks. Our films take you on a journey beyond the screen, with captivating stories and stunning visuals that will leave you inspired. Don't miss out on the opportunity to immerse yourself in the world of Kino Kozsyks. </p>
      <a class="btn-white flex items-center mt-[50px]" href="<?php echo get_site_url(); ?>/film ">
        <div class="arrow ml-[170px]"><img src="<?= get_template_directory_uri() ?>/assets/arrow-black.svg" alt="arrow right"></div>
        <div class="ml-[78px] ">
          See films
        </div>
      </a>
    </div>
  </div>
</section>

<section id="event" class="px-8 bg-white-red">
  <div class=" w-full h-[1210px] sm:h-[649px] lg:h-[1100px] flex flex-col sm:flex-row items-center sm:justify-evenly gap-[48px] sm:gap-[5%]">
    <div id="eventPicture" class="">
      <img src="<?= get_template_directory_uri() ?>/assets/compressedPictures/womanWorkingBig.webp" alt="Event image of a woman working" class="object-cover shadowHome mt-[48px] w-[380px] h-[542px] lg:w-[450px] lg:h-[643.21px] sm:mt-0 sm:w-[243px] sm:h-[341px]">
    </div>
    <div id=eventTextbox class="flex flex-col justify-center w-[380px] sm:w-[319px] lg:w-[673px]">
      <h2 class="font-prata text-[52px] leading-[60px] ls:text-[60px] ls:leading-[68px] lg:text-[80px] lg:leading-[86px] mb-[26px]">Event</h2>
      <p class="poppins text-[18px] leading-[28px] sm:text-[20px] sm:leading-[28px]">Discover the latest movie screenings and events at Kino Koszyk's event page! Immerse yourself in a world of cinema and entertainment with our diverse range of films, from classics to new releases. Join us for a unique cinematic experience in the heart of the city. Book your tickets now and be a part of the excitement!</p>
      <div id="btnContainer" class="flex flex-row flex-wrap gap-[24px] mt-[50px]">
        <a class="btn-white flex items-center" href="<?php echo get_site_url(); ?>/event">
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