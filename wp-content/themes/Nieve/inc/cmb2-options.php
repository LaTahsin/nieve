<?php
add_action( 'cmb2_admin_init', 'cmb2_sample_metaboxes' );
/**
 * Define the metabox and field configurations.
 */
function cmb2_sample_metaboxes() {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_nieve_';

	/**
	 * Initiate the metabox
	 */
	$cmb = new_cmb2_box( array(
		'id'            => 'service_metabox',
		'title'         => __( 'Test Metabox', 'cmb2' ),
		'object_types'  => array( 'service', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // Keep the metabox closed by default
	) );

	// Regular text field
	$cmb->add_field( array(
		'name'       => __( 'Service Icon', 'cmb2' ),
		'desc'       => __( 'Themify Icon class', 'cmb2' ),
		'id'         => $prefix . 'service-icon',
		'type'       => 'text'
    ) );
    
    $cmb->add_field( array(
		'name'       => __( 'Service Description', 'cmb2' ),
		'desc'       => __( 'Write Service Description', 'cmb2' ),
		'id'         => $prefix . 'service-text',
		'type'       => 'textarea_small'
	) );


	$cmb = new_cmb2_box( array(
		'id'            => 'testimonial_metabox',
		'title'         => __( 'Test Metabox', 'cmb2' ),
		'object_types'  => array( 'testimonial', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // Keep the metabox closed by default
	) );

	$cmb->add_field( array(
		'name'       => __( 'Testimonial Description', 'cmb2' ),
		'desc'       => __( 'Write Testimonial Description', 'cmb2' ),
		'id'         => $prefix . 'testimonial-text',
		'type'       => 'textarea_small'
	) );

	
	$cmb = new_cmb2_box( array(
		'id'            => 'team_metabox',
		'title'         => __( 'Test Metabox', 'cmb2' ),
		'object_types'  => array( 'team', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // Keep the metabox closed by default
	) );

	$cmb->add_field( array(
		'name'       => __( 'Designation', 'cmb2' ),
		'desc'       => __( 'Write Member\'s Designation' , 'cmb2' ),
		'id'         => $prefix . 'team-desig',
		'type'       => 'text'
	) );

	$cmb->add_field( array(
		'name'       => __( 'Facebook ID', 'cmb2' ),
		'desc'       => __( 'Write URL of Facebook id' , 'cmb2' ),
		'id'         => $prefix . 'team-fb',
		'type'       => 'text'
	) );

	$cmb->add_field( array(
		'name'       => __( 'Twitter ID', 'cmb2' ),
		'desc'       => __( 'Write URL of Twitter id' , 'cmb2' ),
		'id'         => $prefix . 'team-tw',
		'type'       => 'text'
	) );

	$cmb->add_field( array(
		'name'       => __( 'Google Plus ID', 'cmb2' ),
		'desc'       => __( 'Write URL of Google plus id' , 'cmb2' ),
		'id'         => $prefix . 'team-go',
		'type'       => 'text'
	) );

	$cmb->add_field( array(
		'name'       => __( 'LinkedIn ID', 'cmb2' ),
		'desc'       => __( 'Write URL of LinkedIn id' , 'cmb2' ),
		'id'         => $prefix . 'team-ln',
		'type'       => 'text'
	) );



	// Add other metaboxes as needed

}
?>