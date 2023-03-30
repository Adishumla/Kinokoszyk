<?php wp_footer(); ?>
<div class="h-[584px] relative">
    <a class="absolute flex justify-center items-center -top-12 left-1/2 tracking-[.3em] w-24 h-24 rounded-full text-white bg-red-800" href="#top">Top</a>
    <p class="text-white font-bold absolute top-28 left-1/4 text-3xl uppercase tracking-[.72em]">kochając nic nie tracisz.</p>
    <img  class=" h-full w-full object-cover" src="<?= get_template_directory_uri() ?>/assets/_Szczyrk2_L.jpg" alt="">
</div>
<footer class="flex flex-col bg-gray-800 text-white px-9">
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
        </a>
    </div>
</footer>

</body>

</html>