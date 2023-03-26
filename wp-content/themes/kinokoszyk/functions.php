<?php
# Load Tailwind from CDN
# https://tailwindcss.com/docs/installation/play-cdn
function load_tailwind()
{
  # wp_enqueue_script('tailwind', 'https://cdn.tailwindcss.com', array(), null, false);
  wp_enqueue_style("tailwind", get_template_directory_uri() . '/css/output.css', array(), true);
  # Load tailwind.config.js after tailwind has been loaded
  wp_enqueue_script('tailwind-config', get_template_directory_uri() . '/tailwind.config.js', array('tailwind'), null, false);
}
add_action('wp_enqueue_scripts', 'load_tailwind');

# Register theme support
add_action('after_setup_theme', function () {
  add_theme_support('title-tag');
  add_theme_support('menus');
});

# Register theme menu(s)
# https://developer.wordpress.org/themes/functionality/navigation-menus/
function register_theme_menus()
{
  register_nav_menus(array(
    'primary-menu' => __('Primary Menu'),
    'footer-menu' => __('Footer Menu'),
  ));
}
add_action('init', 'register_theme_menus');

# Print array or object in a pre tag
function print_a($data)
{
?>
  <pre class="block p-6 m-6 border border-brown rounded-xl text-xs overflow-hidden"><code><?php print_r($data); ?></code></pre>
<?php
}
