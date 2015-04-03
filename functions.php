<?php 

include 'autocracy/autocracy.php';

add_theme_support('post-thumbnails');
add_theme_support( 'woocommerce' );

	//Custom Post Types
function inspyre_create_post_type() {
	register_post_type('services', array(
		'labels' => array(
			'name' => __('Services'),
			'singular_name' => __('service')
			),
		'public' => true,
		'has_archive' => true,
		'rewrite' => array('slug' => 'services'),
		'supports' => array('title','editor','thumbnail'),
		'taxonomies' => array('category'), 
		)
	);
  register_post_type('careers', array(
    'labels' => array(
      'name' => __('Careers'),
      'singular_name' => __('Career')
      ),
    'public' => true,
    'has_archive' => true,
    'rewrite' => array('slug' => 'careers'),
    'supports' => array('title','thumbnail'),
    )
  );
  register_post_type('videos', array(
    'labels' => array(
      'name' => __('Videos'),
      'singular_name' => __('Video')
      ),
    'public' => true,
    'has_archive' => true,
    'rewrite' => array('slug' => 'videos'),
    'supports' => array('title', 'editor')
    )
  );
}
add_action('init', 'inspyre_create_post_type');

function remove_img_attr ($html) {
  return preg_replace('/(width|height)="\d+"\s/', "", $html);
}

add_filter( 'post_thumbnail_html', 'remove_img_attr' );

remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

function my_theme_wrapper_start() {
  echo '<div class="column half justify">';
}

function my_theme_wrapper_end() {
  echo '</div>';
}

function instaGramFeed($userID, $accessToken){
  $url = "https://api.instagram.com/v1/users/".$userID."/media/recent/?access_token=".$accessToken;
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_TIMEOUT, 20);
  $result = curl_exec($ch);
  curl_close($ch); 
  $result = json_decode($result);
  foreach ($result->data as $post) {
    echo '<img src="'.$post->images->thumbnail->url.'">';
  } 
}

?>