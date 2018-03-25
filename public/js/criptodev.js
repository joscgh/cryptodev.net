/*----------------------------------------------------------------------------*/
//                                 GENERAL JS
/*----------------------------------------------------------------------------*/

jQuery(document).scroll(function(){
    if(jQuery(this).scrollTop()== 0) {   
        jQuery('header').css({"background-color":"rgba(255, 255, 255, 0)"});
        jQuery('header').css({"border-bottom-color":"rgba(242, 242, 242, 0)"});
    }else{
        jQuery('header').css({"background-color":"rgba(255, 255, 255, 0.9)"});
        jQuery('header').css({"border-bottom-color":"rgba(242, 242, 242, 1)"});
    }

    if(jQuery(window).width() > 756){
        if(jQuery(this).scrollTop() > 0){   
            jQuery('#header-cont').css({"padding":"10px 0px"});
        }else{
            jQuery('#header-cont').css({"padding":"20px 0px"});
        }
    }
});
