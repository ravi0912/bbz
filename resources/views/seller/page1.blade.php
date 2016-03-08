


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Product</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" rel="stylesheet" href="style.css" />

    <!--Bootstrap CDN-->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <!--mdl CDN-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.1.1/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.1.1/material.min.js"></script>


    <!--my css file-->
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/sellerPanel1_main.css') }}" />

</head>
<body>

<!--navbar-->
<nav class="navbar">

    <div class="container">
        <div class="brand">
            <div class="brandlogo">brand logo</div>
        </div>

        <div class="navbar_section navbar_section1 dropdown">
            <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">Brand <span class="caret"></span></button>
            <ul class="dropdown-menu">
                <li><a href="#">vishwas</a></li>
                <li><a href="#">vishwas</a></li>
                <li><a href="#">vishwas</a></li>
            </ul>
        </div>

        <div class="navbar_section navbar_section2"><input type="text" class="form-control" style="height:30px;width:370px"></div>

        <div class="navbar_section navbar_section3"><button class="btn logout"><span style="color:#76d7df">Log out</span></button></div>

    </div>

</nav>


<!--side bar-->

<div class="container-fluid">
    <div class="row">

        <div class="col-sm-2">
            <div class="sidebar_wrapper">

                <div class="sidebar list_item_wrapper">
                    <div class="list_item1 list_item"><a href="#contact_info" class="list_item_name">Contact Info</a></div>
                    <div class="list_item2 list_item"><a href="#product_catalog" class="list_item_name">Product Catalog</a></div>
                    <div class="list_item3 list_item"><a href="#collection" class="list_item_name">Collections</a></div>
                    <div class="list_item4 list_item"><a href="#delivery_info" class="list_item_name">Delivery Info</a></div>
                </div>

                <br></br><br>

                <div class="optionbuttons list_item_wrapper">
                    <div class="option_item" style="top:4px;left:3px"><a href="#" class="options"><b>SHOW/HIDE</b></a></div>
                    <div class="option_item" style="top:41px;left:3px"><a href="#" class="options"><b>SELECT RANGE</b></a></div>
                    <div class="option_item" style="top:78px;left:3px"><a href="#" class="options"><b>SELECT ALL</b></a></div>

                </div>

                <br><br>

                <h6><b>FAQs</b></h6>

            </div>
        </div>

        <!--middle section-->

        <div class="col-sm-10">

            <div id="contact_info"></div>

            <div id="product_catalog">
                <div class="table_wrapper">
                    <!--tables-->

                    <table class="table table-hover table-responsive">

                        <thead>
                        <tr>
                            <th></th>
                            <th class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Product ID<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li></li>
                                    <li></li>
                                </ul>
                            </th>
                            <th class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Brand<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li></li>
                                    <li></li>
                                </ul>
                            </th>
                            <th class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Product Series<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li></li>
                                    <li></li>
                                </ul>
                            </th>
                            <th class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Category<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li></li>
                                    <li></li>
                                </ul>
                            </th>
                            <th class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Availability<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li></li>
                                    <li></li>
                                </ul>
                            </th>
                            <th class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Best Price<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li></li>
                                    <li></li>
                                </ul>
                            </th>
                            <th class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Your Price<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li></li>
                                    <li></li>
                                </ul>
                            </th>
                            <th class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Discount%<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li></li>
                                    <li></li>
                                </ul>
                            </th>
                            <th class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Last Updated<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li></li>
                                    <li></li>
                                </ul>
                            </th>
                            <th class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Delivery Location<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li></li>
                                    <li></li>
                                </ul>
                            </th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <td><input type="checkbox" name="name1" />&nbsp;</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="name1" />&nbsp;</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="name1" />&nbsp;</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="name1" />&nbsp;</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="name1" />&nbsp;</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="name1" />&nbsp;</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="name1" />&nbsp;</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="name1" />&nbsp;</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="name1" />&nbsp;</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="name1" />&nbsp;</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="name1" />&nbsp;</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="name1" />&nbsp;</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="name1" />&nbsp;</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                            <td>vyas</td>
                        </tr>

                        </tbody>
                    </table>


                </div>
            </div>

            <div id="collection"></div>
            <div id="delivery_info"></div>

        </div>

    </div>

</div>




<!--script tags-->
<!--Bootstrap submenu library-->
<script src="bootstrap_files/bootstrap-submenu.js"></script>
<!-- my script file-->
<script src="{{ URL::asset('js/sellerPanel_script.js') }}"></script>

</body>
</html>