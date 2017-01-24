<header class="header">
    <div class="container-fluid">
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ url('/') }}"><i class="material-icons">warning</i> <span style="font-weight: bold;">Toxick</span></a>
                </div>
                <div class="navbar-collapse collapse navbar-responsive-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="">Create Account</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#LoginModal"><i class="material-icons">lock</i> Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div><!-- end container -->
</header><!-- end header -->