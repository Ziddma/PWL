$(document).ready(function(){
    
    $('.meet').waypoint(function(direction){
       if(direction =="down"){
           
           $('nav').addClass('sticky');
           //$('.meet').style.marginTop='375px';
           
           
       } else{
           $('nav').removeClass('sticky');
       }
    });
        
      
   
    /* mobile navi */
    $('.js--nav-icon').click(function(){
        var nav = $('.js--main-nav');
        var icon = $('.js--nav-icon i');
        
        nav.slideToggle(200);
        
        if(icon.hasClass('ion-md-menu')){
            icon.addClass('ion-md-close');
            icon.removeClass('ion-md-menu');
        } else {
            icon.addClass('ion-md-menu');
            icon.removeClass('ion-md-close');
        }
        
    });
    





});

