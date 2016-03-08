<div id="text" class="text">

</div>
{{--<script>
    function myFunction() {
        alert();
        var t =  {{ $blog->body }} ;
        $( "text").html(t.replace('&lt','<').replace('&gt', '>'));
    }


</script>--}}
<script type="text/javascript">
    var t =  '{{ $blog->body }}' ;
    alert(t.replace(/&lt;/g,'<').replace(/&gt;/g, '>'));

    document.getElementById("text").innerHTML=t.replace(/&lt;/g,'<').replace(/&gt;/g, '>');


</script>

