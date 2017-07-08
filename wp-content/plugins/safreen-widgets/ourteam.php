<?php

/**************************/
/******Our Team widget */
/************************/



class safreen_ourteam extends WP_Widget {
	
	public function __construct() {
		parent::__construct(
			'ctUp-ads-teamwidget',
			__( 'Safreen - Our Team', 'safreen-widgets' ),
		 array(
			'classname'   => 'ctUp-ads-teamwidget',
			'description' => __( 'Our Team section widget', 'safreen-widgets' ),
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
                            <h2 class="team-safreen-title wow fadeIn" >
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
        <div class="row ourteampad">
  
       <?php if ( !empty($instance['image_uri']) || !empty($instance['link']) || !empty($instance['title_sub']) || !empty($instance['text']) ):?>
        <article class=" medium-5  columns item  ">
				<div class="node">
                <?php if( !empty($instance['image_uri']) ): ?>
					<div class="circular-image wow fadeIn">
						<img src="<?php echo esc_url($instance['image_uri']);?>">
					</div>
                    <?php endif; ?>
                    <div class="matchhe">
					<hgroup class="wow fadeIn">
                    <?php if( !empty($instance['title']) ): ?>
						<h1 > <?php if( !empty($instance['link']) ): ?><a href="<?php echo esc_url($instance['link']);?>"><?php endif; ?><?php echo apply_filters('widget_title', $instance['title']); ?></a></h1>
                        <?php endif; ?>
                        
                        <?php if( !empty($instance['title_sub']) ): ?>

						<h2 ><?php echo apply_filters('widget_title', $instance['title_sub']); ?></h2>
                        <?php endif; ?>
					</hgroup>
                    <?php if( !empty($instance['text']) ): ?>

					<p class="wow fadeInup"><?php echo  htmlspecialchars_decode(apply_filters('widget_title', $instance['text'])); ?></p>
                    <?php endif; ?>
				</div>
                </div>
			</article>
            
            <?php endif; ?>
            
    <?php if ( !empty($instance['image_uri2']) || !empty($instance['link2']) || !empty($instance['title_sub2']) || !empty($instance['text2']) ):?>         
            
        <article class=" medium-5 columns item  ">
				<div class="node">
                <?php if( !empty($instance['image_uri2']) ): ?>
					<div class="circular-image wow fadeIn">
						<img src="<?php echo esc_url($instance['image_uri2']);?>">
					</div>
                    <?php endif; ?>
                    <div class="matchhe">
					<hgroup class="wow fadeIn">
                    <?php if( !empty($instance['title2']) ): ?>
						<h1 > <?php if( !empty($instance['link2']) ): ?><a href="<?php echo esc_url($instance['link2']);?>"><?php endif; ?><?php echo  apply_filters('widget_title', $instance['title2']); ?></a></h1>
                        <?php endif; ?>
                        
                        <?php if( !empty($instance['title_sub2']) ): ?>

						<h2 ><?php echo apply_filters('widget_title', $instance['title_sub2']); ?></h2>
                        <?php endif; ?>
					</hgroup>
                    <?php if( !empty($instance['text2']) ): ?>

					<p class="wow fadeInup"><?php echo htmlspecialchars_decode(apply_filters('widget_title', $instance['text2'])); ?></p>
                    <?php endif; ?>
				</div>
                 </div>
			</article>
             <?php endif; ?>
             
             <?php if ( !empty($instance['image_uri3']) || !empty($instance['link3']) || !empty($instance['title_sub3']) || !empty($instance['text3']) ):?>  
             
           <article class=" medium-5 columns item  ">
				<div class="node">
                <?php if( !empty($instance['image_uri3']) ): ?>
					<div class="circular-image wow fadeIn">
						<img src="<?php echo esc_url($instance['image_uri3']);?>">
					</div>
                    <?php endif; ?>
                    <div class="matchhe">
					<hgroup class="wow fadeIn">
                    <?php if( !empty($instance['title3']) ): ?>
						<h1 > <?php if( !empty($instance['link3']) ): ?><a href="<?php echo esc_url($instance['link3']);?>"><?php endif; ?><?php echo apply_filters('widget_title', $instance['title3']); ?></a></h1>
                        <?php endif; ?>
                        
                        <?php if( !empty($instance['title_sub3']) ): ?>

						<h2 ><?php echo apply_filters('widget_title', $instance['title_sub3']); ?></h2>
                        <?php endif; ?>
					</hgroup>
                    <?php if( !empty($instance['text3']) ): ?>

					<p class="wow fadeInup"><?php echo htmlspecialchars_decode(apply_filters('widget_title', $instance['text3'])); ?></p>
                    <?php endif; ?>
				</div></div>
			</article>
            <?php endif; ?>
            
            <?php if ( !empty($instance['image_uri4']) || !empty($instance['link4']) || !empty($instance['title_sub4']) || !empty($instance['text4']) ):?>  
            
            <article class="  medium-5 columns item  ">
				<div class="node">
                <?php if( !empty($instance['image_uri4']) ): ?>
					<div class="circular-image wow fadeIn">
						<img src="<?php echo esc_url($instance['image_uri4']);?>">
					</div>
                    <?php endif; ?>
                     <div class="matchhe">
					<hgroup class="wow fadeIn">
                    <?php if( !empty($instance['title4']) ): ?>
						<h1 > <?php if( !empty($instance['link4']) ): ?><a href="<?php echo esc_url($instance['link4']);?>"><?php endif; ?><?php echo apply_filters('widget_title', $instance['title4']); ?></a></h1>
                        <?php endif; ?>
                        
                        <?php if( !empty($instance['title_sub4']) ): ?>

						<h2 ><?php echo apply_filters('widget_title', $instance['title_sub4']); ?></h2>
                        <?php endif; ?>
					</hgroup>
                    <?php if( !empty($instance['text4']) ): ?>

					<p class="wow fadeInup"><?php echo htmlspecialchars_decode(apply_filters('widget_title', $instance['text4'])); ?></p>
                    <?php endif; ?>
				</div></div>
			</article>

           <?php endif; ?>
</div>
<?php
        echo $after_widget;
		

    }

    function update($new_instance, $old_instance) {

        $instance = $old_instance;
		$instance['main_title'] = strip_tags($new_instance['main_title']);
		$instance['sub_title'] = strip_tags($new_instance['sub_title']);
		
        $instance['text'] = stripslashes(wp_filter_post_kses($new_instance['text']));
        $instance['title'] = strip_tags($new_instance['title']);
		$instance['title_sub'] = strip_tags($new_instance['title_sub']);
		$instance['link'] = strip_tags( $new_instance['link'] );
		$instance['image_uri'] = strip_tags( $new_instance['image_uri'] );
		
		
		$instance['text2'] = stripslashes(wp_filter_post_kses($new_instance['text2']));
		$instance['title2'] = strip_tags($new_instance['title2']);
		$instance['title_sub2'] = strip_tags($new_instance['title_sub2']);
		$instance['link2'] = strip_tags( $new_instance['link2'] );
		$instance['image_uri2'] = strip_tags( $new_instance['image_uri2'] );
		
		$instance['text3'] = stripslashes(wp_filter_post_kses($new_instance['text3']));
		$instance['title3'] = strip_tags($new_instance['title3']);
		$instance['title_sub3'] = strip_tags($new_instance['title_sub3']);
		$instance['link3'] = strip_tags( $new_instance['link3'] );
		$instance['image_uri3'] = strip_tags( $new_instance['image_uri3'] );
		
			$instance['text4'] = stripslashes(wp_filter_post_kses($new_instance['text4']));
		$instance['title4'] = strip_tags($new_instance['title4']);
		$instance['title_sub4'] = strip_tags($new_instance['title_sub4']);
		$instance['link4'] = strip_tags( $new_instance['link4'] );
		$instance['image_uri4'] = strip_tags( $new_instance['image_uri4'] );
		
		
		
		

        return $instance;

    }
	/* ---------------------------- */
	/* ------- Display Widget -------- */
	/* ---------------------------- */


    function form($instance) {
        ?>
        
              
 <p>
            <label for="<?php echo $this->get_field_id('main_title'); ?>"><?php _e('Main Title', 'safreen-widgets'); ?></label><br/>
            <input type="text" name="<?php echo $this->get_field_name('main_title'); ?>" id="<?php echo $this->get_field_id('main_title'); ?>" value="<?php if( !empty($instance['main_title']) ): echo $instance['main_title']; endif; ?>" class="widefat">
        </p>
        
        <p>
            <label for="<?php echo $this->get_field_id('sub_title'); ?>"><?php _e('Sub Title', 'safreen-widgets'); ?></label><br/>
            <input type="text" name="<?php echo $this->get_field_name('sub_title'); ?>" id="<?php echo $this->get_field_id('sub_title'); ?>" value="<?php if( !empty($instance['sub_title']) ): echo $instance['sub_title']; endif; ?>" class="widefat">
        </p> 

<!--BLOCK 1 START-->
<div class="accordion_safreen">  
        
            <h4> <?php _e('Team 1', 'safreen-widgets') ?></h4>
           
            <div class="pane_safreen">


  <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title', 'safreen-widgets'); ?></label><br/>
            <input type="text" name="<?php echo $this->get_field_name('title'); ?>" id="<?php echo $this->get_field_id('title'); ?>" value="<?php if( !empty($instance['title']) ): echo $instance['title']; endif; ?>" class="widefat">
        </p>
                        <p>
            <label for="<?php echo $this->get_field_id('title_sub'); ?>"><?php _e('Position', 'safreen-widgets'); ?></label><br/>
            <input type="text" name="<?php echo $this->get_field_name('title_sub'); ?>" id="<?php echo $this->get_field_id('title_sub'); ?>" value="<?php if( !empty($instance['title_sub']) ): echo $instance['title_sub']; endif; ?>" class="widefat">
        </p>
                 <p>
            <label for="<?php echo $this->get_field_id('text'); ?>"><?php _e('Text', 'safreen-widgets'); ?></label><br/>
            <textarea class="widefat" rows="8" cols="20" name="<?php echo $this->get_field_name('text'); ?>" id="<?php echo $this->get_field_id('text'); ?>"><?php if( !empty($instance['text']) ): echo htmlspecialchars_decode($instance['text']); endif; ?></textarea>
        </p>
		<p>
			<label for="<?php echo $this->get_field_id('link'); ?>"><?php _e('Link','safreen-widgets'); ?></label><br />
			<input type="text" name="<?php echo $this->get_field_name('link'); ?>" id="<?php echo $this->get_field_id('link'); ?>" value="<?php if( !empty($instance['link']) ): echo esc_url($instance['link']); endif; ?>" class="widefat">
		</p>
                
        
            <div class="widget_input_wrap">
            
                <label for="<?php echo $this->get_field_id( 'image_uri' ); ?>"><?php _e('Image', 'safreen-widgets') ?></label>
                <div class="media-picker-wrap">
                <?php if(!empty($instance['image_uri'])) { ?>
                    <img style="max-width:100%; height:auto;" class="media-picker-preview" src="<?php echo esc_url($instance['image_uri']); ?>" />
                    <i class="fa fa-times media-picker-remove"></i>
                <?php } ?>
                <input class="widefat media-picker" id="<?php echo $this->get_field_id( 'image_uri' ); ?>" name="<?php echo $this->get_field_name( 'image_uri' ); ?>" value="<?php if( !empty($instance['image_uri']) ): echo $instance['image_uri']; endif; ?>" type="hidden" />
                <a class="media-picker-button button" onclick="mediaPicker(this.id)" id="<?php echo $this->get_field_id( 'image_uri' ).'mpick'; ?>"><?php _e('Select Image', 'safreen-widgets') ?></a>
                </div>
            </div>
                </div>
                
                
                
          <!--BLOCK 2 START-->

        
            <h4> <?php _e('Team 2', 'safreen-widgets') ?></h4>
            <div class="pane_safreen">

<p>
            <label for="<?php echo $this->get_field_id('title2'); ?>"><?php _e('Nmae', 'safreen-widgets'); ?></label><br/>
            <input type="text" name="<?php echo $this->get_field_name('title2'); ?>" id="<?php echo $this->get_field_id('title2'); ?>" value="<?php if( !empty($instance['title2']) ): echo $instance['title2']; endif; ?>" class="widefat">
        </p>
                        <p>
            <label for="<?php echo $this->get_field_id('title_sub2'); ?>"><?php _e('Position', 'safreen-widgets'); ?></label><br/>
            <input type="text" name="<?php echo $this->get_field_name('title_sub2'); ?>" id="<?php echo $this->get_field_id('title_sub2'); ?>" value="<?php if( !empty($instance['title_sub2']) ): echo $instance['title_sub2']; endif; ?>" class="widefat">
        </p>
                 <p>
            <label for="<?php echo $this->get_field_id('text2'); ?>"><?php _e('Text', 'safreen-widgets'); ?></label><br/>
            <textarea class="widefat" rows="8" cols="20" name="<?php echo $this->get_field_name('text2'); ?>" id="<?php echo $this->get_field_id('text2'); ?>"><?php if( !empty($instance['text2']) ): echo htmlspecialchars_decode($instance['text2']); endif; ?></textarea>
        </p>
		<p>
			<label for="<?php echo $this->get_field_id('link2'); ?>"><?php _e('Link','safreen-widgets'); ?></label><br />
			<input type="text" name="<?php echo $this->get_field_name('link2'); ?>" id="<?php echo $this->get_field_id('link2'); ?>" value="<?php if( !empty($instance['link2']) ): echo esc_url($instance['link2']); endif; ?>" class="widefat">
		</p>
                
        
            <div class="widget_input_wrap">
                <label for="<?php echo $this->get_field_id( 'image_uri2' ); ?>"><?php _e('Image', 'safreen-widgets') ?></label>
                <div class="media-picker-wrap">
                <?php if(!empty($instance['image_uri2'])) { ?>
                    <img style="max-width:100%; height:auto;" class="media-picker-preview" src="<?php echo esc_url($instance['image_uri2']); ?>" />
                    <i class="fa fa-times media-picker-remove"></i>
                <?php } ?>
                <input class="widefat media-picker" id="<?php echo $this->get_field_id( 'image_uri2' ); ?>" name="<?php echo $this->get_field_name( 'image_uri2' ); ?>" value="<?php if( !empty($instance['image_uri2']) ): echo $instance['image_uri2']; endif; ?>" type="hidden" />
                <a class="media-picker-button button" onclick="mediaPicker(this.id)" id="<?php echo $this->get_field_id( 'image_uri2' ).'mpick'; ?>"><?php _e('Select Image', 'safreen-widgets') ?></a>
                </div>
            </div>
                </div>
                
                
                
            <!--BLOCK 3 START-->

        
            <h4> <?php _e('Team 3', 'safreen-widgets') ?></h4>
            <div class="pane_safreen">


  <p>
            <label for="<?php echo $this->get_field_id('title3'); ?>"><?php _e('Name', 'safreen-widgets'); ?></label><br/>
            <input type="text" name="<?php echo $this->get_field_name('title3'); ?>" id="<?php echo $this->get_field_id('title3'); ?>" value="<?php if( !empty($instance['title3']) ): echo $instance['title3']; endif; ?>" class="widefat">
        </p>
                        <p>
            <label for="<?php echo $this->get_field_id('title_sub3'); ?>"><?php _e('Position', 'safreen-widgets'); ?></label><br/>
            <input type="text" name="<?php echo $this->get_field_name('title_sub3'); ?>" id="<?php echo $this->get_field_id('title_sub3'); ?>" value="<?php if( !empty($instance['title_sub3']) ): echo $instance['title_sub3']; endif; ?>" class="widefat">
        </p>

                 <p>
            <label for="<?php echo $this->get_field_id('text3'); ?>"><?php _e('Text', 'safreen-widgets'); ?></label><br/>
            <textarea class="widefat" rows="8" cols="20" name="<?php echo $this->get_field_name('text3'); ?>" id="<?php echo $this->get_field_id('text3'); ?>"><?php if( !empty($instance['text3']) ): echo htmlspecialchars_decode($instance['text3']); endif; ?></textarea>
        </p>
		<p>
			<label for="<?php echo $this->get_field_id('link3'); ?>"><?php _e('Link','safreen-widgets'); ?></label><br />
			<input type="text" name="<?php echo $this->get_field_name('link3'); ?>" id="<?php echo $this->get_field_id('link3'); ?>" value="<?php if( !empty($instance['link3']) ): echo esc_url($instance['link3']); endif; ?>" class="widefat">
		</p>
                
        
            <div class="widget_input_wrap">
                <label for="<?php echo $this->get_field_id( 'image_uri3' ); ?>"><?php _e('Image', 'safreen-widgets') ?></label>
                <div class="media-picker-wrap">
                <?php if(!empty($instance['image_uri3'])) { ?>
                    <img style="max-width:100%; height:auto;" class="media-picker-preview" src="<?php echo esc_url($instance['image_uri3']); ?>" />
                    <i class="fa fa-times media-picker-remove"></i>
                <?php } ?>
                <input class="widefat media-picker" id="<?php echo $this->get_field_id( 'image_uri3' ); ?>" name="<?php echo $this->get_field_name( 'image_uri3' ); ?>" value="<?php if( !empty($instance['image_uri3']) ): echo $instance['image_uri3']; endif; ?>" type="hidden" />
                <a class="media-picker-button button" onclick="mediaPicker(this.id)" id="<?php echo $this->get_field_id( 'image_uri3' ).'mpick'; ?>"><?php _e('Select Image', 'safreen-widgets') ?></a>
                </div>
            </div>
                </div>
                
                
                
                <!--BLOCK 4 START-->

        
            <h4> <?php _e('Team 4', 'safreen-widgets') ?></h4>
            <div class="pane_safreen">
            
  <p>
            <label for="<?php echo $this->get_field_id('title4'); ?>"><?php _e('Name', 'safreen-widgets'); ?></label><br/>
            <input type="text" name="<?php echo $this->get_field_name('title4'); ?>" id="<?php echo $this->get_field_id('title4'); ?>" value="<?php if( !empty($instance['title4']) ): echo $instance['title4']; endif; ?>" class="widefat">
        </p>
                        <p>
            <label for="<?php echo $this->get_field_id('title_sub4'); ?>"><?php _e('Position', 'safreen-widgets'); ?></label><br/>
            <input type="text" name="<?php echo $this->get_field_name('title_sub4'); ?>" id="<?php echo $this->get_field_id('title_sub4'); ?>" value="<?php if( !empty($instance['title_sub4']) ): echo $instance['title_sub4']; endif; ?>" class="widefat">
        </p>

                 <p>
            <label for="<?php echo $this->get_field_id('text4'); ?>"><?php _e('Text', 'safreen-widgets'); ?></label><br/>
            <textarea class="widefat" rows="8" cols="20" name="<?php echo $this->get_field_name('text4'); ?>" id="<?php echo $this->get_field_id('text4'); ?>"><?php if( !empty($instance['text4']) ): echo htmlspecialchars_decode($instance['text4']); endif; ?></textarea>
        </p>
		<p>
			<label for="<?php echo $this->get_field_id('link4'); ?>"><?php _e('Link','safreen-widgets'); ?></label><br />
			<input type="text" name="<?php echo $this->get_field_name('link4'); ?>" id="<?php echo $this->get_field_id('link4'); ?>" value="<?php if( !empty($instance['link4']) ): echo esc_url($instance['link4']); endif; ?>" class="widefat">
		</p>
                
        
            <div class="widget_input_wrap">
                <label for="<?php echo $this->get_field_id( 'image_uri4' ); ?>"><?php _e('Image', 'safreen-widgets') ?></label>
                <div class="media-picker-wrap">
                <?php if(!empty($instance['image_uri4'])) { ?>
                    <img style="max-width:100%; height:auto;" class="media-picker-preview" src="<?php echo esc_url($instance['image_uri4']); ?>" />
                    <i class="fa fa-times media-picker-remove"></i>
                <?php } ?>
                <input class="widefat media-picker" id="<?php echo $this->get_field_id( 'image_uri4' ); ?>" name="<?php echo $this->get_field_name( 'image_uri4' ); ?>" value="<?php if( !empty($instance['image_uri4']) ): echo $instance['image_uri4']; endif; ?>" type="hidden" />
                <a class="media-picker-button button" onclick="mediaPicker(this.id)" id="<?php echo $this->get_field_id( 'image_uri4' ).'mpick'; ?>"><?php _e('Select Image', 'safreen-widgets') ?></a>
                </div>
            </div>
                </div>
                
                </div> <!---end accordino---->
        
    <?php

    }

}



