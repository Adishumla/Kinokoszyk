<?php

/*
Template Name: partners
*/

$partners = get_fields(975); //975 = Partners Page ID
$size = "full";

?>
<div class="bg-off-white pb-24">

    <h2 class="pt-[60px] font-prata text-[38px] leading-[40px] mb-[26px] text-center">Our Partners</h2>
    <div class="box-border ml-[5%] mr-[5%] flex flex-wrap flex-none justify-center gap-x-[3vw] gap-y-[3vw]"> 
 
        
        <?
    
    foreach($partners as $partner)
    {
        if(empty($partner)) continue; 
        ?>
        <div class="w-1/6 h-auto" >
            
            <img src=<?=$partner["url"]?> alt="<?=$partner["alt"]?>" class="max-h-[10vw]" srcset="<?= wp_get_attachment_image_srcset($partner["id"])?>" sizes="15vw">
        </div>
            
      
         



    <?php } ?>
    </div>
</div>

