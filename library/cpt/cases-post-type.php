<?php
/* Bones Custom Post Type Example
This page walks you through creating
a custom post type and taxonomies. You
can edit this one or copy the following code
to create another one.

I put this in a separate file so as to
keep it organized. I find it easier to edit
and change things if they are concentrated
in their own file.

Developed by: Eddie Machado
URL: http://themble.com/bones/
*/

// Flush rewrite rules for custom post types
add_action( 'after_switch_theme', 'cases_flush_rewrite_rules' );

// Flush your rewrite rules
function cases_flush_rewrite_rules() {
  flush_rewrite_rules();
}

// let's create the function for the custom type
function case_post_type() {
  // creating (registering) the custom type
  register_post_type( 'case_type', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
    // let's now add all the options for this post type
    array( 'labels' => array(
      'name' => __( 'Cases', 'bestcasestheme' ), /* This is the Title of the Group */
      'singular_name' => __( 'Case', 'bestcasestheme' ), /* This is the individual type */
      'all_items' => __( 'All Cases', 'bestcasestheme' ), /* the all items menu item */
      'add_new' => __( 'Add New', 'bestcasestheme' ), /* The add new menu item */
      'add_new_item' => __( 'Add New Case', 'bestcasestheme' ), /* Add New Display Title */
      'edit' => __( 'Edit', 'bestcasestheme' ), /* Edit Dialog */
      'edit_item' => __( 'Edit Cases', 'bestcasestheme' ), /* Edit Display Title */
      'new_item' => __( 'New Case', 'bestcasestheme' ), /* New Display Title */
      'view_item' => __( 'View Case', 'bestcasestheme' ), /* View Display Title */
      'search_items' => __( 'Search Case', 'bestcasestheme' ), /* Search Case Title */
      'not_found' =>  __( 'Nothing found in the Database.', 'bestcasestheme' ), /* This displays if there are no entries yet */
      'not_found_in_trash' => __( 'Nothing found in Trash', 'bestcasestheme' ), /* This displays if there is nothing in the trash */
      'parent_item_colon' => ''
      ), /* end of arrays */
      'description' => __( 'This is the example custom case', 'bestcasestheme' ), /* Custom Type Description */
      'public' => true,
      'publicly_queryable' => true,
      'exclude_from_search' => false,
      'show_ui' => true,
      'query_var' => true,
      'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */
      'menu_icon' => get_stylesheet_directory_uri() . '/library/images/custom-post-icon.png', /* the icon for the custom post type menu */
      'rewrite' => array( 'slug' => 'case', 'with_front' => false ), /* you can specify its url slug */
      'has_archive' => 'case_type', /* you can rename the slug here */
      'capability_type' => 'post',
      'hierarchical' => true,
      /* the next one is important, it tells what's enabled in the post editor */
      'supports' => array(
        'title',
        //'editor',
        //'author',
        'thumbnail',
        //'excerpt',
        //'trackbacks',
        //'custom-fields',
        //'comments',
        //'revisions',
        //'sticky',
        'page-attributes',
        )
    ) /* end of options */
  ); /* end of register post type */

  /* this adds your post categories to your custom post type */
  //register_taxonomy_for_object_type( 'industries', 'case_type' );
  /* this adds your post tags to your custom post type */
  // register_taxonomy_for_object_type( 'post_tag', 'case_type' );

}

  // adding the function to the Wordpress init
  add_action( 'init', 'case_post_type');

  /*
  for more information on taxonomies, go here:
  http://codex.wordpress.org/Function_Reference/register_taxonomy
  // */

  // // now let's add Industries (these act like categories)
  // register_taxonomy( 'industries',
  //   array('case_type'), /* if you change the name of register_post_type( 'case_type', then you have to change this */
  //   array('hierarchical' => true,     /* if this is true, it acts like categories */
  //     'labels' => array(
  //       'name' => __( 'Industries', 'bestcasestheme' ), /* name of the custom taxonomy */
  //       'singular_name' => __( 'Industry', 'bestcasestheme' ), /* single taxonomy name */
  //       'search_items' =>  __( 'Search Industries', 'bestcasestheme' ), /* search title for taxomony */
  //       'all_items' => __( 'All Industries', 'bestcasestheme' ), /* all title for taxonomies */
  //       'parent_item' => __( 'Parent Industry', 'bestcasestheme' ), /* parent title for taxonomy */
  //       'parent_item_colon' => __( 'Parent Industry:', 'bestcasestheme' ), /* parent taxonomy title */
  //       'edit_item' => __( 'Edit Industry', 'bestcasestheme' ), /* edit custom taxonomy title */
  //       'update_item' => __( 'Update Industry', 'bestcasestheme' ), /* update title for taxonomy */
  //       'add_new_item' => __( 'Add New Industry', 'bestcasestheme' ), /* add new title for taxonomy */
  //       'new_item_name' => __( 'New Industry Name', 'bestcasestheme' ) /* name title for taxonomy */
  //     ),
  //     'show_admin_column' => true,
  //     'show_ui' => true,
  //     'query_var' => true,
  //     'rewrite' => array( 'slug' => 'industry' ),
  //   )
  // );


  /*
    looking for custom meta boxes?
    check out this fantastic tool:
    https://github.com/WebDevStudios/CMB2/wiki/Basic-Usage
  */
  add_action( 'cmb2_admin_init', 'cases_metaboxes' );
  /**
   * Define the metabox and field configurations.
   */
  function cases_metaboxes() {

      // Start with an underscore to hide fields from custom fields list
      $prefix = 'cpt_case_';

      /**
       * Initiate the metabox
       */
      $cmb = new_cmb2_box( array(
          'id'            => 'cases_feature_cmb',
          'title'         => __( 'Feature case', 'bestcasestheme'),
          'object_types'  => array( 'case_type','fallstudien_type' ), // Post type
          'context'       => 'normal',
          'priority'      => 'high',
          'show_names'    => true, // Show field names on the left
          // 'cmb_styles' => false, // false to disable the CMB stylesheet
          // 'closed'     => true, // Keep the metabox closed by default
      ) );
        $cmb->add_field( array(
            'name' => 'Feature Cases',
            //'desc' => 'field description (optional)',
            'id'   => $prefix . 'feature',
            'type' => 'checkbox',
        ) );
        $cmb->add_field( array(
            'name' => 'Home Page Description',
            //'desc' => 'field description (optional)',
            //'default' => 'standard value (optional)',
            'id' => $prefix . 'feature_description',
            'type' => 'textarea_small'
        ) );
        $cmb->add_field( array(
            'name'    => 'Feature Image',
            'desc'    => 'Upload Image 350px by 220px, no round borders, no shadow (JPG)',
            'id'      => $prefix . 'feature_image',
            'type'    => 'file',
            // Optional:
            'options' => array(
                'url' => true, // Hide the text input for the url
            ),
            'text'    => array(
                'add_upload_file_text' => 'Add Image' // Change upload button text. Default: "Add or Upload File"
            ),
        ) );
      $cmb1 = new_cmb2_box( array(
          'id'            => 'cases_grid_cmb',
          'title'         => __( 'Grid Options', 'bestcasestheme' ),
          'object_types'  => array( 'case_type','trend_type','fallstudien_type'), // Post type
          'context'       => 'normal',
          'priority'      => 'high',
          'show_names'    => true, // Show field names on the left
          // 'cmb_styles' => false, // false to disable the CMB stylesheet
          // 'closed'     => true, // Keep the metabox closed by default
      ) );
        $cmb1->add_field( array(
            'name'       => __( 'Company', 'bestcasestheme' ),
            // 'desc'       => __( 'Name of the Company', 'bestcasestheme' ),
            'id'         => $prefix . 'company',
            'type'       => 'text',
            // 'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
            // 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
            // 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
            // 'on_front'        => false, // Optionally designate a field to wp-admin only
            // 'repeatable'      => true,
        ) );
        $cmb1->add_field( array(
            'name'       => __( 'Link (http://)', 'bestcasestheme' ),
            // 'desc'       => __( 'Name of the Company', 'bestcasestheme' ),
            'id'         => $prefix . 'link',
            'type'       => 'text',
            // 'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
            // 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
            // 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
            // 'on_front'        => false, // Optionally designate a field to wp-admin only
            // 'repeatable'      => true,
        ) );
        $cmb1->add_field( array(
            'name' => __( 'Year', 'bestcasestheme' ),
            'id' =>  $prefix . 'year',
            'type' => 'text_date',
            'date_format' => 'M, Y',
        ) );
        $cmb1->add_field( array(
            'name'    => 'App Icon',
            'desc'    => 'Upload App Icon 180px by 180px (PNG with transparent background)',
            'id'      => $prefix . 'app_icon_image',
            'type'    => 'file',
            // Optional:
            'options' => array(
                'url' => true, // Hide the text input for the url
            ),
            'text'    => array(
                'add_upload_file_text' => 'Add Image' // Change upload button text. Default: "Add or Upload File"
            ),
        ) );

        $cmb1->add_field( array(
            'name'    => 'Background Tile',
            'desc'    => 'Upload BG Image 380px by 675px, no round borders, no shadow (JPG)',
            'id'      => $prefix . 'bg_title_image',
            'type'    => 'file',
            // Optional:
            'options' => array(
                'url' => true, // Hide the text input for the url
            ),
            'text'    => array(
                'add_upload_file_text' => 'Add Image' // Change upload button text. Default: "Add or Upload File"
            ),
        ) );
        $cmb1->add_field( array(
            'name'    => 'Color Picker',
            'id'      => $prefix . 'colorpicker',
            'type'    => 'colorpicker',
            'default' => '#f23113',
        ) );

      $cmb2 = new_cmb2_box( array(
          'id'            => 'cases_content_cmb',
          'title'         => __( 'Content Options', 'bestcasestheme' ),
          'object_types'  => array( 'case_type','fallstudien_type'), // Post type
          'context'       => 'normal',
          'priority'      => 'high',
          'show_names'    => true, // Show field names on the left
          // 'cmb_styles' => false, // false to disable the CMB stylesheet
          // 'closed'     => true, // Keep the metabox closed by default
      ) );
        $cmb2->add_field( array(
            'name'    => 'Case Content',
            'desc'    => 'field description (optional)',
            'id'      => $prefix . 'case_content',
            'show_names'    => false,
            'type'    => 'wysiwyg',
            'options' => array(),
        ) );
        $cmb2->add_field( array(
          'name'    => 'PDF',
          'desc'    => 'PDF File (No bigger than 5 MB)',
          'id'      => $prefix . 'pdf_file',
          'type'    => 'file',
          // Optional:
          'options' => array(
              'url' => false, // Hide the text input for the url
          ),
          'text'    => array(
              'add_upload_file_text' => 'Add PDF Case' // Change upload button text. Default: "Add or Upload File"
          ),
      ) );

    }

?>
