<?php
$menuItems = wp_get_nav_menu_items('primary-menu');
$custom_logo_id = get_theme_mod( 'custom_logo' );
$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Website of Kino Koszyk, a still photography and motionpicture organizaton created by Joanna Helander and Bo Svensson.">
    <meta name="author" content="Kino Koszyk">
    <meta name="robots" content="index, follow">

    <!-- To check meta tag use this website -->
    <!-- https://socialsharepreview.com/ -->

    <!-- Facebook -->
    <!-- https://ogp.me/#types -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php bloginfo('url'); ?>">
    <meta property="og:title" content="Kino Koszyk">
    <meta property="og:locale" content="<?php language_attributes(); ?>">
    <meta property="og:description" content="Website of Kino Koszyk, a still photography and motionpicture organizaton created by Joanna Helander and Bo Svensson.">
    <meta property="og:image" content="<?= $image[0] ?>">
    
    <!-- Twitter cards -->
    <meta property="twitter:site" content="<?php bloginfo('url'); ?>">
    <meta property="twitter:title" content="Kino Koszyk">
    <meta property="twitter:description" content="Website of Kino Koszyk, a still photography and motionpicture organizaton created by Joanna Helander and Bo Svensson.">
    <meta property="twitter:image" content="<?= $image[0] ?>">
    
    <!-- <meta name="keywords" content="Home, Kino Koszyk, Kino, Koszyk, Uncategorized, Helander, Joanna, Joanna Helander, Kino, Kino Koszyk, Koszyk, kinokoszyk,documentaries,dokumentärer,film,bio,cinema,photography"> -->
    
    <link rel="canonical" href="https://http://www.kinokoszyk.com/">
    <?php wp_head(); ?>
    <!-- Load Google Fonts -->
</head>

<body id="Top" class="bg-white-red" <?php body_class("bg-pink-light text-brown"); ?>>
    <?php wp_body_open(); ?>

    <?php  ?>


    <header class="sticky flex flex-col justify-center items-center top-0 z-40 bg-off-white w-full lg:flex-row lg:justify-between lg:pr-8 h-[100px] lg:h-[89px]">
        <div class="flex justify-between lg:justify-center lg:flex-col w-full px-6 pt-[31px] pb-[37px] z-50 lg:w-auto lg:pl-8 md:pt-[52px] md:pb-[16px] lg:pt-0 lg:pb-0">
            <div class="w-[61px] lg:w-[95px] my-auto">
                <?= get_custom_logo() ?>
            </div>
            <button class="uppercase text-2xl lg:hidden">Menu</button>
        </div>
        <nav class="fixed top-0 left-full w-full vh-hero bg-white-red duration-500 mt-22 lg:left-0 lg:mt-0 lg:min-h-0 lg:w-auto lg:static lg:bg-transparent">
            <ul class="flex pt-20 lg:pt-0 flex-col items-center gap-y-10 px-0 list-none lg:gap-x-7 lg:flex-row">
                <?php if ($menuItems) foreach ($menuItems as $item) : ?>
                    <li>
                        <a class="header-link text-2xl link text-off-black <?= getCurrentHeader($item->title) ? 'after:absolute text-light-wine' : '' ?>" href="<?= $item->url; ?>">
                            <?= $item->title; ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </header>

    <?php
        
    ?>