
@extends('app')

@section('content')

        <!--mdl CDN-->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.1.1/material.indigo-pink.min.css">
<script defer src="https://code.getmdl.io/1.1.1/material.min.js"></script>

<!--font awesome-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">



<!--my css file-->
<link type="text/css" rel="stylesheet" href="{{ URL::asset('css/new_webpage_main.css') }} " />

<div>
    <!--nav bar -->
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="#" class="navbar-brand" style="#ff3831"><img src="http://buildblockz.com/images/logo/BBZlogo/bbzlogo_white.svg" alt="0" height="50" width="50"/></a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <!--mdl expandable fields-->
                    <form action="#">
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
                            <label class="mdl-button mdl-js-button mdl-button--icon" for="search">
                                <i class="material-icons"  style="color:#fff">search</i>
                            </label>
                            <div class="mdl-textfield__expandable-holder">
                                <input class="mdl-textfield__input" type="text" id="search">
                                <label class="mdl-textfield__label" for="search">Search</label>
                            </div>
                        </div>
                    </form>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="material-icons" id="settings">settings</i>
                    </a>
                    <ul class="dropdown-menu" role="settings_menu" aria-labelledby="menu">
                        <li role="presentation"><a href="#" role="menu-item">item1</a></li>
                        <li role="presentation"><a href="#" role="menu-item">item2</a></li>
                        <li role="presentation"><a href="#" role="menu-item">item3</a></li>
                        <li role="presentation"><a href="#" role="menu-item">item4</a></li>
                    </ul>
                </li>
                <li><a href="#" style="margin-top:10px;color:#fff">Vishwas Vyas</a></li>
                <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle"><img src="images/baby.jpg" alt="user id" style="height:50px;width:50px;border-radius:100%"/></a>
                    <ul class="dropdown-menu" role="logout_menu" aria-labelledby="menu">
                        <li role="presentation"><a href="#" role="menu-item">Profile</a></li>
                        <li role="presentation"><a href="#" role="menu-item">Connection</a></li>
                        <li role="presentation"><a href="#" role="menu-item">Change Password</a></li>
                        <hr>
                        <li role="presentation"><a href="#" role="menu-item">Log Out</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</div>

