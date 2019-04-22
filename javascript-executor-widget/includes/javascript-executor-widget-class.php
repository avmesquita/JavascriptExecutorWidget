<?php

	if(!defined('ABSPATH')){
		exit;
	}

	class wpb_jew_widget extends WP_Widget {

		private $data = array();
	
		function __construct() {
			
			parent::__construct(			
				'wpb_wlfc_jew_widget',  			
				__('Javascript Executor Widget', 'wpb_widget_wlfc_jew_domain'),  			
				array( 'description' => __( 'Permit run javascript code into your site.', 'wpb_widget_wlfc_jew_domain' ), ) 
			);
		}
		public function widget( $args, $instance ) 
		{				
			$title = apply_filters( 'widget_title', $instance['title'] );
	
			$code6 = apply_filters( 'wp_jew_code1', $instance['code1'] ); 
			$code2 = apply_filters( 'wp_jew_code2', $instance['code2'] ); 
			$code3 = apply_filters( 'wp_jew_code3', $instance['code3'] ); 
			$code4 = apply_filters( 'wp_jew_code4', $instance['code4'] ); 
			$code5 = apply_filters( 'wp_jew_code5', $instance['code5'] ); 
			$code6 = apply_filters( 'wp_jew_code6', $instance['code6'] ); 
			$code7 = apply_filters( 'wp_jew_code7', $instance['code7'] ); 
			$code8 = apply_filters( 'wp_jew_code8', $instance['code8'] ); 
			$code9 = apply_filters( 'wp_jew_code9', $instance['code9'] ); 
			$code10 = apply_filters( 'wp_jew_code10', $instance['code10'] ); 

			echo $args['before_widget'];
	
			if ( ! empty( $title ) )
				echo $args['before_title'] . $title . $args['after_title'];               
	
			$processed = FALSE;
			$ERROR_MESSAGE = '';
?>
	
		<div id="contentWidget">
			<?php
				$randomic = rand(1,10);
				switch ($randomic){
					case 1:
						$htmlOut = $code1;
						break;
					case 2:
						$htmlOut = $code2;					  
						break;
					case 3:
						$htmlOut = $code3;
						break;
					case 4:
						$htmlOut = $code4;
						break;
					case 5:
						$htmlOut = $code5;
						break;
					case 6:
						$htmlOut = $code6;
						break;  
					case 7:
						$htmlOut = $code7;
						break;  
					case 8:
						$htmlOut = $code8;
						break;  
					case 9:
						$htmlOut = $code9;
						break;  
					case 10:
						$htmlOut = $code10;
						break;  
					default: 
						$htmlOut = $code1;
						break;
				}
				echo base64_encode(html_entity_decode($htmlOut));
			 ?>
		</div>
		
		<?php	
		echo $args['after_widget'];
	}
			
		// Widget Backend 
		public function form( $instance ) {
			if ( isset( $instance[ 'title' ] ) ) { $title = $instance[ 'title' ]; }	else { $title = __( 'New title', 'wpb_widget_impeto_funil_domain' ); }  
			if ( isset( $instance[ 'code6' ] ) ) { $code6 = $instance[ 'code6' ]; } else { $code6 = ""; }
			if ( isset( $instance[ 'code2' ] ) ) { $code2 = $instance[ 'code2' ]; } else { $code2 = ""; }
			if ( isset( $instance[ 'code3' ] ) ) { $code3 = $instance[ 'code3' ]; } else { $code3 = ""; }
			if ( isset( $instance[ 'code4' ] ) ) { $code4 = $instance[ 'code4' ]; } else { $code4 = ""; }
			if ( isset( $instance[ 'code5' ] ) ) { $code5 = $instance[ 'code5' ]; } else { $code5 = ""; }
			if ( isset( $instance[ 'code6' ] ) ) { $code6 = $instance[ 'code6' ]; } else { $code6 = ""; }
			if ( isset( $instance[ 'code7' ] ) ) { $code7 = $instance[ 'code7' ]; } else { $code7 = ""; }
			if ( isset( $instance[ 'code8' ] ) ) { $code8 = $instance[ 'code8' ]; } else { $code8 = ""; }
			if ( isset( $instance[ 'code9' ] ) ) { $code9 = $instance[ 'code9' ]; } else { $code9 = ""; }
			if ( isset( $instance[ 'code10' ] ) ) { $code10 = $instance[ 'code10' ]; } else { $code10 = ""; }
	
	?>
	<link rel="stylesheet" href="<?php echo plugin_dir_url( __FILE__ ); ?>../css/bootstrap.min.css">
	<script src="<?php echo plugin_dir_url( __FILE__ ); ?>../js/bootstrap.min.js"></script>
	
	<div style="padding-top:5px;">
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>" style="font-weight:bold;"><?php _e( 'Title:' ); ?></label> 
			<input class="widefat" placeholder="Optional" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
	</div>
	
	<div>
		<hr>
	</div>

	<div>
	    <p>
			<h6 style="font-weight:bold;text-align:center;">
				<?php _e('CODES'); ?>
			</h6>		
		</p>
	</div>

	<div>
		<hr>
	</div>

    <!-- Code #1 -->
	<div style="outline: 1px solid lightgray;">
		<a data-toggle="collapse" href="#code1Collapse" role="button" aria-expanded="true" aria-controls="#code6Collapse">
			<p class="" style="padding-top:5px;padding-left:5px;" data-toggle="collapse">
				<label style="font-weight:bold;color:gray;">Code #1</label><br>
			</p>
		</a>
		<div style="padding:5px;" id="code1Collapse" class="collapse">
			<label style="padding-top:5px;font-weight:bold;" for="<?php echo $this->get_field_id( 'code1' ); ?>"><?php _e( 'Code:' ); ?></label> 
			<textarea class="widefat code content" style="min-height:160px;font-family:Courier New, Courier, monospace;" placeholder="JavaScript code to deploy. Optional. Take care." id="<?php echo $this->get_field_id( 'code1' ); ?>" name="<?php echo $this->get_field_name( 'code1' ); ?>" value="<?php echo esc_attr( $code1 ); ?>"><?php echo esc_attr( $code1 ); ?></textarea>
		</div>
	</div>

    <!-- Code #2 -->
	<div style="outline: 1px solid lightgray;">
		<a data-toggle="collapse" href="#code2Collapse" role="button" aria-expanded="true" aria-controls="#code2Collapse">
			<p class="" style="padding-top:5px;padding-left:5px;" data-toggle="collapse">
				<label style="font-weight:bold;color:gray;">Code #2</label><br>
			</p>
		</a>
		<div style="padding:5px;" id="code2Collapse" class="collapse">
			<label style="padding-top:5px;font-weight:bold;" for="<?php echo $this->get_field_id( 'code2' ); ?>"><?php _e( 'Code:' ); ?></label> 
			<textarea class="widefat code content" style="min-height:160px;font-family:Courier New, Courier, monospace;" placeholder="JavaScript code to deploy. Optional. Take care." id="<?php echo $this->get_field_id( 'code2' ); ?>" name="<?php echo $this->get_field_name( 'code2' ); ?>" value="<?php echo esc_attr( $code2 ); ?>"><?php echo esc_attr( $code2 ); ?></textarea>
		</div>
	</div>

    <!-- Code #3 -->
	<div style="outline: 1px solid lightgray;">
		<a data-toggle="collapse" href="#code3Collapse" role="button" aria-expanded="true" aria-controls="#code3Collapse">
			<p class="" style="padding-top:5px;padding-left:5px;" data-toggle="collapse">
				<label style="font-weight:bold;color:gray;">Code #3</label><br>
			</p>
		</a>
		<div style="padding:5px;" id="code3Collapse" class="collapse">
			<label style="padding-top:5px;font-weight:bold;" for="<?php echo $this->get_field_id( 'code3' ); ?>"><?php _e( 'Code:' ); ?></label> 
			<textarea class="widefat code content" style="min-height:160px;font-family:Courier New, Courier, monospace;" placeholder="JavaScript code to deploy. Optional. Take care." id="<?php echo $this->get_field_id( 'code3' ); ?>" name="<?php echo $this->get_field_name( 'code3' ); ?>" value="<?php echo esc_attr( $code3 ); ?>"><?php echo esc_attr( $code3 ); ?></textarea>
		</div>
	</div>

    <!-- Code #4 -->
	<div style="outline: 1px solid lightgray;">
		<a data-toggle="collapse" href="#code4Collapse" role="button" aria-expanded="true" aria-controls="#code4Collapse">
			<p class="" style="padding-top:5px;padding-left:5px;" data-toggle="collapse">
				<label style="font-weight:bold;color:gray;">Code #4</label><br>
			</p>
		</a>
		<div style="padding:5px;" id="code4Collapse" class="collapse">
			<label style="padding-top:5px;font-weight:bold;" for="<?php echo $this->get_field_id( 'code4' ); ?>"><?php _e( 'Code:' ); ?></label> 
			<textarea class="widefat code content" style="min-height:160px;font-family:Courier New, Courier, monospace;" placeholder="JavaScript code to deploy. Optional. Take care." id="<?php echo $this->get_field_id( 'code4' ); ?>" name="<?php echo $this->get_field_name( 'code4' ); ?>" value="<?php echo esc_attr( $code4 ); ?>"><?php echo esc_attr( $code4 ); ?></textarea>
		</div>
	</div>

    <!-- Code #5 -->
	<div style="outline: 1px solid lightgray;">
		<a data-toggle="collapse" href="#code5Collapse" role="button" aria-expanded="true" aria-controls="#code5Collapse">
			<p class="" style="padding-top:5px;padding-left:5px;" data-toggle="collapse">
				<label style="font-weight:bold;color:gray;">Code #5</label><br>
			</p>
		</a>
		<div style="padding:5px;" id="code5Collapse" class="collapse">
			<label style="padding-top:5px;font-weight:bold;" for="<?php echo $this->get_field_id( 'code5' ); ?>"><?php _e( 'Code:' ); ?></label> 
			<textarea class="widefat code content" style="min-height:160px;font-family:Courier New, Courier, monospace;" placeholder="JavaScript code to deploy. Optional. Take care." id="<?php echo $this->get_field_id( 'code5' ); ?>" name="<?php echo $this->get_field_name( 'code5' ); ?>" value="<?php echo esc_attr( $code5 ); ?>"><?php echo esc_attr( $code5 ); ?></textarea>
		</div>
	</div>

    <!-- Code #6 -->
	<div style="outline: 1px solid lightgray;">
		<a data-toggle="collapse" href="#code6Collapse" role="button" aria-expanded="true" aria-controls="#code6Collapse">
			<p class="" style="padding-top:5px;padding-left:5px;" data-toggle="collapse">
				<label style="font-weight:bold;color:gray;">Code #6</label><br>
			</p>
		</a>
		<div style="padding:5px;" id="code6Collapse" class="collapse">
			<label style="padding-top:5px;font-weight:bold;" for="<?php echo $this->get_field_id( 'code6' ); ?>"><?php _e( 'Code:' ); ?></label> 
			<textarea class="widefat code content" style="min-height:160px;font-family:Courier New, Courier, monospace;" placeholder="JavaScript code to deploy. Optional. Take care." id="<?php echo $this->get_field_id( 'code6' ); ?>" name="<?php echo $this->get_field_name( 'code6' ); ?>" value="<?php echo esc_attr( $code6 ); ?>"><?php echo esc_attr( $code6 ); ?></textarea>
		</div>
	</div>

    <!-- Code #7 -->
	<div style="outline: 1px solid lightgray;">
		<a data-toggle="collapse" href="#code7Collapse" role="button" aria-expanded="true" aria-controls="#code7Collapse">
			<p class="" style="padding-top:5px;padding-left:5px;" data-toggle="collapse">
				<label style="font-weight:bold;color:gray;">Code #7</label><br>
			</p>
		</a>
		<div style="padding:5px;" id="code7Collapse" class="collapse">
			<label style="padding-top:5px;font-weight:bold;" for="<?php echo $this->get_field_id( 'code7' ); ?>"><?php _e( 'Code:' ); ?></label> 
			<textarea class="widefat code content" style="min-height:160px;font-family:Courier New, Courier, monospace;" placeholder="JavaScript code to deploy. Optional. Take care." id="<?php echo $this->get_field_id( 'code7' ); ?>" name="<?php echo $this->get_field_name( 'code7' ); ?>" value="<?php echo esc_attr( $code7 ); ?>"><?php echo esc_attr( $code7 ); ?></textarea>
		</div>
	</div>

    <!-- Code #8 -->
	<div style="outline: 1px solid lightgray;">
		<a data-toggle="collapse" href="#code8Collapse" role="button" aria-expanded="true" aria-controls="#code8Collapse">
			<p class="" style="padding-top:5px;padding-left:5px;" data-toggle="collapse">
				<label style="font-weight:bold;color:gray;">Code #8</label><br>
			</p>
		</a>
		<div style="padding:5px;" id="code8Collapse" class="collapse">
			<label style="padding-top:5px;font-weight:bold;" for="<?php echo $this->get_field_id( 'code8' ); ?>"><?php _e( 'Code:' ); ?></label> 
			<textarea class="widefat code content" style="min-height:160px;font-family:Courier New, Courier, monospace;" placeholder="JavaScript code to deploy. Optional. Take care." id="<?php echo $this->get_field_id( 'code8' ); ?>" name="<?php echo $this->get_field_name( 'code8' ); ?>" value="<?php echo esc_attr( $code8 ); ?>"><?php echo esc_attr( $code8 ); ?></textarea>
		</div>
	</div>

    <!-- Code #9 -->
	<div style="outline: 1px solid lightgray;">
		<a data-toggle="collapse" href="#code9Collapse" role="button" aria-expanded="true" aria-controls="#code9Collapse">
			<p class="" style="padding-top:5px;padding-left:5px;" data-toggle="collapse">
				<label style="font-weight:bold;color:gray;">Code #9</label><br>
			</p>
		</a>
		<div style="padding:5px;" id="code9Collapse" class="collapse">
			<label style="padding-top:5px;font-weight:bold;" for="<?php echo $this->get_field_id( 'code9' ); ?>"><?php _e( 'Code:' ); ?></label> 
			<textarea class="widefat code content" style="min-height:160px;font-family:Courier New, Courier, monospace;" placeholder="JavaScript code to deploy. Optional. Take care." id="<?php echo $this->get_field_id( 'code9' ); ?>" name="<?php echo $this->get_field_name( 'code9' ); ?>" value="<?php echo esc_attr( $code9 ); ?>"><?php echo esc_attr( $code9 ); ?></textarea>
		</div>
	</div>

    <!-- Code #10 -->
	<div style="outline: 1px solid lightgray;">
		<a data-toggle="collapse" href="#code10Collapse" role="button" aria-expanded="true" aria-controls="#code10Collapse">
			<p class="" style="padding-top:5px;padding-left:5px;" data-toggle="collapse">
				<label style="font-weight:bold;color:gray;">Code #10</label><br>
			</p>
		</a>
		<div style="padding:5px;" id="code10Collapse" class="collapse">
			<label style="padding-top:5px;font-weight:bold;" for="<?php echo $this->get_field_id( 'code10' ); ?>"><?php _e( 'Code:' ); ?></label> 
			<textarea class="widefat code content" style="min-height:160px;font-family:Courier New, Courier, monospace;" placeholder="JavaScript code to deploy. Optional. Take care." id="<?php echo $this->get_field_id( 'code10' ); ?>" name="<?php echo $this->get_field_name( 'code10' ); ?>" value="<?php echo esc_attr( $code10 ); ?>"><?php echo esc_attr( $code10 ); ?></textarea>
		</div>
	</div>
	
	<?php 
		}
		// end-form
		
		public function update( $new_instance, $old_instance ) {
			$instance = array();
	
			$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
	
			$instance['code6'] = ( ! empty( $new_instance['code6'] ) ) ? htmlentities ( $new_instance['code6']) : '';
			$instance['code2'] = ( ! empty( $new_instance['code2'] ) ) ? htmlentities ( $new_instance['code2']) : '';
			$instance['code3'] = ( ! empty( $new_instance['code3'] ) ) ? htmlentities ( $new_instance['code3']) : '';
			$instance['code4'] = ( ! empty( $new_instance['code4'] ) ) ? htmlentities ( $new_instance['code4']) : '';
			$instance['code5'] = ( ! empty( $new_instance['code5'] ) ) ? htmlentities ( $new_instance['code5']) : '';
			$instance['code6'] = ( ! empty( $new_instance['code6'] ) ) ? htmlentities ( $new_instance['code6']) : '';
			$instance['code7'] = ( ! empty( $new_instance['code7'] ) ) ? htmlentities ( $new_instance['code7']) : '';
			$instance['code8'] = ( ! empty( $new_instance['code8'] ) ) ? htmlentities ( $new_instance['code8']) : '';
			$instance['code9'] = ( ! empty( $new_instance['code9'] ) ) ? htmlentities ( $new_instance['code9']) : '';
			$instance['code10'] = ( ! empty( $new_instance['code10'] ) ) ? htmlentities ( $new_instance['code10']) : '';
	
			return $instance;
		}

		public function set( $name, $value )
    	{
        	$this->data[ $name ] = $value;
    	}

    	public function get( $name )
    	{
        	if ( isset ( $this->data[ $name ] ) )
            	return $this->data[ $name ];

        	return NULL;
    	}
	}




	// END-OF-FILE: PHP OPEN TAG FOR SECURITY