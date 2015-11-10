<nav class="navbar navbar-default navbar-fixed-top navbar-inverse" id="home-nav">
    <div class="container-fluid">
        <div class="col-xs-6 col-md-4">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">BBz</a>
            </div>
        </div>

        @if (Auth::guest())
            <div class="col-xs-6 col-md-4">
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('/') }}">Blog</a></li>
                        <li><a href="{{ url('/') }}">About Us</a></li>
                        <li><a href="{{ url('/') }}">Contact Us</a></li>
                        <li id="btn-nav"><a href="{{ url('/auth/login') }}" class="btn btn-default btn-sm">Login</a></li>
                    </ul>

                </div>
            </div>
        @else
            <div class="col-xs-6 col-md-4">

                <form class="navbar-form navbar-right" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>

                </form>
            </div>
            <div class="col-xs-6 col-md-4">
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><span class="glyphicon glyphicon-user"></span></a></li>
                        <li>
                            <a href="#"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span></a>
                            <!--<span class="badge badge-notify">3</span>-->
                        </li>
                        <li><a href="#"><span class="glyphicon glyphicon-bell" aria-hidden="true"></span></a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ auth()->user()->name }} <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Privacy & Setting</a></li>
                                <li><a href="#">Job Posting</a></li>
                                <li><a href="#">Help Center</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>

        @endif
    </div>
</nav>