<?php wp_footer(); ?>
<div class="FooterPhotoWrapper">
    <a href="#top">Top</a>
    <p>kochając nic nie tracisz.</p>
    <img class=" h-full w-full object-cover" src="<?= get_template_directory_uri() ?>/assets/compressedPictures/womanGroupBig.webp" alt="">
</div>
<footer>
    <h2>KINO KOSZYK</h2>

    <div class="wrapper">

        <p class="">Thanks for stopping by and indulging in our visual shenanigans! We hope our photography and film content gave you a good dose of inspiration and amusement. Stay curious and keep exploring the world through the lens. Catch you on the flip side!</p>

        <div class="flex flex-col gap-4">
            <p class="text-2xl">Contact</p>
            <ul class="flex flex-col gap-2 text-xl">
                <li class="link w-fit">Tel: <a href="tel:+46 31-25 95 78">+46 31-25 95 78</a></li>
                <li class="link w-fit">Mail: <a href="mailto:kino.koszyk@gmail.com">kino.koszyk@gmail.com</a></li>
            </ul>
        </div>

        <hr class="bg-white col-span-full mt-3">

        <p class="text-[#858585]">© <?= date('Y') ?> Kino Koszyk. All rights reserved.</p>
        <a class="social" href="https://www.facebook.com/joanna.helander.169" target="_blank">
            <img src="<?= get_template_directory_uri() ?>/assets/Icon facebook.svg" alt="Facebook icon">
        </a>
    </div>
</footer>

</body>

</html>