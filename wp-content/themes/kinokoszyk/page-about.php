<head>
    <?php get_header(); ?>
</head>

<body>
<section class="mt-24">
    <div class="grid grid-cols-3 gap-y-2 gap-x-4 py-6 pl-6 overflow-x-hidden sm:gap-x-14 md:pl-20 lg:gap-y-0 lg:pl-44 lg:pt-28 lg:pb-20">
        <h1 class="col-span-2 col-start-1 text-2xl font-light text-wine lg:text-3xl">Kino Kosyk historys</h1>
        <h2 class="col-span-2 col-start-1 text-5xl mb-4 font-prata p-0 sm:text-6xl lg:text-[148px]  lg:leading-[148px]">About us</h2>
        <img class="row-start-2 justify-self-end h-28 sm:h-60 sm:row-start-1 col-start-3 row-span-3 object-fill" src="<?= get_template_directory_uri(); ?>/assets/about.png" alt="">
        <p class="col-span-3 col-start-1 text-lg font-poppins sm:col-span-2 sm:text-xl">Kino Koszyk HB is an independent production company founded in 1987 by Joanna Helander and Bo Persson. Based in Gothenburg, Sweden, they create captivating documentaries for cinema and TV, as well as visually stunning exhibitions and books. Their creative approach to storytelling pushes the boundaries of traditional media, producing thought-provoking content that inspires audiences.</p>
    </div>
</section>

    <section class="grid grid-cols-1 gap-y-6 bg-off-white px-6 pt-16 pb-6 md:gap-y-12 md:px-20 md:py-12 xl:px-48 xl:py-36 lg:grid-cols-2">

        <!-- Image on Bo Persson and Joanna Helander -->
        <img class="max-w-sm -m-7 justify-self-center 2xl:max-w-none lg:col-start-2 lg:justify-self-end" src="<?= get_template_directory_uri() ?>/assets/about profile.png" alt="">

        <!-- Text content -->
        <div class="flex flex-col gap-4 lg:text-xl font-poppins lg:row-start-1">
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
        <?php get_template_part('content', 'partners') ?>
    </section>

</body>
<footer>
    <?php get_footer(); ?>
</footer>