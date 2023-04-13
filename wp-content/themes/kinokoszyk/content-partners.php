<?php

/*
Template Name: partners
*/

$partners = get_fields(975); //975 = Partners Page ID
$size = "full";

?>
<div class="bg-off-white pb-24">

    <h2 class="pt-[60px] font-poppins text-[38px] leading-[40px] font-bold mb-[36px] text-center">Our partners</h2>
    <div class="box-border ml-[10%] mr-[10%] flex-wrap flex justify-center gap-x-[4vw] gap-y-[3vw]">


        <?php
        foreach ($partners as $partner) {
            if (empty($partner)) continue;
        ?>
            <div class=" w-[14vw] h-[10vw] sm:w-[14vw] sm:h-[6vw] lg:w-[11vw] lg:h-[3vw] flex object-contain ">

                <img class="object-contain w-full" src=<?= $partner["url"] ?> alt="<?= $partner["alt"] ?>" srcset="<?= wp_get_attachment_image_srcset($partner["id"]) ?>" sizes="15vw">
            </div>






        <?php } ?>
    </div>
</div>