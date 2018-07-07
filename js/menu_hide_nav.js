/* <!--   /////////////////////////       隱藏MENU以下  /////////////////////////   -->        */   
$(".menu").click(function(e){
    e.stopPropagation();
        $(this).toggleClass("active");

        if($(".menu").hasClass("active")){
            $(document.body).css({
                "overflow-x":"hidden",
                "overflow-y":"hidden"
              });
        }else{$(document.body).css({
            "overflow-x":"auto",
            "overflow-y":"auto"
          });}
    });

    $("body").click(function(){
        $(".menu").removeClass("active");        
    });

    $(".bbar").click(function(e){
        e.stopPropagation();
            $(".menu_ul").toggleClass("active_active");
            $(".bbar2").toggleClass("bbar3");
        });
        
/* <!--   /////////////////////////       nav捲動隱藏以下  /////////////////////////   -->        */   
    var scrollLast=0;
    $(".back_btn").css("opacity","0")
    $(window).scroll(function(){
    var scrollTop=$(this).scrollTop();
        if(scrollTop<100){
            $(".back_btn").css("opacity","0");
        }else{
            $(".back_btn").css("opacity","0.8");
        };
        console.log(scrollTop);
        if(scrollTop>scrollLast&&scrollTop>64){
            $("header").addClass("hide_nav");
        }else{
            $("header").removeClass("hide_nav");
        }
        scrollLast=scrollTop;
    });
 /* <!--   /////////////////////////       top捲動以下  /////////////////////////   -->        */ 
    $(".back_btn").click(function(){
        $("html,body").animate({
            scrollTop:0
        },1000);
         // return false;
    });
    
