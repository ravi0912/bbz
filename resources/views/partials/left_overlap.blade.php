<div id = "left_overlap" class = "left_overlap">
    <center>
        <img id = "left_overlap_head_logo" class = "left_overlap_head_logo" src = "{{ URL::asset('images/logo/BBZlogo/bbzlogo_white.svg') }} " alt="0" title="Send Request Connection">
        <div class="left_overlap_header"><b>bbz</b> workstation</div><br>

        <div class = "left_overlap_list">
            <a href="{{ url('/profile') }}"><div>PROFILE</div></a>
            <a href="{{url('/showConnections/'.auth()->user()->id)}}"><div>CONNECTIONS</div></a>
        </div>
        <br><div class="left_overlap_header"><b>bbz</b> marketplace</div>
        <div class = "left_overlap_social_images">
            <span><img src = "{{ URL::asset('images/logo/left_social/buzzfeed.svg') }} " alt="0" title="Send Request Connection"></span>
            <span><img src = "{{ URL::asset('images/logo/left_social/facebook.svg') }} " alt="0" title="Send Request Connection"></span>
            <span><img src = "{{ URL::asset('images/logo/left_social/linkedin.svg') }} " alt="0" title="Send Request Connection"></span>
            <span><img src = "{{ URL::asset('images/logo/left_social/pinterest.svg') }} " alt="0" title="Send Request Connection"></span>
            <span><img src = "{{ URL::asset('images/logo/left_social/twitter.svg') }} " alt="0" title="Send Request Connection"></span>
        </div>




    </center>

    <div id = "left_overlap_pop" class = "left_overlap_pop" onclick = "left_overlap_pop();">
        <img src = "{{ URL::asset('images/logo/left/sidescroll_red.svg') }} " alt="0" title="Send Request Connection">
    </div>
</div>
<script type="text/javascript">
    function left_overlap_pop () {
        $("#left_overlap").toggleClass("left_overlap_toggle");
        $('html').click(function() {
            $("#left_overlap").removeClass("left_overlap_toggle");
        });
        $('#left_overlap').click(function(e){
            e.stopPropagation();
        });
    }
</script>