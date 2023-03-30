<?php
/**
 * Block Name: Kino Koszyk Photography
 *
 * This is the template that displays the Kino Koszyk Photography block.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'kino-koszyk-photography-' . $block['id'];

// Create class attribute allowing for custom "className" and "align" values.
$className = 'kino-koszyk-photography ' . $block['className'];

// Create attributes
$attributes = array(
	'title' => get_field('title'),
	'subtitle' => get_field('subtitle'),
	'description' => get_field('description'),
);

?>

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> w-full h-2/3 flex flex-col justify-center items-center bg-white-red poppins">

    <div class="ml-28">
		<?php if ($attributes['title']) : ?>
            <h1 class="text-3xl font-light">
				<?php echo esc_html($attributes['title']); ?> <span class="font-normal"><?php echo esc_html($attributes['subtitle']); ?></span>
            </h1>
		<?php endif; ?>

		<?php if ($attributes['description']) : ?>
            <div class="w-1/2 mt-4">
                <p class="text-xl"><?php echo esc_html($attributes['description']); ?></p>
            </div>
		<?php endif; ?>
    </div>
</section>

<?php
// Add block data
$block_data = array(
	'attributes' => $attributes,
);

// Output block data
echo '<script type="text/json" class="wp-block-data">' . json_encode($block_data) . '</script>';
?>
