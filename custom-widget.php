<?php
/* 
Plugin Name: Casino Widget
Version: 1.0
Author: Papatzelos Thanasis

*/

/*register + creating custom widget */

function register_custom_widget() {

	register_widget( 'custom_widget' );
	
	}
	
	add_action( 'widgets_init', 'register_custom_widget' );
	
	class custom_widget extends WP_Widget {
	
	function __construct() {
	
	parent::__construct(
	
	// widget ID
	
	'custom_widget',
	
	// widget name
	
	__('Casino Sample Widget', ' custom_widget_domain'),
	
	// widget description
	
	array( 'description' => __( 'Casino Widget', 'custom_widget_domain' ), )
	
	);
	
	}
	
	public function widget( $args, $instance ) {
	
	$title = apply_filters( 'widget_title', $instance['title'] );
	$description = apply_filters( 'widget_title', $instance['description'] );
	
	echo $args['before_widget'];
	
	//if title is present
	
	if ( ! empty( $title ) )
	
	echo $args['before_title'] . $title . $args['after_title'];
	
	//output
	
	//echo __( 'It works!', 'custom_widget_domain' );


	//if description is present
	
	if ( ! empty( $description ) )
	
	echo "<p>".$args['after_title']. $description ."</p>";
        

    
   

?>
	<div class='widget-class'>
    
	<?php while ( have_posts() ) : the_post();  ?>
	<div class="casino-carousel">


            
            <div class="casino-sub1-carousel">
                <?php the_title(); ?>
            </div>
            <div class="casino-sub2-carousel">100% up to
                <div class="casino-sub3-carousel">500€</div>
            </div>
            
            
                <?php the_content();?>  
            <button class="button">Activate Bonuses!</button>
            
    </div>
    
    

	<?php endwhile;//resetting the page loop?> 
    
    </div>
<?php
	echo $args['after_widget'];

	}
	
	public function form( $instance ) {
	
	if ( isset( $instance[ 'title' ] ) )
	
	$title = $instance[ 'title' ];
	
	else
	
	$title = __( 'Default Title', 'custom_widget_domain' );



	if ( isset( $instance[ 'description' ] ) )
	
	$description = $instance[ 'description' ];
	
	else
	
	$description = __( 'Default Description', 'custom_widget_domain' );
	
	?>
	
	<p>
	
	<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
	
	<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
	
	</p>

	<!--description back end -->
	<p>
	<label for="<?php echo $this->get_field_id( 'description' ); ?>"><?php _e( 'Description:' ); ?></label>
	<textarea cols="50" rows="5" class="widefat" id="<?php echo $this->get_field_id( 'description' ); ?>" name="<?php echo $this->get_field_name( 'description' ); ?>" type="text"  ><?php echo esc_attr( $description ); ?></textarea>
	</p>
	
	<?php
	
	}
	
	public function update( $new_instance, $old_instance ) {
	
	$instance = array();
	
	$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
	$instance['description'] = ( ! empty( $new_instance['description'] ) ) ? strip_tags( $new_instance['description'] ) : '';
	
	return $instance;
	
	}
	
	}
    ?>