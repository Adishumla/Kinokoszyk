<?php
# Load Tailwind from CDN
# https://tailwindcss.com/docs/installation/play-cdn
function load_tailwind() {
	wp_enqueue_style( 'tailwind', get_template_directory_uri() . '/css/output.css', array(), '1.0' );
}
add_action( 'wp_enqueue_scripts', 'load_tailwind' );
add_action( 'enqueue_block_editor_assets', 'load_tailwind' );



# Register custom post types
function kinokoszyk_custom_post_types() {
	register_post_type('film', array(
			'labels'      => array(
				'name'          => __('Films', 'textdomain'),
				'singular_name' => __('Film', 'textdomain'),
			),
				'public'      => true,
				'has_archive' => true,
        
        
		)
	);
  register_post_type('book', array(
    'labels'      => array(
      'name'          => __('Books', 'textdomain'),
      'singular_name' => __('Book', 'textdomain'),
    ),
      'public'      => true,
      'has_archive' => true,
      
      
  )
  );
  register_post_type('event', array(
      'labels'      => array(
      'name'          => __('Events', 'textdomain'),
      'singular_name' => __('Event', 'textdomain'),
    ),
      'public'      => true,
      'has_archive' => true,
      
      
  )
  );
}
add_action('init', 'kinokoszyk_custom_post_types');



# Register theme support
add_action('after_setup_theme', function () {
  add_theme_support('title-tag');
  add_theme_support('menus');
  add_theme_support('custom-logo');
});

add_action('init', function () {
    register_block_type(__DIR__ . "/blocks/Contact");
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

# register template parts
function register_template_parts()
{
  get_template_part('about-template.php');
  get_template_part('photos.php');
}

# Print array or object in a pre tag
function print_a($data)
{
?>
  <pre class="block p-6 m-6 border border-brown rounded-xl text-xs overflow-hidden"><code><?php print_r($data); ?></code></pre>
<?php
}

function getCurrentHeader(string $title): bool
{
    $header = strtolower($title);
    $URI = $_SERVER["REQUEST_URI"];
    
    $slug = strtolower(basename($URI));
    $slug = implode(" ", explode("-", $slug)); # Remove "-" if exist from slug

    # Fixes URI home or index so that it becomes home instead of "/" 
    if ($URI == "/") {
        $slug = "home";
    }

    # Remove "s" on the end of header
    if (strpos($header, "s", -1)) {
        $header = substr_replace($header, "", -1);
    }

    # Remove "s" on the end of slug
    if (strpos($slug, "s", -1)) {
        $slug = substr_replace($slug, "", -1);
    }

    return $slug == $header;
}

# Add custom block category
add_action('init', 'my_enqueue_block_assets');

function my_enqueue_block_assets() {
	$js_dir = get_theme_file_uri() . '/js';

	# If in plugin, use this instead:
	# $css_dir = plugin_dir_url(__FILE__) . 'css';
	# $js_dir = plugin_dir_url(__FILE__) . 'js';

	wp_enqueue_script('Header', $js_dir . "/header.js", [], false, true);
}

function remove_content_filter() {
	remove_filter('the_content', 'wpautop');
}
add_action('init', 'remove_content_filter');

# this makes it so that the archive pages can use pagination (without this, pagination will not work)
function custom_archive_query( $query ) {
	if ( $query->is_archive() && $query->is_main_query() ) {
		$query->set( 'posts_per_page', 12);
	}
}
add_action( 'pre_get_posts', 'custom_archive_query' );
