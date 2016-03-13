@extends('app')

@section('content')
    <br><br><br><br><br>
    A mail from Buildblockz Team has been sent to your registered email id in buildblockz.<br> Please verify it!
    or click to regenerate verification mail : <a href="{{url('/emailVerificationNotify')}}">Regenerate</a> .
@stop