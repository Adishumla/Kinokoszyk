<?php wp_footer(); ?>
<?=  get_template_directory_uri(); ?>
<footer class="flex flex-col bg-gray-800 text-white px-9">
    <img src="" alt="">
    <h2 class=" text-8xl" >KINO KOSZYK</h2>
    <div class="grid grid-cols-2 justify-between gap-x-48 gap-y-12 items-center mt-16 mb-28 mx-auto w-11/12">

        <p class="max-w-prose">Thanks for stopping by and indulging in our visual shenanigans! We hope our photography and film content gave you a good dose of inspiration and amusement. Stay curious and keep exploring the world through the lens. Catch you on the flip side!</p>

        <div class="flex flex-col gap-4">
            <p class="text-2xl">Contact</p>
            <ul class="flex flex-col gap-2 text-xl">
                <li>Tel <a href="tel:+123-456 78 90">123-456 78 90</a></li>
                <li>Mail <a href="mailto:ex@mail.com">ex@mail.com</a></li>
            </ul>
        </div>

        <hr class="bg-white col-span-full mb-3">

        <p class="text-gray-400">© 2023 Kino Koszyk. All rights reserved.</p>
        <a href="http://facebook.se" target="_blank">
            <img src="<?= get_template_directory_uri() ?>/assets/Icon facebook.svg">
<!--            <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">-->
<!--                <path d="M56.7 0H3.3C2.42479 0 1.58542 0.347678 0.966548 0.966548C0.347678 1.58542 0 2.42479 0 3.3V56.7C0 57.5752 0.347678 58.4146 0.966548 59.0335C1.58542 59.6523 2.42479 60 3.3 60H32.04V36.75H24.24V27.75H32.04V21C31.8784 19.4153 32.0655 17.8144 32.5881 16.3096C33.1108 14.8048 33.9563 13.4326 35.0654 12.2892C36.1745 11.1458 37.5203 10.2589 39.0085 9.69071C40.4966 9.12251 42.0911 8.88675 43.68 9C46.015 8.98563 48.3488 9.10583 50.67 9.36V17.46H45.9C42.12 17.46 41.4 19.26 41.4 21.87V27.66H50.4L49.23 36.66H41.4V60H56.7C57.1334 60 57.5625 59.9146 57.9629 59.7488C58.3632 59.583 58.727 59.3399 59.0335 59.0335C59.3399 58.727 59.583 58.3632 59.7488 57.9629C59.9146 57.5625 60 57.1334 60 56.7V3.3C60 2.86664 59.9146 2.43752 59.7488 2.03714C59.583 1.63677 59.3399 1.27298 59.0335 0.966548C58.727 0.660115 58.3632 0.417038 57.9629 0.251198C57.5625 0.0853573 57.1334 0 56.7 0Z" fill="#FAFAFA"/>-->
<!--            </svg>-->
        </a>
    </div>
</footer>

</body>

</html>