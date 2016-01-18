/*
var timer;


document.getElementById("search-input").onkeyup = function(){
    var keyword = $('#search-input').val();
    timer = setTimeout(function(){
        if(keyword.length > 0)
        {
            ////alert(keywords);
            //$.post('http://localhost:8000/executeSearch',{keywords: keywords},function(markup){
            //    $('#search-results').html(markup);
            //});
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (xhttp.readyState == 4 && xhttp.status == 200) {
                    document.getElementById("search-results").innerHTML = xhttp.responseText;
                }

            };
            xhttp.open("GET","http://localhost:8000/executeSearch?keywords="+keyword, true);
            xhttp.send();


        }
    },500);
}


document.getElementById("search-input").onkeydown = function(){
    clearTimeout(timer);
}*/
var timer;


document.getElementById("search-input").onkeyup = function(){
    var keywords = $('#search-input').val();
    timer = setTimeout(function(){
        var domain = window.location.host;
        if(keywords.length > 0)
        {
            //alert(domain);
            $("#search-results").show();
            $.get('http://'+domain+'/executeSearch',{keywords: keywords},function(markup){
                $('#search-results').html(markup);
            });

        }
    },500);
}


document.getElementById("search-input").onkeydown = function(){
    clearTimeout(timer);
}

function search_input(anchor){
    $('#search-input').val(anchor);
    $("#search-results").hide();
    $('html').click(function() {
        $("#search-results").slideUp();
    });
    $('#search-results').click(function(e){
        e.stopPropagation();
    });

}
$('html').click(function() {
    $("#search-results").slideUp();
});
$('#search-results').click(function(e){
    e.stopPropagation();
});
