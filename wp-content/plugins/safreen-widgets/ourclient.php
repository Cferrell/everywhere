<?php

/**************************/
/******Our Client widget */
/************************/



class safreen_ourclient extends WP_Widget {
	
	public function __construct() {
		parent::__construct(
			'ctUp-ads-clietwidget',
			__( 'Safreen - Our Client', 'safreen-widgets' ),
			 array(
			'classname'   => 'ctUp-ads-clietwidget',
			'description' => __( 'Client section widget', 'safreen-widgets' ),
			'customize_selective_refresh' => true,
		) );
	}

    function widget($args, $instance) {

        extract($args);

        echo $before_widget;

        ?> 
        <div class="row">
  
        <?php if( !empty($instance['title_main']) ): ?>
         <div class="text-center">
                            <h2 class="wow fadeIn" >
                            
                            <?php echo ($instance['title_main']);?>
                            
                                                        </h2>
                            <div  class="small-border wow flipInY" ></div>
                        </div>
                        <?php endif;?>

        <div class="clients-safreen">
        
        
        <ul>
        
        <?php if( !empty($instance['image_uri1']) ): ?>
				<li class=" wow fadeInRight medium-2  small-5 columns">
                
              <a  href="<?php echo esc_url($instance['client_uri1']);?>"><img src="<?php echo esc_url($instance['image_uri1']);?> "/></a>
                
                
                </li>
                <?php endif; ?>
                
                
         <?php if( !empty($instance['image_uri2']) ): ?>
				<li class="wow fadeInRight medium-2  small-5 columns">
                
             <a  href="<?php echo esc_url($instance['client_uri2']);?>"><img src="<?php echo esc_url($instance['image_uri2']);?> "/></a>
                
                
                </li>
                <?php endif; ?>
          
             <?php if( !empty($instance['image_uri3']) ): ?>
				<li class="wow fadeInRight medium-2  small-5 columns">
                
             <a  href="<?php echo esc_url($instance['client_uri3']);?>"><img src="<?php echo esc_url($instance['image_uri3']);?> "/></a>
                
                
                </li>
                <?php endif; ?>
                
                      
           <?php if( !empty($instance['image_uri4']) ): ?>
				<li class="wow fadeInRight medium-2  small-5  columns">
                
             <a  href="<?php echo esc_url($instance['client_uri4']);?>"><img src="<?php echo esc_url($instance['image_uri4']);?> "/></a>
                
                
                </li>
                <?php endif; ?>

          
           <?php if( !empty($instance['image_uri5']) ): ?>
				<li class="wow fadeInRight medium-2  small-5  columns">
                
             <a  href="<?php echo esc_url($instance['client_uri5']);?>"><img src="<?php echo esc_url($instance['image_uri5']);?> "/></a>
                
                
                </li>
                <?php endif; ?>


                
                </ul>
                </div>
                </div>
                
<?php
        echo $after_widget;}

    function update($new_instance, $old_instance) {

        $instance = $old_instance;
		
		/*Main title */
		        $instance['title_main'] = strip_tags($new_instance['title_main']);
				
		/*Client 1 */
        
        
		$instance['image_uri1'] = strip_tags( $new_instance['image_uri1'] );
		$instance['client_uri1'] = strip_tags( $new_instance['client_uri1'] );
		
		/*Client 2 */
        
        
		$instance['image_uri2'] = strip_tags( $new_instance['image_uri2'] );
		$instance['client_uri2'] = strip_tags( $new_instance['client_uri2'] );
        
		/*Client 3 */
  		$instance['image_uri3'] = strip_tags( $new_instance['image_uri3'] );
		$instance['client_uri3'] = strip_tags( $new_instance['client_uri3'] );
        
		/*Client 4 */
        

		$instance['image_uri4'] = strip_tags( $new_instance['image_uri4'] );
		$instance['client_uri4'] = strip_tags( $new_instance['client_uri4'] );
        
		/*Client 5 */
        
        
		$instance['image_uri5'] = strip_tags( $new_instance['image_uri5'] );
		$instance['client_uri5'] = strip_tags( $new_instance['client_uri5'] );

	

        return $instance;}
	/* ---------------------------- */
	/* ------- Display Widget -------- */
	/* ---------------------------- */


