<?php 
/*hide admin bar*/ 
show_admin_bar(false);

// Styles & Scripts linking
function university_files()
  {
    
    wp_enqueue_style('university_main_styles', get_stylesheet_uri(), NULL, microtime());
    wp_enqueue_script('main-university-js', get_theme_file_uri('js/scripts.min.js'), NULL, microtime(), true);
    wp_enqueue_script('highlight-js', '//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js');
    wp_enqueue_style('highlight-css', '//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/default.min.css');

  }
add_action('wp_enqueue_scripts', 'university_files');


//Support Features 
	function blog_features()
	{

//Menu      
		register_nav_menus(array(
			'headerMenuLocation' => __('Header Menu Location'),
		  'footerMenuLocation' => __('Footer Menu Location'),
	));

//Title tab
		add_theme_support('title-tag');

// Add Featured image support
add_theme_support('post-thumbnails');
add_image_size('blog-thumbnail', 730, 294, array('center', 'center')); 


		
	}

	add_action('after_setup_theme', 'blog_features'); 



// Customize excerpt 
function new_wp_trim_excerpt($text) {
  $raw_excerpt = $text;
  if ( '' == $text ) {
    $text = get_the_content('');
    $text = strip_shortcodes( $text );
    $text = apply_filters('the_content', $text);
    $text = str_replace(']]>', ']]>', $text);
    $text = strip_tags($text, '');
    $excerpt_length = apply_filters('excerpt_length', 60);
    $excerpt_more = apply_filters('excerpt_more', ' &raquo; &raquo; &raquo; &raquo;');
    $words = preg_split('/(<a.*?a>)|\n|\r|\t|\s/', $text, $excerpt_length + 1, PREG_SPLIT_NO_EMPTY|PREG_SPLIT_DELIM_CAPTURE );
    if ( count($words) > $excerpt_length ) {
      array_pop($words);
      $text = implode(' ', $words);
      $text = $text . $excerpt_more;
      } 
    else {
      $text = implode(' ', $words);
      }
    }
  return apply_filters('new_wp_trim_excerpt', $text, $raw_excerpt);
  }
remove_filter('get_the_excerpt', 'wp_trim_excerpt');
add_filter('get_the_excerpt', 'new_wp_trim_excerpt');




 ?>
