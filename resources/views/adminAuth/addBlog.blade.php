<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="res/css/bootstrap-theme.min.css">
<link rel="stylesheet" type="text/css" href="res/css/styles_blog.css">

{!! Form::open(['action' => 'BlogController@store']) !!}
<div class="form-group">
    <input id="header" type="textarea"  placeholder="header" name = "heading">
</div>
<div class="form-group">
    <input id="body" type="textarea" contenteditable="true" placeholder="body" name = "body">
</div>
<div class="form-group">
    <button class="btn btn-info" type="submit" onclick="addAdminByelaws(event);">Add Blog</button>
</div>
{!! Form::close() !!}
@include('errors.list')