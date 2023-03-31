<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <!-- Load Google Fonts -->
</head>

<body id="Top" class="bg-white-red" <?php body_class("bg-pink-light text-brown"); ?>>
    <?php wp_body_open(); ?>
    <?php $menuItems = wp_get_nav_menu_items('primary-menu'); ?>


    <header class="fixed top-0 z-50 bg-white w-full flex justify-between items-center py-5 px-8">
	    <?= get_custom_logo() ?>
        <nav class="">
            <ul class="flex gap-x-7">
                <?php $currentPageId = get_queried_object_id();
                if ($menuItems) foreach ($menuItems as $item) : ?>
                    <li>
                        <a title="<?= $item->title; ?>" class="hover:duration-300 text-2xl hover:text-light-wine <?= $currentPageId == $item->object_id ? 'underline' : '' ?>" href="<?= $item->url; ?>">
                            <?= $item->title; ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </header>
<!--
    - Nav ska anemeras ut
        - in när man skrollar ner och up
-->