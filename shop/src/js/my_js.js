 var back_to_top=$(".back_to_top");
        back_to_top.click(function(){
            $('html,body').animate({scrollTop:0},800);
        });
        $(window).on('scroll',function(){
            if($(window).scrollTop()>$(window).height()){
                back_to_top.fadeIn();
            }else{
                back_to_top.fadeOut();
            }
        });
        $(window).trigger('scroll');