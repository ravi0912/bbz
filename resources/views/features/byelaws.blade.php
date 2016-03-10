@extends('app')

@section('content')

    <center class="row">
        <div class="col-lg-7 text-center blog_wrap" style=" position: absolute;left: 100px;top: 100px;">
            <table class="table table-bordered">
                <tr>
                    <td><b>City/State</b></td>
                    <td><b><a href="">Document Description</a></b></td>
                    <td><b>Issuing Authority</b></td>
                </tr>

                @foreach($bylaws as $bylaw)
                    <tr>
                        <td>{{ $bylaw->city }}</td>
                        <td><a href="{{ $bylaw->link }}" target="_blank">{{ $bylaw->description }}</a></td>
                        <td>{{ $bylaw->issuing_authority }}</td>
                    </tr>
                @endforeach

            </table>
        </div>
    </center>

@stop