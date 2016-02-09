<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="res/css/bootstrap-theme.min.css">
<link rel="stylesheet" type="text/css" href="res/css/styles_blog.css">

{!! Form::open(['action' => 'AdminController@updateAdminTenders']) !!}
<div class="form-group">
    <input  type="hidden"  value="{{ $tender->id }}" name = "id">
    <input  type="text"  {{ empty($tender->city)? 'placeholder=city': 'value='.$tender->city }} name = "city">
    <input  type="text"  {{ empty($tender->state)? 'placeholder=state':'value='.$tender->state }} name = "state">
    <input  type="text"  {{ empty($tender->industry)? 'placeholder=industry':'value='.$tender->industry }} name = "industry">
</div>
<div class="form-group">
    <input  type="text"  {{ empty($tender->ownership)? 'placeholder=ownership':'value='.$tender->ownership }} name = "ownership">
    <input  type="text"  {{ empty($tender->product_category)? 'placeholder=product_category':'value='.$tender->product_category }} name = "product_category">
    <input  type="text"  {{ empty($tender->issuing_authority)? 'placeholder=issuing_authority':'value='.$tender->issuing_authority }} name = "issuing_authority">
</div>
<div class="form-group">
    <input  type="text"  {{ empty($tender->description)? 'placeholder=description':'value='.$tender->description }} name = "description">
    <input type="text"  {{ empty($tender->estimated_value)? 'placeholder=estimated_value':'value='.$tender->estimated_value }} name = "estimated_value">
</div>
<div class="form-group">
    <input  type="text"  {{ empty($tender->title)? 'placeholder=title':'value='.$tender->title }} name = "title">
    <input type="text"  {{ empty($tender->link)? 'placeholder=link':'value='.$tender->link }} name = "link">
</div>
<div class="form-group">
    <input type="text"  {{ empty($tender->open_date)? 'placeholder=open_date':'value='.$tender->open_date }} name = "open_date">
    <input type="text"  {{ empty($tender->close_date)? 'placeholder=close_date':'value='.$tender->close_date }} name = "close_date">
</div>
<div class="form-group">
    <button class="btn btn-info" type="submit" >Update Tender</button>
</div>
{!! Form::close() !!}
@include('errors.list')

<script type="text/javascript" src="res/js/jquery.min.js"></script>
<script type="text/javascript" src="res/js/bootstrap.min.js"></script>
