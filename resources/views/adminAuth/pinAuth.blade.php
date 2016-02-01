{!! Form::open(['action' => 'AdminController@pinAuth']) !!}
<div class="form-group">
    <input type="text"  value="" name = "username">
</div>
<div class="form-group">
    <input type="password"  value="" name = "password">
</div>
<div class="form-group">
    <button class="btn btn-info" type="submit">Login</button>
</div>
{!! Form::close() !!}