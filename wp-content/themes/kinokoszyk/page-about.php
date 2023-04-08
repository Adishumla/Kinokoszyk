<head>
	<?php get_header(); ?>
</head>

<body>
<section class="w-full h-2/3 flex flex-row justify-center items-center bg-white-red poppins text-off-black mt-[72px]">
   <div class="ml-28">
       <h1 class="text-3xl font-light text-wine">Kino Koszyk photography</h1>
       <h2 class="text-[148px] font-prata p-0 leading-[148px]">About us</h2>
       <div class="w-3/6 min-w-[800px] mt-4">
           <p class="text-xl font-poppins">Kino Koszyk HB is an independent production company founded in 1987 by Joanna Helander and Bo Persson. Based in Gothenburg, Sweden, they create captivating documentaries for cinema and TV, as well as visually stunning exhibitions and books. Their creative approach to storytelling pushes the boundaries of traditional media, producing thought-provoking content that inspires audiences.</p>
       </div>
   </div>
   <img class="h-full pr-4 object-fill justify-self-end" src="<?php echo get_template_directory_uri(); ?>/assets/photo-roll.svg" alt="">
</section>

<section class="flex flex-col-reverse px-6 pb-10 pt-16 bg-off-white lg:grid lg:grid-cols-2 lg:gap-x-44 lg:px-28 ">
    <div class="flex flex-col gap-4 lg:text-xl font-poppins">
        <p>
            Several of Kino Koszyk’s films have had theatrical releases in Sweden and other countries. These include the three creative documentaries “Eighth Day Theatre”, ”Returning” and “The Twins from Cracow”.They have been screened in theatres and at festivals in a number of countries. “Eighth Day Theatre” and “Returning” were shown on the German television channel ARD, ARTE in France & Germany, Czech Television, Polish Television, and more.Most film projects of Kino Koszyk have been co-financed by The Swedish Film Institute, Swedish Television, ARTE, Film i Väst, and others.
        </p>

        <p>
            In countries with censorship like Belarus, several of KIno Koszyk´s films have been widely circulated as “video samizdat”.
        </p>

        <p>
            Other shorter films and audiovisual projects by Kino Koszyk that have had commercial releases in Sweden and other countries include “Gerard K – Letters from Poland”, “Long Live Poland”, ”If She from Poland Was Here” about Nobel Prize winner Wislawa Szymborska and “Ladies Looking”
        </p>

        <p>
            The film “Waltz with Milosz” was inspired by our friendship with Czeslaw Milosz.
        </p>

        <p>
            “Watching the Moon at Night” premiered at the Swedish Film institute in 2016. It was screened as well in the European Parliament and the Swedish Parliament and in more than 15 different countries in theatres and festivals.
        </p>
    </div>

    <div class="">
        <div class=" w-fit h-fit">
            <img class="shadow-2xl shadow-off-black/.8 w-44 lg:w-64" src="<?= get_template_directory_uri() ?>/assets/Bo Persson.png" alt="">
        </div>
        <div class=" w-fit h-fit">
            <img class="translate-x-3/4 -translate-y-1/3 shadow-xl w-44 lg:w-64" src="<?= get_template_directory_uri() ?>/assets/Joanna Helander.png" alt="">
        </div>
    </div>

</section>

<section class="flex flex-col items-center px-6 py-20">
    <h2 class="font-prata text-5xl text-off-black mb-3">Want to know more?</h2>
    <h2 class="font-prata text-7xl text-wine mb-11 lg:mb-7">Get in touch</h2>

    <form class="flex flex-col gap-6 w-full text-off-black lg:w-1/3">
        <div class="flex flex-col gap-2">
            <label for="mail">E-mail:</label>
            <input class="placeholder-footer p-4 ring ring-1 ring-black" type="email" id="mail" required placeholder="example@mail.com">
        </div>
        <div class="flex flex-col gap-2">
            <label for="name">Name:</label>
            <input class="placeholder-footer p-4 ring ring-1 ring-black" type="text" id="name" required placeholder="Jane Doe">
        </div>
        <div class="flex flex-col gap-2">
            <label for="message">Message:</label>
            <textarea class="placeholder-footer p-4 h-48 ring ring-1 ring-black resize-none" required id="message" placeholder="Type your message here."></textarea>
        </div>

        <button class="btn-wine self-center text-center" type="submit">Send message</button>
    </form>
</section>
<section id="partners">
    <?php get_template_part( 'content', 'partners')?>
</section>

</body>
<footer>
	<?php get_footer(); ?>
</footer>
