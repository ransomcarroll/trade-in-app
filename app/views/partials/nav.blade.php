<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">GolfMundo Trade-In Management</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            @if(Auth::user())
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="/trades" class="dropdown-toggle" data-toggle="dropdown">Trade-Ins <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="/trades"><span class="glyphicon glyphicon-th-large"></span> All Trade-Ins</a></li>
                            <li><a href="/trades/pending"><span class="glyphicon glyphicon-time"></span> Pending Approval</a></li>
                            <li><a href="/trades/approved"><span class="glyphicon glyphicon-thumbs-up"></span> Approved</a></li>
                            <li class="divider"></li>
                            <li><a href="/trades/deleted"><span class="glyphicon glyphicon-trash"></span> Deleted</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="/clubs" class="dropdown-toggle" data-toggle="dropdown">Clubs <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="/clubs"><span class="glyphicon glyphicon-th-large"></span> All Clubs</a></li>
                            <li><a href="/clubs/new"><span class="glyphicon glyphicon-plus"></span> Add New Club</a></li>
                        </ul>
                    </li>
                </ul>
            @endif
            <ul class="nav navbar-nav navbar-right">
                @if(Auth::user())
                    <li class="dropdown">
                        <a href="/users" class="dropdown-toggle" data-toggle="dropdown">Users <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="/users"><span class="glyphicon glyphicon-th-large"></span> All Users</a></li>
                            <li><a href="/users/new"><span class="glyphicon glyphicon-plus"></span> Add User</a></li>
                        </ul>
                    </li>
                @endif
                @if(Auth::user())
                    <li><a href="/logout">Logout <span class="glyphicon glyphicon-log-out"></span></a></li>
                @else
                    <li><a href="/login">Login <span class="glyphicon glyphicon-log-in"></span></a></li>
                @endif
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>