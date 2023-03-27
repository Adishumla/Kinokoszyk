<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <!-- Load Google Fonts -->
</head>

<body <?php body_class("bg-pink-light text-brown"); ?>>
    <?php wp_body_open(); ?>
    <?php $menuItems = wp_get_nav_menu_items('primary-menu'); ?>

    <nav class="font-mono border-b-2 border-brown text-lg px-8">
        <div class="max-w-7xl mx-auto grid grid-cols-12">
            <div class="col-span-5 py-5 flex gap-10 items-center">
                <?php $currentPageId = get_queried_object_id();
                if ($menuItems) foreach ($menuItems as $item) : ?>
                    <a title="<?= $item->title; ?>" class="<?= $currentPageId == $item->object_id ? 'underline' : '' ?>" href="<?= $item->url; ?>">
                        <?= $item->title; ?>
                    </a>
                <?php endforeach; ?>
            </div>
            <div class="col-span-2 flex justify-center items-center py-3">
                <a href="<?= site_url(); ?>">
                    [LOGO]
                </a>
            </div>
            <div class="col-span-5 flex justify-end items-center py-5">
                <span>Get one now 👉</span>
            </div>
        </div>
    </nav>