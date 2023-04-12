<?php
 
// Register Reservation_Widget
add_action( 'widgets_init', 'register_reservation_widget' );
     
function register_reservation_widget() { 
    register_widget( 'Reservation_Widget' ); 
}

/**
 * Adds Reservation_Widget widget.
 */
class Reservation_Widget extends WP_Widget {

    /**
     * Register widget with WordPress.
     */
    public function __construct() {
        parent::__construct(
            'reservation_widget', // Base ID
            'Reservation Widget', // Name
            array( 'description' => __( 'Add this widget to allow user quick date reservation.', 'text_domain' ), ) // Args
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
    public function widget( $args, $instance ) {
        extract( $args );

        echo '<h4>Reservation widget</h4>';
    }

    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param array $instance Previously saved values from database.
     */
    public function form( $instance ) {
        ?>

        <p>reservation plugin, backend side</p>

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

        return $instance;
    }
} // class Reservation_Widget

?>