<?php

/**************************/
/******service block widget */
/************************/


class safreen_aboutus extends WP_Widget {
	
	public function __construct() {
		parent::__construct(
			'ctUp-ads-aboutwidget',
			__( 'Safreen - About Us', 'safreen-widgets' ),
						 array(
			'classname'   => 'ctUp-ads-aboutwidget',
			'description' => __( 'About Us Section widget', 'safreen' ),
			'customize_selective_refresh' => true,
		) );

		
	}

    function widget($args, $instance) {

        extract($args);
		

        echo $before_widget;

        ?> 
         <?php if ( !empty($instance['main_title']) || !empty($instance['sub_title']) ):?>  
        <div class="row">
                        <div class="text-center">
                            <h2 class="wow fadeIn" >
							<?php if( !empty($instance['main_title']) ): ?>
                            
                           <?php echo apply_filters('widget_title', $instance['main_title']); ?>
                            
                            <?php endif;?>
                            <?php if( !empty($instance['sub_title']) ): ?>
						<span> <?php echo apply_filters('widget_title', $instance['sub_title']); ?></span>
                             <?php endif;?>

                            </h2>
                            <div  class="small-border wow flipInY" ></div>
                        </div></div>
                         <?php endif;?>
        <div class="row mainblock">
        <?php if ( !empty($instance['icon1']) || !empty($instance['title1']) || !empty($instance['text1'])  ):?>  
  <div class="medium-6  columns wow">
                            <div class="feature-box " >
                                <i class="fa <?php echo esc_attr($instance['icon1']);?> fa-4x wow fadeInUp "   ></i>
                                <div class="text wow fadeIn" >
                                <?php if( !empty($instance['title1']) ): ?>
                                    <h3><?php echo apply_filters('widget_title', $instance['title1']); ?></h3>
                                    <?php endif; ?>
                                    
                                    <?php if( !empty($instance['text1']) ): ?>
                                    <p> <?php echo  htmlspecialchars_decode(apply_filters('widget_title', $instance['text1']));?></p>
                                     <?php endif; ?>
                                </div>
                            </div>
                        </div>
                          <?php endif; ?>
                          
                           <?php if ( !empty($instance['icon2']) || !empty($instance['title2']) || !empty($instance['text2'])  ):?> 
<div class="medium-6  columns wow ">
                            <div class="feature-box wow">
                                <i class="fa <?php echo esc_attr($instance['icon2']);?> fa-4x wow fadeInUp"    ></i>
                                <div class="text wow fadeIn" >
                                <?php if( !empty($instance['title2']) ): ?>
                                    <h3><?php echo apply_filters('widget_title', $instance['title2']); ?></h3>
                                    <?php endif; ?>
                                    
                                    <?php if( !empty($instance['text2']) ): ?>
                                    <p> <?php echo htmlspecialchars_decode(apply_filters('widget_title', $instance['text2']));?></p>
                                     <?php endif; ?>
                                </div>
                            </div>
                        </div>
                         <?php endif; ?>
                        
                         <?php if ( !empty($instance['icon3']) || !empty($instance['title3']) || !empty($instance['text3'])  ):?> 
                        
<div class="medium-6  columns" >
                            <div class="feature-box">
                                <i class="fa <?php echo esc_attr($instance['icon3']);?> fa-4x wow fadeInUp"  ></i>
                                <div class="text wow fadeIn"  >
                                <?php if( !empty($instance['title3']) ): ?>
                                    <h3><?php echo  apply_filters('widget_title', $instance['title3']); ?></h3>
                                    <?php endif; ?>
                                    
                                    <?php if( !empty($instance['text3']) ): ?>
                                    <p> <?php echo htmlspecialchars_decode(apply_filters('widget_title', $instance['text3']));?></p>
                                     <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        
                         <?php endif; ?>
                         
                         
                          <?php if ( !empty($instance['icon4']) || !empty($instance['title4']) || !empty($instance['text4'])  ):?> 
<div class="medium-6  columns wow">
                            <div class="feature-box">
                                <i class="fa <?php echo esc_attr($instance['icon4']);?> fa-4x wow fadeInUp"    ></i>
                                <div class="text wow fadeIn" >
                                <?php if( !empty($instance['title4']) ): ?>
                                    <h3><?php echo apply_filters('widget_title', $instance['title4']); ?></h3>
                                    <?php endif; ?>
                                    
                                    <?php if( !empty($instance['text4']) ): ?>
                                    <p> <?php echo  htmlspecialchars_decode(apply_filters('widget_title', $instance['text4']));?></p>
                                     <?php endif; ?>
                                </div>
                            </div>
                        </div>        
         <?php endif; ?>
         </div>
        
<?php
        echo $after_widget;
		

    }

