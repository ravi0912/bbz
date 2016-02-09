{!! Form::open(['action' => 'AdminController@updateAdminByelaws']) !!}
<div class="form-group">
    <input type="hidden" value="{{ $bylaw->id }}" name="id">
    <input id="city" type="text"  {{ empty($bylaw->city)? 'placeholder=city': 'value='.$bylaw->city }} name = "city">
</div>
<div class="form-group">
    <input id="link" type="text"  {{ empty($bylaw->link)? 'placeholder=city': 'value='.$bylaw->link }} name = "link">
</div>
<div class="form-group">
    <input id="desciption" type="text"  {{ empty($bylaw->description)? 'placeholder=city': 'value='.$bylaw->description }} name = "description">
    <input id="issuing_authority" type="text"  {{ empty($bylaw->issuing_authority)? 'placeholder=city': 'value='.$bylaw->issuing_authority }} name = "issuing_authority">
</div>
<div class="form-group">
    <button class="btn btn-info" type="submit" onclick="addAdminByelaws(event);">Update ByeLaws</button>
</div>
{!! Form::close() !!}
@include('errors.list')
<script type="text/javascript" src="res/js/jquery.min.js"></script>
<script type="text/javascript" src="res/js/bootstrap.min.js"></script>