<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="res/css/bootstrap-theme.min.css">
<link rel="stylesheet" type="text/css" href="res/css/styles_blog.css">

{!! Form::open(['action' => 'AdminController@addAdminTenders']) !!}
<div class="form-group">
    <input  type="text"  placeholder="city" name = "city">
    <input  type="text"  placeholder="state" name = "state">
    <input  type="text"  placeholder="industry" name = "industry">
</div>
<div class="form-group">
    <input  type="text"  placeholder="ownership" name = "ownership">
    <input  type="text"  placeholder="product_category" name = "product_category">
    <input  type="text"  placeholder="Issuing Authority" name = "issuing_authority">
</div>
<div class="form-group">
    <input  type="text"  placeholder="description" name = "description">
    <input type="text"  placeholder="estimated_value" name = "estimated_value">
</div>
<div class="form-group">
    <input  type="text"  placeholder="title" name = "title">
    <input type="text"  placeholder="link" name = "link">
</div>
<div class="form-group">
    <input type="text"  placeholder="open_date YYYY-MM-DD" name = "open_date">
    <input type="text"  placeholder="close_date YYYY-MM-DD" name = "close_date">
</div>
<div class="form-group">
    <button class="btn btn-info" type="submit" >Add Tender</button>
</div>
{!! Form::close() !!}
@include('errors.list')

<center class="row">
    <div class="col-lg-7 text-center blog_wrap">
        <table class="table table-bordered">
            <tr>
                <td><b>City</b></td>
                <td><b>state</b></td>
                <td><b>Description</b></td>
                <td><b>ownership</b></td>
                <td><b>industry</b></td>
                <td><b>product_category</b></td>
                <td><b>title</b></td>
                <td><b>link</b></td>
                <td><b>estimated_value</b></td>
                <td><b>open_date</b></td>
                <td><b>close_date</b></td>
                <td><b>Issuing Authority</b></td>
                <td><b>Edit</b></td>
            </tr>

            @foreach($tenders as $tender)
                <tr>
                    <td>{{ $tender->city }}</td>
                    <td>{{ $tender->state }}</td>
                    <td>{{ $tender->description }}</td>
                    <td>{{ $tender->ownership }}</td>
                    <td>{{ $tender->industry }}</td>
                    <td>{{ $tender->product_category }}</td>
                    <td><a href="{{ $tender->link }}" target="_blank">{{ $tender->title }}</a></td>
                    <td>{{ $tender->link }}</td>
                    <td>{{ $tender->estimated_value }}</td>
                    <td>{{ $tender->open_date }}</td>
                    <td>{{ $tender->close_date }}</td>
                    <td>{{ $tender->issuing_authority }}</td>
                    <td><a href="{{ url('/showEditAdminTenders/'.$tender->id) }}">Click</a></td>
                </tr>
            @endforeach

        </table>
    </div>
</center>


<script type="text/javascript" src="res/js/jquery.min.js"></script>
<script type="text/javascript" src="res/js/bootstrap.min.js"></script>

