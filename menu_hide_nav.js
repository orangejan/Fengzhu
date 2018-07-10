/* <!--   /////////////////////////       隱藏MENU以下  /////////////////////////   -->        */   
$(".menu").click(function(e){
    e.stopPropagation();
        $(this).toggleClass("active");
/* <!--   /////////////////////////       “開隱藏MENU”不能捲動 以下 /////////////////////////   -->        */ 
        if($(".menu").hasClass("active")){
            $(document.body).css({
                "overflow":"hidden",
                "position": "fixed"
              });
        }else{$(document.body).css({
            "overflow":"auto",
            "position": "static"
          });}
/* <!--   /////////////////////////       “開隱藏MENU”不能捲動 以上 /////////////////////////   -->        */         
    });

    $("body").click(function(){
        $(".menu").removeClass("active");        
    });
/* <!--   /////////////////////////       “隱藏MENU”裡面的分頁 以下 /////////////////////////   -->        */   
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
    
