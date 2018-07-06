/* <!--   /////////////////////////       隱藏MENU以下  /////////////////////////   -->        */   
$(".menu").click(function(e){
    e.stopPropagation();
        $(this).toggleClass("active");
    });
    
    $("body").click(function(){
        $(".menu").removeClass("active");        
    });
/* <!--   /////////////////////////       nav捲動隱藏以下  /////////////////////////   -->        */   
    var scrollLast=0;
    $(window).scroll(function(){
        var scrollTop=$(this).scrollTop();
        console.log(scrollTop);
        if(scrollTop>scrollLast&&scrollTop>64){
            $("header").addClass("hide_nav");
        }else{
            $("header").removeClass("hide_nav");
        }
        scrollLast=scrollTop;
    });
    // $(".back_btn").click(function(){
    //     // $(window).scrollTop(0);
    //     $("html").animate({
    //         scrollTop:0
    //     },1000)
    // })