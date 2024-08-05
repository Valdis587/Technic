<?php
/**
 * Technic functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Technic
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
}

class vakansii_Widget extends WP_Widget {

    /**
     * Register widget with WordPress.
     */

    function __construct() {
        parent::__construct(
            'vakansii_widget', // Base ID
            esc_html__( 'Вакансии', '' ), // Name
            array( 'description' => '' ) // Args
        );
    }


    public function widget( $args, $instance )
    {        echo $args['before_widget'];
        if ( ! empty( $instance['title'] ) ) {
            echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
        } ?>
          <div class="sidebar__widget-wrapper">
            <div class="swiper sidebar__widget-vakan">
                <div class="swiper-wrapper sidebar__widget-vakan-wrapp">
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args2 = array(
            'order' 	 => 'DESC',
            'post_type' 	 => 'vakansii',
            'paged'	         => $paged
        );

        $MY_QUERY = new WP_Query( $args2 );
        if ( $MY_QUERY->have_posts() ) :
            while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post(); 
            get_template_part( 'template-parts/content', 'vakansii' );
             endwhile;
        endif;
        wp_reset_postdata();
        ?>
      </div>
            </div>
            <div class="sidebar__button-wrapp">
            <a class="button-blue sidebar__button-vakan" href="<?php echo home_url(); ?>/vakansii">Все Вакансии</a>
        </div>
        </div>
        <?php
        echo $args['after_widget'];
    }

    public function form( $instance ) {
        $title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'Вакансии', 'smarkets' );
        ?>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Вакансии', 'smarkets' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>
        <?php
    }


    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';

        return $instance;


    }

} // class Foo_Widget

// register Foo_Widget widget
function register_vakansii_widget() {
    register_widget( 'vakansii_Widget' );
}
add_action( 'widgets_init', 'register_vakansii_widget' );