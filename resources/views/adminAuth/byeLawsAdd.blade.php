<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="res/css/bootstrap-theme.min.css">
<link rel="stylesheet" type="text/css" href="res/css/styles_blog.css">
<center class="row">
    <div class="col-lg-7 text-center blog_wrap">
        <table class="table table-bordered">
            <tr>
                <td><b>City</b></td>
                <td><b>Link</b></td>
                <td><b>Description</b></td>
                <td><b>Issuing Authority</b></td>
                <td><b>Delete</b></td>
            </tr>

            @foreach($byelaws as $byelaw)
                <tr>
                    <td>{{ $byelaw->city }}</td>
                    <td>{{ $byelaw->link }}</td>
                    <td><a href="{{ $byelaw->link }}" target="_blank">{{ $byelaw->description }}</a></td>
                    <td>{{ $byelaw->issuing_authority }}</td>
                    <td>Yes</td>
                </tr>
            @endforeach

        </table>
    </div>
</center>
{!! Form::open(['action' => 'AdminController@addAdminByelaws']) !!}
<div class="form-group">
    <input id="city" type="text"  placeholder="city" name = "city">
</div>
<div class="form-group">
    <input id="link" type="text"  placeholder="link" name = "link">
</div>
<div class="form-group">
    <input id="desciption" type="text"  placeholder="description" name = "description">
</div>
<div class="form-group">
    <input id="issuing_authority" type="text"  placeholder="Issuing Authority" name = "issuing_authority">
</div>
<div class="form-group">
    <button class="btn btn-info" type="submit" onclick="addAdminByelaws(event);">Add ByeLaws</button>
</div>
{!! Form::close() !!}
@include('errors.list')
<>
<script type="text/javascript" src="res/js/jquery.min.js"></script>
<script type="text/javascript" src="res/js/bootstrap.min.js"></script>
<script type="text/javascript" src="res/js/jquery.easing.min.js"></script>
<script type="text/javascript" src="res/js/scrolling-nav.js"></script>