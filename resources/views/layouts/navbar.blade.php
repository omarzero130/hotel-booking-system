<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">HBS Website</a>
        </div>

        @if ( auth()->check() )
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="/"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-users"></i> Clients <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/clients/create"><i class="fa fa-user-plus"></i> Add Client</a></li>
                        <li><a href="/clients/"><i class="fa fa-table"></i> View Clients</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-hotel"></i> Rooms <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/rooms/create"><i class="fa fa-plus-square-o"></i> Add Room</a></li>
                        <li><a href="/rooms/"><i class="fa fa-table"></i> View Rooms</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="fa fa-calendar"></span> Bookings <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/booking/create"><i class="fa fa-calendar-plus-o"></i> Book Room</a></li>
                        <li><a href="/booking"><i class="fa fa-calendar-check-o"></i> View Bookings</a></li>
                        <li><a href="/bookings/canceled"><i class="fa fa-calendar-check-o"></i> Canceled Bookings</a></li>
                    </ul>
                </li>
            </ul>

            @yield('search')

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> {{   auth()->user()->name }} <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/user"><i class="fa fa-user-circle-o"></i> Profile</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="/logout"><i class="fa fa-sign-out"></i> Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
        @endif
    </div><!-- /.container-fluid -->
</nav>