<div class="container-fluid">
    <!--grids-->
    <div class="row">
        <div class="col-md-2">
            <!--Leftmost section-->
            <div class="left_section">
                <img src="images/autumn.jpg" alt="0" class="thumbnail"
                     height="200px" width="100%" style="margin-left:-5px"/>
            </div>
            <br>
            <div>
                <strong>About</strong><br>
                <span style="color:#898989">If you use Internet Explorer and Microsoft Office OneNote 2007 on the same computer, you can use the Send to OneNote button to quickly copy some or all of the information on a Web page to your notes.</span>
            </div>
            <hr>
            <div>
                <strong>Photos</strong><br>
                <div class="row" style="margin-left:-20px">
                    <div class="col-sm-4">
                        <img src="images/autumn.jpg" alt="autumn" class="thumbnail" height="70px" width="70px"/>
                    </div>
                    <div class="col-sm-4">
                        <img src="images/autumn.jpg" class="thumbnail" alt="0" height="70px" width="70px"/>
                    </div>
                    <div class="col-sm-4">
                        <img src="images/autumn.jpg" class="thumbnail" alt="0" height="70px" width="70px"/>
                    </div>
                </div>
            </div>
            <hr>
            <div>
                <strong>Contact Details</strong><br>
                <span style="color:#898989">A-765,Palatan Bazar,<br>Guwahati,781039<br>Ph. +91-80110010</span>
            </div>


        </div>

        <div class="col-md-5" style="margin-top:-3px">
            <!--middle section-->
            <div class="middle_section_wrapper">
                <!--company name-->
                <div>
                    <p><span style="font-size:25px">Sani Steels Pvt. Ltd.</span><br><small style="margin-left:118px;position:absolute;top:18px;font-size:11px;color:#898989">Bussiness Guwahati</small></p>

                </div>

                <!--tabs worspace/take an option-->
                <div>

                    <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
                        <div class="mdl-tabs__tab-bar">
                            <a href="#workspace" class="mdl-tabs__tab is-active" style="margin-left:-205px">WORKSPACE</a>
                            <a href="#takeanoption" class="mdl-tabs__tab">TAKE AN OPTION</a>

                        </div>
                        <!--mdl panel workspace/take an option-->
                        <div class="mdl-tabs__panel is-active" id="workspace">
                            <div class="workspace_wrapper">

                                <div class="file_input">
                                    <form style="margin-top:76px">
                                        <span style="margin-left:10px;font-weight:bold">File/Image</span><input type="file" value="Browse" style="margin-left:90px;margin-top:-22px"/>
                                    </form>
                                </div>

                                <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect" style="margin-left:405px;margin-top:5px">Discuss</button>

                                <div id="outer_wrapper">

                                    <div id="inner_wrapper">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <img src="images/baby.jpg" alt="0" height="50px" width="50px" style="border-radius:100%;margin-left:5px"/>
                                            </div>
                                            <div class="col-md-10">
                                                <div class="inner_right_wrapper">
                                                    <p style="line-height:18px;margin-left:-15px;margin-top:10px"><span style="font-weight:bold;font-size:22px">Karan Verma</span><br>
                                                        <span style="font-size:15px;font-style:italic">Builder,Jaipur</span></p>
                                                </div>
                                            </div>
                                            <span style="margin-left:430px;font-style:italic"><b>3hours ago</b></span>
                                            <div class="col-md-offset-2 col-md-10 content" style="word-wrap:break-word;">
                                                sdfdfdsfirefdnvcdnvdfifdnvnifdvnfvncvjdfivfi.sdfdfdsfirefdnvcdnvdfifdnvnifdvnfvncvjdfivfi.sdfdfdsfirefdnvcdnvdfifdnvnifdvnfvncvjdfivfi.sdfdfdsfirefdnvcdnvdfifdnvnifdvnfvncvjdfivfi.sdfdfdsfirefdnvcdnvdfifdnvnifdvnfvncvjdfivfi.sdfdfdsffdnvnifdvnfvncvjdfivfi
                                            </div>
                                            <div class="col-md-offset-2 col-md-10">

                                                <div style="width:200px;height:20px;float:left;margin-left:-5px;margin-top:3px;position:relative;font-weight:bold">
                                                    <div style="position:absolute">78 <a href="#" class="icon"><i class="fa fa-thumbs-up"></i></a></div>
                                                    <div style="position:absolute;margin-left:50px">16 <a href="#" class="icon"><i class="fa fa-envelope"></i></a></div>
                                                    <div style="position:absolute;margin-left:120px">9 <a href="#" class="icon"><i class="fa fa-share-alt"></i></a></div>
                                                </div>
                                                <div style="width:100px;height:20px;float:right;margin-right:-15px;font-style:italic">
                                                    <a href="#"><b>Read later</b></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div id="inner_wrapper">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <img src="images/baby.jpg" alt="0" height="50px" width="50px" style="border-radius:100%;margin-left:5px"/>
                                            </div>
                                            <div class="col-md-10">
                                                <div class="inner_right_wrapper">
                                                    <p style="line-height:18px;margin-left:-15px;margin-top:10px"><span style="font-weight:bold;font-size:22px">Karan Verma</span><br>
                                                        <span style="font-size:15px;font-style:italic">Builder,Jaipur</span></p>
                                                </div>
                                            </div>
                                            <span style="margin-left:430px;font-style:italic"><b>3hours ago</b></span>
                                            <div class="col-md-offset-2 col-md-10 content" style="word-wrap:break-word;">
                                                sdfdfdsfirefdnvcdnvdfifdnvnifdvnfvncvjdfivfi.sdfdfdsfirefdnvcdnvdfifdnvnifdvnfvncvjdfivfi.sdfdfdsfirefdnvcdnvdfifdnvnifdvnfvncvjdfivfi.sdfdfdsfirefdnvcdnvdfifdnvnifdvnfvncvjdfivfi.sdfdfdsfirefdnvcdnvdfifdnvnifdvnfvncvjdfivfi.sdfdfdsffdnvnifdvnfvncvjdfivfi
                                            </div>
                                            <div class="col-md-offset-2 col-md-10">

                                                <div style="width:200px;height:20px;float:left;margin-left:-5px;margin-top:3px;position:relative;font-weight:bold">
                                                    <div style="position:absolute">78 <a href="#" class="icon"><i class="fa fa-thumbs-up"></i></a></div>
                                                    <div style="position:absolute;margin-left:50px">16 <a href="#" class="icon"><i class="fa fa-envelope"></i></a></div>
                                                    <div style="position:absolute;margin-left:120px">9 <a href="#" class="icon"><i class="fa fa-share-alt"></i></a></div>
                                                </div>
                                                <div style="width:100px;height:20px;float:right;margin-right:-15px;font-style:italic">
                                                    <a href="#"><b>Read later</b></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <div class="col-md-4">
        </div>

        <div class="col-md-1">
        </div>
    </div>

</div>
<!--script tags-->
<!--Bootstrap submenu library-->
<script src="bootstrap_files/bootstrap-submenu.js"></script>
<!-- my script file-->
<script src="product_script.js"></script>



        <script type="text/javascript" src ="{{ URL::asset('js/status_comment.js') }} "></script>
@stop