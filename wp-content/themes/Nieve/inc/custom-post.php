<?php
function nieve_post(){
    register_post_type('service',
            array(
                'labels'=> array(
                'name'=>'Service',
                'menu_name'=>'Service Menu',
                'all_items'=>'All Servives',
                'add_new_item'=>'Add New Service Item',
                'edit_item'=>'Edit Service Item'
            ),
            'public'=> true,
            'supports' => array('title','page-attributes')
        ));
        register_post_type('testimonial',
            array(
                'labels'=> array(
                'name'=>'Testimonial',
                'menu_name'=>'Testimonial Menu',
                'all_items'=>'All Testimonial',
                'add_new_item'=>'Add New Testimonial Item',
                'edit_item'=>'Edit Testimonial Item'
            ),
            'public'=> true,
            'supports' => array('title','page-attributes','thumbnail')
        ));
        register_post_type('team',
            array(
                'labels'=> array(
                'name'=>'Team',
                'menu_name'=>'Team Menu',
                'all_items'=>'All Team',
                'add_new_item'=>'Add New Team Item',
                'edit_item'=>'Edit Team Item'
            ),
            'public'=> true,
            'supports' => array('title','page-attributes','thumbnail')
        ));

        register_taxonomy( 'team_category','team',array(
            'labels'=> array(
                'name'=>'Team Category',
                'all_items'=>'All Team Category',
                'add_new_item'=>'Add New Team Category',
                'edit_item'=>'Edit Team Category'
            ),
            'hierarchical'=>true,
            'show_admin_column'=>true
        ));

        register_taxonomy( 'team_tag','team',array(
            'labels'=> array(
                'name'=>'Team Tag',
                'all_items'=>'All Team Tag',
                'add_new_item'=>'Add New Team Tag',
                'edit_item'=>'Edit Team Tag'
            ),
            'show_admin_column'=>true
        ));

        register_post_type('portfolio',
            array(
                'labels'=> array(
                'name'=>'Portfolio',
                'menu_name'=>'Portfolio Menu',
                'all_items'=>'All Portfolio',
                'add_new_item'=>'Add New Portfolio Item',
                'edit_item'=>'Edit Portfolio Item'
            ),
            'public'=> true,
            'supports' => array('title','page-attributes','thumbnail')
        ));

        register_taxonomy( 'portfolio_category','portfolio',array(
            'labels'=> array(
                'name'=>'Portfolio Category',
                'all_items'=>'All Portfolio Category',
                'add_new_item'=>'Add New Portfolio Category',
                'edit_item'=>'Edit Portfolio Category'
            ),
            'hierarchical'=>true,
            'show_admin_column'=>true
        ));
}
add_action( 'init','nieve_post');
?>