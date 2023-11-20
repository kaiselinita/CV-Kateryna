<?php

function true_enqueue_styles() {
    wp_enqueue_style('child-style', get_stylesheet_directory_uri(). '/style.css', array() );
}
add_action( 'wp_enqueue_script', 'true_enqueue_styles', 25 );


add_action( 'init', function() {

    register_post_type(
        'CV',
        array(
            'public' => true,
           'show_ui' => true,
           'show_in_menu' => true,
           'show_in_admin_bar' => true,
        )
        );
} );


add_action( 'add_meta_boxes', 'wp_kama_add_meta_boxes_action', 10, 2 );

/**
 * Function for `add_meta_boxes` action-hook.
 * 
 * @param string  $post_type Post type.
 * @param WP_Post $post      Post object.
 *
 * @return void
 */
function wp_kama_add_meta_boxes_action( $post_type, $post ){

	// action...
}

get_posts(
    $args = array(
        'post_type' => 'Personal informationn', 
        'posts_per_page' => 6
    );
    $query = new WP_Query($args);
);

<?php echo get_field('services'); ?>
<?php
  $services = new WP_Query([ 
    'post_type' => 'services',
    'post_status' => 'publish',
    'limit' => 3, 
    'orderby' => 'date',
    'date' => true 
  ]);

  if ($services->have_posts()): 
?>
  <div class="row">
    <?php 
      while ($services->have_posts()): 
      $services->the_post(); 
    ?>
      <div class="col-sm">
        <div class="card">
          <img 
            src="<?php the_post_thumbnail_url(); ?>" 
            class="card-img-top"
            alt="<?php the_title() ?> | service | <?php echo bloginfo('name'); ?>" 
          >
          <div class="card-body">
            <h3 class="card-title h5"><?php the_title(); ?></h3> 
            <p class="card-text"><?php the_content(); ?></p> 

            <span class="prix"><?php echo get_field('prix'); ?></span>
            
          </div>
        </div>
      </div>
    <?php endwhile; ?>
  </div>
<?php else: ?>
  <h5>On a pas encore de services a vous proposer mais ça arrive !</h5>
<?php endif; ?>
<?php

function create_posttypes() {
    register_post_type('Personal_information', [
        'labels' => [
            'name' => __( 'Personal_information' ),
            'singular_name' => __( 'Personal_information' )
        ],
        'public' => true,
        'has_archive' => true,
        'rewrite' => ['slug' => 'Personal_information'],
        'show_in_rest' => true,
    ]);
}
add_action('init', 'create_posttypes');

<?рhp

function create_posttypes() {
    register_post_type('Education', [
        'labels' => [
            'name' => __( 'Education' ),
            'singular_name' => __( 'Education' )
        ],
        'public' => true,
        'has_archive' => true,
        'rewrite' => ['slug' => 'Education'],
        'show_in_rest' => true,
    ]);
}
add_action('init', 'create_posttypes');

<?php

function create_posttypes() {
    register_post_type('Professional_experience', [
        'labels' => [
            'name' => __( 'Professional_experience' ),
            'singular_name' => __( 'Professional_experience' )
        ],
        'public' => true,
        'has_archive' => true,
        'rewrite' => ['slug' => 'Professional_experience'],
        'show_in_rest' => true,
    ]);
}
add_action('init', 'create_posttypes');

<?php

function create_posttypes() {
    register_post_type('Skills', [
        'labels' => [
            'name' => __( 'Skills' ),
            'singular_name' => __( 'Skills' )
        ],
        'public' => true,
        'has_archive' => true,
        'rewrite' => ['slug' => 'Skills'],
        'show_in_rest' => true,
    ]);
}
add_action('init', 'create_posttypes');

<?php

function create_posttypes() {
    register_post_type('Languages', [
        'labels' => [
            'name' => __( 'Languages' ),
            'singular_name' => __( 'Languages' )
        ],
        'public' => true,
        'has_archive' => true,
        'rewrite' => ['slug' => 'Languages'],
        'show_in_rest' => true,
    ]);
}
add_action('init', 'create_posttypes');

<?php

function create_posttypes() {
    register_post_type('Interests', [
        'labels' => [
            'name' => __( 'Interests' ),
            'singular_name' => __( 'Interests' )
        ],
        'public' => true,
        'has_archive' => true,
        'rewrite' => ['slug' => 'Interests'],
        'show_in_rest' => true,
    ]);
}
add_action('init', 'create_posttypes');

