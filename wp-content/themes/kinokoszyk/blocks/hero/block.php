<div class="w-full h-screen grid grid-cols-12 grid-rows-1 bg-blue">
    <div class="col-start-1 col-span-full row-start-1 row-span-1 aspect-square relative">
        <canvas class="mx-auto absolute object-contain max-w-[100vh] max-h-[100vh] md:max-w-[90vw] md:max-w-[90vw] lg:max-w-[70vw] lg:max-h-[70vw] h-full w-full inset-0" data-spline="https://prod.spline.design/Zfbr8lgrjsq57VFo/scene.splinecode"></canvas>
    </div>
    <div class="flex items-center lg:items-end p-4 lg:p-20 col-start-1 col-span-6 row-start-1 row-span-1 pointer-events-none">
        <h1 class="font-oi text-4xl lg:text-7xl mb-20 relative z-10 drop-shadow-[0_35px_35px_rgba(0,0,0,0.25)]">
            <?= the_field('title') ?>
        </h1>
    </div>
</div>