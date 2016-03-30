

$(document).ready(function(){

    $(".main_news_wrapper_outer_1").show();
    $(".main_news_wrapper_outer_2").hide();

    $(".tab_click1").click(function(){
        $(".main_news_wrapper_outer_2").fadeOut("1","swing");
        $(".main_news_wrapper_outer_1").fadeIn("1","swing");
        $(".tab_item1").addClass("active_tab");
        $(".tab_item2").removeClass("active_tab");
        $(".tab_item1").removeClass("deactive_tab");
    });
    $(".tab_click2").click(function(){
        $(".main_news_wrapper_outer_2").fadeIn("1","swing");
        $(".main_news_wrapper_outer_1").fadeOut("1","swing");
        $(".tab_item2").addClass("active_tab");
        $(".tab_item1").removeClass("active_tab");
        $(".tab_item1").addClass("deactive_tab");
    });
    $(".trigger").click(function(){
        $(".hidden_thumbnail").toggleClass("open");
    });
});