    function form($instance) {
		
		
        ?>
          <p>
            <label for="<?php echo $this->get_field_id('title_main'); ?>"><?php _e('Main Title', 'safreen-widgets'); ?></label><br/>
            <input type="text" name="<?php echo $this->get_field_name('title_main'); ?>" id="<?php echo $this->get_field_id('title_main'); ?>" value="<?php if( !empty($instance['title_main']) ): echo $instance['title_main']; endif; ?>" class="widefat">
        </p>
        <!--- Main title-->
<div class="accordion_safreen">
                      
        <!--- Client 1-->
        
       <h4 > <?php _e('Client 1', 'safreen-widgets') ?></h4>
        <div class="pane_safreen">        
            <div class="widget_input_wrap">
                <label for="<?php echo $this->get_field_id( 'image_uri1' ); ?>"><?php _e('Image 1', 'safreen-widgets') ?></label>
                <div class="media-picker-wrap">
                <?php if(!empty($instance['image_uri1'])) { ?>
                    <img style="max-width:100%; height:auto;" class="media-picker-preview" src="<?php echo esc_url($instance['image_uri1']); ?>" />
                    <i class="fa fa-times media-picker-remove"></i>
                <?php } ?>
                <input class="widefat media-picker" id="<?php echo $this->get_field_id( 'image_uri1' ); ?>" name="<?php echo $this->get_field_name( 'image_uri1' ); ?>" value="<?php if( !empty($instance['image_uri1']) ): echo $instance['image_uri1']; endif; ?>" type="hidden" />
                <a class="media-picker-button button" onclick="mediaPicker(this.id)" id="<?php echo $this->get_field_id( 'image_uri1' ).'mpick'; ?>"><?php _e('Select Image', 'safreen-widgets') ?></a>
                </div>
                    </div>


        <p>
        
			<label for="<?php echo $this->get_field_id('client_uri1'); ?>"><?php _e('Link 1','safreen-widgets'); ?></label><br />
			<input type="text" name="<?php echo $this->get_field_name('client_uri1'); ?>" id="<?php echo $this->get_field_id('client_uri1'); ?>" value="<?php if( !empty($instance['client_uri1']) ): echo esc_url($instance['client_uri1']); endif; ?>" class="widefat">
		</p>
            </div>    
       
         
        

        <!--- Client 2-->
       <h4><?php _e('Client 2', 'safreen-widgets') ?></h4>
        

<div class="pane_safreen">
            <div class="widget_input_wrap">
                <label for="<?php echo $this->get_field_id( 'image_uri2' ); ?>"><?php _e('Image 2', 'safreen-widgets') ?></label>
                <div class="media-picker-wrap">
                <?php if(!empty($instance['image_uri2'])) { ?>
                    <img style="max-width:100%; height:auto;" class="media-picker-preview" src="<?php echo esc_url($instance['image_uri2']); ?>" />
                    <i class="fa fa-times media-picker-remove"></i>
                <?php } ?>
                <input class="widefat media-picker" id="<?php echo $this->get_field_id( 'image_uri2' ); ?>" name="<?php echo $this->get_field_name( 'image_uri2' ); ?>" value="<?php if( !empty($instance['image_uri2']) ): echo $instance['image_uri2']; endif; ?>" type="hidden" />
                <a class="media-picker-button button" onclick="mediaPicker(this.id)" id="<?php echo $this->get_field_id( 'image_uri2' ).'mpick'; ?>"><?php _e('Select Image', 'safreen-widgets') ?></a>
                </div>
            </div>
        

        <p>
        
			<label for="<?php echo $this->get_field_id('client_uri2'); ?>"><?php _e('Link 2','safreen-widgets'); ?></label><br />
			<input type="text" name="<?php echo $this->get_field_name('client_uri2'); ?>" id="<?php echo $this->get_field_id('client_uri2'); ?>" value="<?php if( !empty($instance['client_uri2']) ): echo esc_url($instance['client_uri2']); endif; ?>" class="widefat">
		</p>
                
        </div>                
   
       

<h4 > <?php _e('Client 3', 'safreen-widgets') ?></h4>
<div class="pane_safreen"> 
		
            <div class="widget_input_wrap">
                <label for="<?php echo $this->get_field_id( 'image_uri3' ); ?>"><?php _e('Image 3', 'safreen-widgets') ?></label>
                <div class="media-picker-wrap">
                <?php if(!empty($instance['image_uri3'])) { ?>
                    <img style="max-width:100%; height:auto;" class="media-picker-preview" src="<?php echo esc_url($instance['image_uri3']); ?>" />
                    <i class="fa fa-times media-picker-remove"></i>
                <?php } ?>
                <input class="widefat media-picker" id="<?php echo $this->get_field_id( 'image_uri3' ); ?>" name="<?php echo $this->get_field_name( 'image_uri3' ); ?>" value="<?php if( !empty($instance['image_uri3']) ): echo $instance['image_uri3']; endif; ?>" type="hidden" />
                <a class="media-picker-button button" onclick="mediaPicker(this.id)" id="<?php echo $this->get_field_id( 'image_uri3' ).'mpick'; ?>"><?php _e('Select Image', 'safreen-widgets') ?></a>
                </div>
            </div>
        

        <p>
        
			<label for="<?php echo $this->get_field_id('client_uri3'); ?>"><?php _e('Link 3','safreen-widgets'); ?></label><br />
			<input type="text" name="<?php echo $this->get_field_name('client_uri3'); ?>" id="<?php echo $this->get_field_id('client_uri3'); ?>" value="<?php if( !empty($instance['client_uri3']) ): echo esc_url($instance['client_uri3']); endif; ?>" class="widefat">
		</p>
</div>     
 
 
   <!--- Client 4-->


<h4 > <?php _e('Client 4', 'safreen-widgets') ?></h4>
<div class="pane_safreen"> 
		
            <div class="widget_input_wrap">
                <label for="<?php echo $this->get_field_id( 'image_uri4' ); ?>"><?php _e('Image 4', 'safreen-widgets') ?></label>
                <div class="media-picker-wrap">
                <?php if(!empty($instance['image_uri4'])) { ?>
                    <img style="max-width:100%; height:auto;" class="media-picker-preview" src="<?php echo esc_url($instance['image_uri4']); ?>" />
                    <i class="fa fa-times media-picker-remove"></i>
                <?php } ?>
                <input class="widefat media-picker" id="<?php echo $this->get_field_id( 'image_uri4' ); ?>" name="<?php echo $this->get_field_name( 'image_uri4' ); ?>" value="<?php if( !empty($instance['image_uri4']) ): echo $instance['image_uri4']; endif; ?>" type="hidden" />
                <a class="media-picker-button button" onclick="mediaPicker(this.id)" id="<?php echo $this->get_field_id( 'image_uri4' ).'mpick'; ?>"><?php _e('Select Image', 'safreen-widgets') ?></a>
                </div>
            </div>
        

        <p>
        
			<label for="<?php echo $this->get_field_id('client_uri4'); ?>"><?php _e('Link 4','safreen-widgets'); ?></label><br />
			<input type="text" name="<?php echo $this->get_field_name('client_uri4'); ?>" id="<?php echo $this->get_field_id('client_uri4'); ?>" value="<?php if( !empty($instance['client_uri4']) ): echo esc_url($instance['client_uri4']); endif; ?>" class="widefat">
		</p>
</div>          
           
           <!--- Client 5-->
          
        
            <h4 > <?php _e('Client 5', 'safreen-widgets') ?></h4>
         
<div class="pane_safreen">		
            <div class="widget_input_wrap">
                <label for="<?php echo $this->get_field_id( 'image_uri5' ); ?>"><?php _e('Image 5', 'safreen-widgets') ?></label>
                <div class="media-picker-wrap">
                <?php if(!empty($instance['image_uri5'])) { ?>
                    <img style="max-width:100%; height:auto;" class="media-picker-preview" src="<?php echo esc_url($instance['image_uri5']); ?>" />
                    <i class="fa fa-times media-picker-remove"></i>
                <?php } ?>
                <input class="widefat media-picker" id="<?php echo $this->get_field_id( 'image_uri5' ); ?>" name="<?php echo $this->get_field_name( 'image_uri5' ); ?>" value="<?php if( !empty($instance['image_uri5']) ): echo $instance['image_uri5']; endif; ?>" type="hidden" />
                <a class="media-picker-button button" onclick="mediaPicker(this.id)" id="<?php echo $this->get_field_id( 'image_uri5' ).'mpick'; ?>"><?php _e('Select Image', 'safreen-widgets') ?></a>
                </div>
            </div>
        

        <p>
        
			<label for="<?php echo $this->get_field_id('client_uri5'); ?>"><?php _e('Link 5','safreen-widgets'); ?></label><br />
			<input type="text" name="<?php echo $this->get_field_name('client_uri5'); ?>" id="<?php echo $this->get_field_id('client_uri5'); ?>" value="<?php if( !empty($instance['client_uri5']) ): echo esc_url($instance['client_uri5']); endif; ?>" class="widefat">
		</p>
        </div>
     
     
     
      </div> <!---end accordino---->
     <?php

    }

}


