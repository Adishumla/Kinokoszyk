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

  <section id="hero ">
    <!-- nu är heron 100vh men den ska vara 100vh minus headern höjd -->
    <div class=" w-full h-screen bg-pink-200">
      <!-- ska vara en bild i denna div -->
	    <?php if( get_field('home_hero') ): ?>
            <img src="<?php the_field('home_hero'); ?>" />
	    <?php endif; ?>
      <div id="heroTitle" class=" bottom-0 absolute">
        <h1>KINO KOSZYK</h1>
      </div>
    </div>

  </section>

  <section id="joanna">
    <div class=" w-full h-screen bg-neutral-100 flex flex-row justify-center items-center">
      <div id=joannaTextbox class="h-2/5 w-2/5 bg-yellow-50 ml-40">
        <h3>Photographer</h3>
        <h2>Joanna Helander</h2>
        <p>Discover the beauty captured through the lens of our talented artist Joanna. Explore her stunning photography and allow yourself to be transported to new worlds of wonder and awe.</p>
        <button class="btn-blue bottom-0">Button</button>
      </div>

      <div id="pictureGrid" class="  m-auto grid grid-cols-2 grid-rows-2 h-5/6 w-2/6 bg-purple-300 gap-[30px]">
        <div class="h-auto w-auto drop-shadow-lg bg-gray-50 ">
          <p>1</p>
        </div>
        <div class="h-auto w-auto drop-shadow-lg bg-gray-50">
          <p>2</p>
        </div>
        <div class="h-auto w-auto drop-shadow-lg bg-gray-50">
          <p>3</p>
        </div>
        <div class="h-auto w-auto drop-shadow-lg bg-gray-50">
          <p>4</p>
        </div>
      </div>
  </section>

  <section id="film">
    <div class=" w-full h-screen bg-pink-300 flex flex-row justify-center items-center ">
      <div id=filmTextbox class="h-2/5 w-3/6 bg-yellow-50 absolute right-0 mr-40">
        <h2>Film</h2>
        <p>Discover the beauty captured through the lens of our talented artist Joanna. Explore her stunning photography and allow yourself to be transported to new worlds of wonder and awe.</p>
        <button class="btn-blue absolute bottom-0">Button</button>
      </div>
    </div>
  </section>

  <section id="event">
    <div class=" w-full h-screen bg-blue-200 flex flex-row justify-center items-center">
      <div id="eventPicture" class="h-4/6 w-1/4 bg-purple-300 absolute left-0 ml-40">
        <p>1</p>
      </div>
      <div id=eventTextbox class="h-2/5 w-3/6 bg-yellow-50 absolute right-0 mr-40">
        <h2>Event</h2>
        <p>A text to raise the curiosity of visitors to look at Kino Kosyzk's previous events. Also a short text to inform visitors to look at Kino's Facebook page for more information about "smaller events".</p>
        <button class="btn-blue absolute bottom-0">Button</button>
        <button class="btn-blue absolute bottom-0 right-0">Button</button>
      </div>
    </div>
  </section>

  <section id="partners">

  </section>


  <?php get_footer(); ?>
</body>

</html>