    function update($new_instance, $old_instance) {

        $instance = $old_instance;
		$instance['main_title'] = strip_tags($new_instance['main_title']);
		$instance['sub_title'] = strip_tags($new_instance['sub_title']);
		
        $instance['text1'] = stripslashes(wp_filter_post_kses($new_instance['text1']));
        $instance['title1'] = strip_tags($new_instance['title1']);
		$instance['icon1'] = strip_tags( $new_instance['icon1'] );
		
		$instance['text2'] = stripslashes(wp_filter_post_kses($new_instance['text2']));
        $instance['title2'] = strip_tags($new_instance['title2']);
		$instance['icon2'] = strip_tags( $new_instance['icon2'] );
		
		$instance['text3'] = stripslashes(wp_filter_post_kses($new_instance['text3']));
        $instance['title3'] = strip_tags($new_instance['title3']);
		$instance['icon3'] = strip_tags( $new_instance['icon3'] );
		
		$instance['text4'] = stripslashes(wp_filter_post_kses($new_instance['text4']));
        $instance['title4'] = strip_tags($new_instance['title4']);
		$instance['icon4'] = strip_tags( $new_instance['icon4'] );
		
		
        return $instance;

    }
	/* ---------------------------- */
	/* ------- Display Widget -------- */
	/* ---------------------------- */


