var flag = true;
jQuery(document).ready(function() {
    jQuery('.burger-menu-bar').click(function(e) {
        //jQuery('.navigation-menu').slideToggle(500);
        jQuery('.navigation-menu').css(
            {
            "display": "block",         
            }
            );
            
            jQuery(".top-bar").wrap("<div class='exit-menu-button'>&times;</div>");
        /*beta version for close burger button 
            if(flag){ 
            jQuery(".top-bar").wrap("<div ><button class='exit-menu-button'>&times;</button></div>");
            flag=false;
            }
       
        jQuery('.exit-menu-button').click(function(e) {
            
            jQuery(".top-bar").css({"display":"none"});
        });
        */

        e.preventDefault();

    });

   
     
});