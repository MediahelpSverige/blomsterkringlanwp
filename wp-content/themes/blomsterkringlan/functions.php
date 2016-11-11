<?php	if ( !function_exists('media_handle_upload') ) {
		require_once(ABSPATH . "wp-admin" . '/includes/image.php');
		require_once(ABSPATH . "wp-admin" . '/includes/file.php');
		require_once(ABSPATH . "wp-admin" . '/includes/media.php');
	}


	//Add Featured Image Support
add_theme_support('post-thumbnails');
add_theme_support( 'custom-logo' );


function register_menus() {
	register_nav_menus(
		array(
			'main-nav' => 'Main Navigation',
			'secondary-nav' => 'Secondary Navigation',
			'sidebar-menu' => 'Sidebar Menu',
			'left-menu' => 'Left menu',
			'right-menu' => 'Right menu'
		)
	);
}
add_action( 'init', 'register_menus' );


function prefix_register_name() {

	$labels = array(
		'name'                => __( 'Nyheter', 'text-domain' ),
		'singular_name'       => __( 'Nyhet', 'text-domain' ),
		'add_new'             => _x( 'Lägg till en ny nyhet', 'text-domain', 'text-domain' ),
		'add_new_item'        => __( 'Add New Singular Name', 'text-domain' ),
		'edit_item'           => __( 'Edit Singular Name', 'text-domain' ),
		'new_item'            => __( 'New Singular Name', 'text-domain' ),
		'view_item'           => __( 'View Singular Name', 'text-domain' ),
		'search_items'        => __( 'Search Plural Name', 'text-domain' ),
		'not_found'           => __( 'No Plural Name found', 'text-domain' ),
		'not_found_in_trash'  => __( 'No Plural Name found in Trash', 'text-domain' ),
		'parent_item_colon'   => __( 'Parent Singular Name:', 'text-domain' ),
		'menu_name'           => __( 'Nyheter', 'text-domain' ),
	);

	$args = array(
		'labels'                   => $labels,
		'hierarchical'        => false,
		'description'         => 'description',
		'taxonomies'          => array('category'),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => null,
		'menu_icon'           => null,
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => array('slug' => 'nyhet'),
		'capability_type'     => 'post',
		'supports'            => array(
			'title', 'editor', 'author', 'thumbnail',
			'excerpt','custom-fields', 'trackbacks', 'comments',
			'revisions', 'page-attributes', 'post-formats',
			)
	);

	register_post_type( 'nyhet', $args );
}

add_action( 'init', 'prefix_register_name' );

function bildspel_register_name() {

	$labels = array(
		'name'                => __( 'Bildspel', 'text-domain' ),
		'singular_name'       => __( 'Bildspel', 'text-domain' ),
		'add_new'             => _x( 'Lägg till en ny nyhet', 'text-domain', 'text-domain' ),
		'add_new_item'        => __( 'Add New Singular Name', 'text-domain' ),
		'edit_item'           => __( 'Edit Singular Name', 'text-domain' ),
		'new_item'            => __( 'New Singular Name', 'text-domain' ),
		'view_item'           => __( 'View Singular Name', 'text-domain' ),
		'search_items'        => __( 'Search Plural Name', 'text-domain' ),
		'not_found'           => __( 'No Plural Name found', 'text-domain' ),
		'not_found_in_trash'  => __( 'No Plural Name found in Trash', 'text-domain' ),
		'parent_item_colon'   => __( 'Parent Singular Name:', 'text-domain' ),
		'menu_name'           => __( 'Bildspel', 'text-domain' ),
	);

	$args = array(
		'labels'                   => $labels,
		'hierarchical'        => false,
		'description'         => 'description',
		'taxonomies'          => array('category'),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => null,
		'menu_icon'           => null,
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => array('slug' => 'bildspel'),
		'capability_type'     => 'post',
		'supports'            => array(
			'title', 'editor', 'author', 'thumbnail',
			'excerpt','custom-fields', 'trackbacks', 'comments',
			'revisions', 'page-attributes', 'post-formats',
			)
	);

	register_post_type( 'bildspel', $args );
}

add_action( 'init', 'bildspel_register_name' );




// Add the Meta Box
function add_custom_meta_box() {
    add_meta_box(
        'custom_meta_box', // $id
        'Custom Meta Box', // $title 
        'show_custom_meta_box', // $callback
        'post', // $page
        'normal', // $context
        'high'); // $priority
}
add_action('add_meta_boxes', 'add_custom_meta_box');

// Field Array
$prefix = 'custom_';
$custom_meta_fields = array(
    array(
        'label'=> 'Text Input',
        'desc'  => 'A description for the field.',
        'id'    => $prefix.'text',
        'type'  => 'text'
    ),
    array(
        'label'=> 'Textarea',
        'desc'  => 'A description for the field.',
        'id'    => $prefix.'textarea',
        'type'  => 'textarea'
    ),
    array(
        'label'=> 'Checkbox Input',
        'desc'  => 'A description for the field.',
        'id'    => $prefix.'checkbox',
        'type'  => 'checkbox'
    ),
    array(
        'label'=> 'Select Box',
        'desc'  => 'A description for the field.',
        'id'    => $prefix.'select',
        'type'  => 'select',
        'options' => array (
            'one' => array (
                'label' => 'Option One',
                'value' => 'one'
            ),
            'two' => array (
                'label' => 'Option Two',
                'value' => 'two'
            ),
            'three' => array (
                'label' => 'Option Three',
                'value' => 'three'
            )
        )
    )
);



// The Callback
function show_custom_meta_box() {
global $custom_meta_fields, $post;
// Use nonce for verification
echo '<input type="hidden" name="custom_meta_box_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';
     
    // Begin the field table and loop
    echo '<table class="form-table">';
    foreach ($custom_meta_fields as $field) {
        // get value of this field if it exists for this post
        $meta = get_post_meta($post->ID, $field['id'], true);
        // begin a table row with
        echo '<tr>
                <th><label for="'.$field['id'].'">'.$field['label'].'</label></th>
                <td>';
                switch($field['type']) {
                    // case items will go here
                    // text
				case 'text':
				    echo '<input type="text" name="'.$field['id'].'" id="'.$field['id'].'" value="'.$meta.'" size="30" />
				        <br /><span class="description">'.$field['desc'].'</span>';
				break;
				// textarea
				case 'textarea':
				    echo '<textarea name="'.$field['id'].'" id="'.$field['id'].'" cols="60" rows="4">'.$meta.'</textarea>
				        <br /><span class="description">'.$field['desc'].'</span>';
				break;


                } //end switch
        echo '</td></tr>';
    } // end foreach
    echo '</table>'; // end table
}


/**
 * Filter the "read more" excerpt string link to the post.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function wpdocs_excerpt_more( $more ) {
    return sprintf( '<a class="read-more" href="%1$s">%2$s</a>',
        get_permalink( get_the_ID() ),
        __( 'Läs mer', 'textdomain' )
    );
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );


?>