    function form($instance) {
		
		/* Set up some default widget settings. */
		$defaults = array(
		'main_title'=>__('Why Choose Us?', 'safreen-widgets'),
		'sub_title'=>__('Find reasons to choose us as your Web partner ', 'safreen-widgets'),
		'title1' => __('Customer Satisfication Tools', 'safreen-widgets'),
		'icon1' => 'fa-bar-chart',
		'text1' =>  __('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam nec rhoncus risus. In ultrices lacinia ipsum, posuere faucibus velit bibendum ac.Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'safreen-widgets'),
		'title2' => __('Compliance Solutions', 'safreen-widgets'),
		'icon2' => 'fa-life-ring',
		'text2' =>  __('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam nec rhoncus risus. In ultrices lacinia ipsum, posuere faucibus velit bibendum ac.Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'safreen-widgets'),
		
		'title3' => __('Compliance Solutions', 'safreen-widgets'),
		'icon3' => 'fa-life-ring',
		'text3' =>  __('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam nec rhoncus risus. In ultrices lacinia ipsum, posuere faucibus velit bibendum ac.Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'safreen-widgets'),

'title4' => __('Compliance Solutions', 'safreen-widgets'),
		'icon4' => 'fa-life-ring',
		'text4' =>  __('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam nec rhoncus risus. In ultrices lacinia ipsum, posuere faucibus velit bibendum ac.Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'safreen-widgets'),


		
		);
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>
        
       <p>
            <label for="<?php echo $this->get_field_id('main_title'); ?>"><?php _e('Main Title', 'safreen-widgets'); ?></label><br/>
            <input type="text" name="<?php echo $this->get_field_name('main_title'); ?>" id="<?php echo $this->get_field_id('main_title'); ?>" value="<?php if( !empty($instance['main_title']) ): echo $instance['main_title']; endif; ?>" class="widefat">
        </p>
        
        <p>
            <label for="<?php echo $this->get_field_id('sub_title'); ?>"><?php _e('Sub Title', 'safreen-widgets'); ?></label><br/>
            <input type="text" name="<?php echo $this->get_field_name('sub_title'); ?>" id="<?php echo $this->get_field_id('sub_title'); ?>" value="<?php if( !empty($instance['sub_title']) ): echo $instance['sub_title']; endif; ?>" class="widefat">
        </p> 
        
        <h4><?php _e('For font-awesome icon visit ', 'safreen-widgets') ?><a href="<?php echo esc_url('https://fortawesome.github.io/Font-Awesome/icons/');?>"><?php _e('font-awesome','safreen-widgets')?></a></h4>


        <!--BLOCK 1 START-->
        <div class="accordion_safreen">      
                 	<h4> <?php _e('Block 1', 'safreen-widgets') ?></h4>
          
          <div class="pane_safreen">                  
         <p>
            <label for="<?php echo $this->get_field_id('icon1'); ?>"><?php _e('Icon', 'safreen-widgets'); ?></label><br/>
            <input type="text" name="<?php echo $this->get_field_name('icon1'); ?>" id="<?php echo $this->get_field_id('icon1'); ?>" value="<?php if( !empty($instance['icon1']) ): echo $instance['icon1']; endif; ?>" class="widefat">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id('title1'); ?>"><?php _e('Title', 'safreen-widgets'); ?></label><br/>
            <input type="text" name="<?php echo $this->get_field_name('title1'); ?>" id="<?php echo $this->get_field_id('title1'); ?>" value="<?php if( !empty($instance['title1']) ): echo $instance['title1']; endif; ?>" class="widefat">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('text1'); ?>"><?php _e('Text', 'safreen-widgets'); ?></label><br/>
            <textarea class="widefat" rows="8" cols="20" name="<?php echo $this->get_field_name('text1'); ?>" id="<?php echo $this->get_field_id('text1'); ?>"><?php if( !empty($instance['text1']) ): echo htmlspecialchars_decode($instance['text1']); endif; ?></textarea>
        </p>
		 </div>
                
                
                         <!--BLOCK 2 START-->
           
          
       <h4> <?php _e('Block 2', 'safreen-widgets') ?></h4>
          
         <div class="pane_safreen">
         <p>
            <label for="<?php echo $this->get_field_id('icon2'); ?>"><?php _e('Icon 2', 'safreen-widgets'); ?></label><br/>
            <input type="text" name="<?php echo $this->get_field_name('icon2'); ?>" id="<?php echo $this->get_field_id('icon2'); ?>" value="<?php if( !empty($instance['icon2']) ): echo $instance['icon2']; endif; ?>" class="widefat">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id('title2'); ?>"><?php _e('Title 2', 'safreen-widgets'); ?></label><br/>
            <input type="text" name="<?php echo $this->get_field_name('title2'); ?>" id="<?php echo $this->get_field_id('title2'); ?>" value="<?php if( !empty($instance['title2']) ): echo $instance['title2']; endif; ?>" class="widefat">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('text2'); ?>"><?php _e('Text 2', 'safreen-widgets'); ?></label><br/>
            <textarea class="widefat" rows="8" cols="20" name="<?php echo $this->get_field_name('text2'); ?>" id="<?php echo $this->get_field_id('text2'); ?>"><?php if( !empty($instance['text2']) ): echo htmlspecialchars_decode($instance['text2']); endif; ?></textarea>
        </p>
		 
  </div>
  
                           <!--BLOCK 3 START-->
         
        <h4><?php _e('Block 3', 'safreen-widgets') ?></h4>
          
        <div class="pane_safreen">
         <p>
            <label for="<?php echo $this->get_field_id('icon3'); ?>"><?php _e('Icon 3', 'safreen-widgets'); ?></label><br/>
            <input type="text" name="<?php echo $this->get_field_name('icon3'); ?>" id="<?php echo $this->get_field_id('icon3'); ?>" value="<?php if( !empty($instance['icon3']) ): echo $instance['icon3']; endif; ?>" class="widefat">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id('title3'); ?>"><?php _e('Title 3', 'safreen-widgets'); ?></label><br/>
            <input type="text" name="<?php echo $this->get_field_name('title3'); ?>" id="<?php echo $this->get_field_id('title3'); ?>" value="<?php if( !empty($instance['title3']) ): echo $instance['title3']; endif; ?>" class="widefat">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('text3'); ?>"><?php _e('Text 3', 'safreen-widgets'); ?></label><br/>
            <textarea class="widefat" rows="8" cols="20" name="<?php echo $this->get_field_name('text3'); ?>" id="<?php echo $this->get_field_id('text3'); ?>"><?php if( !empty($instance['text3']) ): echo htmlspecialchars_decode($instance['text3']); endif; ?></textarea>
        </p>
		 
  </div>
  
  
                             <!--BLOCK 4 START-->
         
       <h4> <?php _e('Block 4', 'safreen-widgets') ?></h4>
          
        <div class="pane_safreen">
         <p>
            <label for="<?php echo $this->get_field_id('icon4'); ?>"><?php _e('Icon 4', 'safreen-widgets'); ?></label><br/>
            <input type="text" name="<?php echo $this->get_field_name('icon4'); ?>" id="<?php echo $this->get_field_id('icon4'); ?>" value="<?php if( !empty($instance['icon4']) ): echo $instance['icon4']; endif; ?>" class="widefat">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id('title4'); ?>"><?php _e('Title 4', 'safreen-widgets'); ?></label><br/>
            <input type="text" name="<?php echo $this->get_field_name('title4'); ?>" id="<?php echo $this->get_field_id('title4'); ?>" value="<?php if( !empty($instance['title4']) ): echo $instance['title4']; endif; ?>" class="widefat">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('text4'); ?>"><?php _e('Text 4', 'safreen-widgets'); ?></label><br/>
            <textarea class="widefat" rows="8" cols="20" name="<?php echo $this->get_field_name('text4'); ?>" id="<?php echo $this->get_field_id('text4'); ?>"><?php if( !empty($instance['text4']) ): echo htmlspecialchars_decode($instance['text4']); endif; ?></textarea>
        </p>
		 
  </div>
  
  
  
   </div> <!---end accordino---->


  
          
    <?php

    }

}



