<?php
    $menuItems = wp_get_nav_menu_items('primary-menu');
    $currentPageId = get_queried_object_id();
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="description" content="Website of Kino Koszyk, a still photography and motionpicture organizaton created by Joanna Helander and Bo Svensson.">
    <meta name="keywords" content="Home, Kino Koszyk, Kino, Koszyk, Uncategorized, Helander, Joanna, Joanna Helander, Kino, Kino Koszyk, Koszyk, kinokoszyk,documentaries,dokumentärer,film,bio,cinema,photography">
    <meta name="author" content="Kino Koszyk">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://http://www.kinokoszyk.com/">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <!-- Load Google Fonts -->
</head>

<body id="Top" class="bg-white-red" <?php body_class("bg-pink-light text-brown"); ?>>
    <?php wp_body_open(); ?>

    <?php  ?>


    <header class="fixed flex flex-col justify-center items-center top-0 z-40 bg-off-white w-full lg:flex-row lg:justify-between lg:pr-8">
        <div class="flex justify-between w-full px-6 pt-12 pb-4 z-50 lg:w-auto lg:pt-0 lg:pb-0">
            <div class="w-16">
                <?= get_custom_logo() ?>
            </div>
            <button class="uppercase text-2xl lg:hidden">Menu</button>
        </div>
        <nav class="fixed top-0 left-full w-full vh-hero bg-white-red duration-500 lg:left-0 lg:mt-0 lg:min-h-0 lg:w-auto lg:static lg:bg-transparent">
            <ul class="flex flex-col items-center gap-y-10 px-0 list-none lg:gap-x-7 lg:flex-row">
                <?php
                if ($menuItems) foreach ($menuItems as $item) : ?>
                    <li>
                        <a class="header-link text-2xl link text-off-black <?= $currentPageId == $item->object_id ? 'after:absolute text-light-wine' : '' ?>" href="<?= $item->url; ?>">
                            <?= $item->title; ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </header>