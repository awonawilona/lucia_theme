<?php 

add_action( 'cmb2_admin_init', 'cmb2_sample_metaboxes' );
/**
 * Define the metabox and field configurations.
 */
function cmb2_sample_metaboxes() {

  // Start with an underscore to hide fields from custom fields list
  $prefix = 'home_';

  // Initiate the metabox
  
  $front_page_ID = get_option('page_on_front');

  $cmb = new_cmb2_box( array(
    'id'            => $prefix.'scout',
    'title'         => __( 'Modules: Scout', 'cmb2' ),
    'object_types'  => array( 'page', ), // Post type
    'show_on'       => array( 'id' => array( $front_page_ID, ) ),
    'context'       => 'normal',
    'priority'      => 'high',
    'show_names'    => true, // Show field names on the left
    // 'cmb_styles' => false, // false to disable the CMB stylesheet
    'closed'     => true, // Keep the metabox closed by default
  ) );

  $cmb->add_field( array(
    'name'    => 'Quote Autor',
    // 'desc'    => 'field description (optional)',
    // 'default' => 'standard value (optional)',
    'id'      => $prefix.'quote_autor_scout',
    'type'    => 'text',
  ) );

  $cmb->add_field( array(
    'name'    => 'Quote Text',
    // 'desc'    => 'field description (optional)',
    // 'default' => 'standard value (optional)',
    'id'      => $prefix.'quote_text_scout',
    'type'    => 'textarea_small'
  ) );

  $cmb->add_field( array(
    'name'    => 'Text',
    // 'desc'    => 'field description (optional)',
    // 'default' => 'standard value (optional)',
    'id'      => $prefix.'text_scout',
    'type'    => 'textarea'
  ) );
  
  $cmb->add_field( array(
    'name'    => 'Link Text',
    // 'desc'    => 'field description (optional)',
    // 'default' => 'standard value (optional)',
    'id'      => $prefix.'link_text_scout',
    'type'    => 'text'
  ) );
  
  $cmb->add_field( array(
    'name'    => __( 'Link ', 'cmb2' ),
    // 'desc'    => 'field description (optional)',
    'default' => 'http://',
    'id'      => $prefix.'link_url_scout',
    'type' => 'text_url',
    // 'protocols' => array( 'http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet' ), // Array of allowed protocols
  ) );



  $cmb2 = new_cmb2_box( array(
    'id'            => $prefix.'agent',
    'title'         => __( 'Modules: Agent', 'cmb2' ),
    'object_types'  => array( 'page', ), // Post type
    'show_on'       => array( 'id' => array( $front_page_ID, ) ),
    'context'       => 'normal',
    'priority'      => 'high',
    'show_names'    => true, // Show field names on the left
    // 'cmb_styles' => false, // false to disable the CMB stylesheet
    'closed'     => true, // Keep the metabox closed by default
  ) );

  $cmb2->add_field( array(
    'name'    => 'Quote Autor',
    // 'desc'    => 'field description (optional)',
    // 'default' => 'standard value (optional)',
    'id'      => $prefix.'quote_autor_agent',
    'type'    => 'text',
  ) );

  $cmb2->add_field( array(
    'name'    => 'Quote Text',
    // 'desc'    => 'field description (optional)',
    // 'default' => 'standard value (optional)',
    'id'      => $prefix.'quote_text_agent',
    'type'    => 'textarea_small'
  ) );

  $cmb2->add_field( array(
    'name'    => 'Text',
    // 'desc'    => 'field description (optional)',
    // 'default' => 'standard value (optional)',
    'id'      => $prefix.'text_agent',
    'type'    => 'textarea'
  ) );
  
  $cmb2->add_field( array(
    'name'    => 'Link Text',
    // 'desc'    => 'field description (optional)',
    // 'default' => 'standard value (optional)',
    'id'      => $prefix.'link_text_agent',
    'type'    => 'text'
  ) );
  
  $cmb2->add_field( array(
    'name'    => __( 'Link ', 'cmb2' ),
    // 'desc'    => 'field description (optional)',
    'default' => 'http://',
    'id'      => $prefix.'link_url_agent',
    'type' => 'text_url',
    // 'protocols' => array( 'http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet' ), // Array of allowed protocols
  ) );



  $cmb3 = new_cmb2_box( array(
    'id'            => $prefix.'enabler',
    'title'         => __( 'Modules: Enabler', 'cmb2' ),
    'object_types'  => array( 'page', ), // Post type
    'show_on'       => array( 'id' => array( $front_page_ID, ) ),
    'context'       => 'normal',
    'priority'      => 'high',
    'show_names'    => true, // Show field names on the left
    // 'cmb_styles' => false, // false to disable the CMB stylesheet
    'closed'     => true, // Keep the metabox closed by default
  ) );

  $cmb3->add_field( array(
    'name'    => 'Quote Autor',
    // 'desc'    => 'field description (optional)',
    // 'default' => 'standard value (optional)',
    'id'      => $prefix.'quote_autor_enabler',
    'type'    => 'text',
  ) );

  $cmb3->add_field( array(
    'name'    => 'Quote Text',
    // 'desc'    => 'field description (optional)',
    // 'default' => 'standard value (optional)',
    'id'      => $prefix.'quote_text_enabler',
    'type'    => 'textarea_small'
  ) );

  $cmb3->add_field( array(
    'name'    => 'Text',
    // 'desc'    => 'field description (optional)',
    // 'default' => 'standard value (optional)',
    'id'      => $prefix.'text_enabler',
    'type'    => 'textarea'
  ) );
  
  $cmb3->add_field( array(
    'name'    => 'Link Text',
    // 'desc'    => 'field description (optional)',
    // 'default' => 'standard value (optional)',
    'id'      => $prefix.'link_text_enabler',
    'type'    => 'text'
  ) );
  
  $cmb3->add_field( array(
    'name'    => __( 'Link ', 'cmb2' ),
    // 'desc'    => 'field description (optional)',
    'default' => 'http://',
    'id'      => $prefix.'link_url_enabler',
    'type' => 'text_url',
    // 'protocols' => array( 'http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet' ), // Array of allowed protocols
  ) );



  // Add other metaboxes as needed

}
?>