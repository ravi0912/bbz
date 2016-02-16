@extends('app')

@section('content')
    <br><br><br><br><br>





        <!--mdl CDN-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://code.getmdl.io/1.1.1/material.indigo-pink.min.css">
        <script defer src="https://code.getmdl.io/1.1.1/material.min.js"></script>


        <!--my css file-->
        <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/createPage.css') }}" />

    <div class="container">
        <div class="popup_wrapper">
            <div class="row">
                @foreach($category as $c)
                    <div class="col-md-4">
                        <div class="option_wrapper" id="option_wrapper">
                            <div class="option_inner_wrapper" data-toggle="modal" data-target="#option1">9085855947
                                <div class="option" id="option">
                                    {{ $c->page_category  }}
                                    {{--<i class="material-icons" style="margin:35px;font-size:40px">add</i>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!--modal contents-->
    <div class="container-fluid">
        <!--modal 1(option1)-->
        <div id="option1" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!--modal1 content-->
                <div class="modal-content" id="page_form">

                </div>
            </div>
        </div>

    </div>
    <script type="text/javascript">
        document.getElementById('option_wrapper').onclick = function() {
            //alert(this.innerHTML);
            var domain = window.location.host;
            $.get('http://'+domain+'/showCreatePageForm', {
                id: 1
            }, function (markup) {
                $("#page_form").html(markup);
            });
        };
    </script>
@stop