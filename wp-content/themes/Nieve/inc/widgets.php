<?php
function nieve_sidebar(){
    register_sidebar(array(
        'name'=>'Nieve Sidebar',
        'id'=>'nieve_sidebar'
    ));
    register_widget('Service');
}

add_action( 'widgets_init','nieve_sidebar');


class Service extends WP_Widget{
    public function __construct() {
        $des=array(
            'description'=>'This is service list widget'
        );
        parent::__construct( 'service_widget', 'Nieve Service List', $des );
    }
    public function widget($args,$value){
        $post_query=null;
        $post_query=new WP_Query(array(
           'post_type'=>'service',
           'posts_per_page'=>-1
        ));

        if($post_query->have_posts()){
            echo '<li class="widget">';
            echo '<h2 class="widgettitle">Service List</h2>';
            echo '<ul class="service-w">';
            while($post_query->have_posts()){
                $post_query->the_post();
                echo '<li><a href="#">'.get_the_title().'</a></li>';
            }
            echo '</ul>';
            echo '</li>';
        }
        wp_reset_postdata();
    }
}
?>