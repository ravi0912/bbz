<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="res/css/styles_blog.css">
<style type="text/css">
    textarea {
        width: 600px;
        height: 120px;
        border: 3px solid #cccccc;
        padding: 5px;
        font-family: Tahoma, sans-serif;
        background-position: bottom center;
        background-repeat: no-repeat;
    }
</style>
{!! Form::open(['action' => 'BlogController@store','files'=>true]) !!}
<div class="form-group">
    <textarea id="styled1" onfocus="setbg1('#e5fff3');" onblur="setbg1('white')"  id="header"  placeholder="header" name = "heading"></textarea>
</div>
<div class="form-group">
    <textarea id="styled2" onfocus="setbg2('#e5fff3');" onblur="setbg2('white')" placeholder="body" name = "body"></textarea>
</div>
 {!! Form::file('images[]', ['multiple'=>true,'style' =>'display:block']) !!}
<div class="form-group">
    <button class="btn btn-info" type="submit" onclick="addAdminByelaws(event);">Add Blog</button>
</div>
{!! Form::close() !!}
@include('errors.list')

<script type="text/javascript">
    function setbg1(color)
    {
        document.getElementById("styled1").style.background=color
    }
    function setbg2(color)
    {
        document.getElementById("styled2").style.background=color
    }
</script>