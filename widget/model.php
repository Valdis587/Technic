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
	define( '_S_VERSION', '1.0.0' );
}


class Model_Widget extends WP_Widget {

    /**
     * Register widget with WordPress.
     */

    function __construct() {
        parent::__construct(
            'model_widget', // Base ID
            esc_html__( 'Модель', 'smarkets' ), // Name
            array( 'description' => 'A Views Widget' ) // Args
        );
    }

    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget( $args, $instance )
    {
        echo $args['before_widget'];
        if ( ! empty( $instance['title'] ) ) {
            echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
        } ?>
       <div class="sidebar__widget-wrapper">
            <ul class="sidebar__category-list">
                    <?php
                    $terms = get_terms( array(
                        'taxonomy' => 'model',
                        'hide_empty' => true,
                        'pad_counts'=> true,
                        'orderby' => 'name',
                        'parent' => 0
                    ) );
                   
                    $item=0;
                    if($terms) {
                        foreach($terms as $term) {                        
                                $term_id = $term->term_id;
                                // получим ID картинки из метаполя термина
                                $image_id = get_term_meta( $term_id, '_thumbnail_id', 1 );                             
                                // ссылка на полный размер картинки по ID вложения
                                $image_url = wp_get_attachment_image_url( $image_id, 'full' ); 
                                ?>
                        <li class="sidebar__category-item">
                        <?php if($image_url) { ?>
                        <a href="<?php echo get_category_link($term->term_id);?>"><img src="<?php echo $image_url; ?>" alt="<?php echo $term->name;?>"></a>
                        <?php } ?>
                            <a href="<?php echo get_category_link($term->term_id);?>"><?php echo $term->name;?></a>
                        </li>
                            <?php } } ?>
                </ul>
                            </div>

        <?php    echo $args['after_widget'];

    }

    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param array $instance Previously saved values from database.
     */
    public function form( $instance ) {
        $title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'Модель ', 'smarkets' );
        ?>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Модель', 'smarkets' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>
        <?php
    }

    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $old_instance Previously saved values from database.
     *
     * @return array Updated safe values to be saved.
     */
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';

        return $instance;


    }

} // class Foo_Widget

// register Foo_Widget widget
function register_model_widget() {
    register_widget( 'Model_Widget' );
}
add_action( 'widgets_init', 'register_model_widget' );