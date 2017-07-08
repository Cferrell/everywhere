 
			
			
			jQuery(document).on( 'ready widget-updated widget-added', function()  {
     //  Accordion Panels
   
    jQuery(".accordion_safreen h4").click(function () {
        jQuery(this).next(".pane_safreen").slideToggle("slow").siblings(".pane_safreen:visible").slideUp("slow");
        jQuery(this).toggleClass("current");
        jQuery(this).siblings("h4").removeClass("current");
    });
  });








