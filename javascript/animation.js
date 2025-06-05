$(document).ready(function(){

    $(".icone").mouseenter(function(){
        $(".nav").css("background-color", "white");
    });

        $(".sublinha").hide(2000);
            $(".logo").mouseenter(function(){
                $(".sublinha").show(400);
            });
            $(".logo").mouseleave(function(){
                $(".sublinha").hide(400);
            });
        
});
