<header class="navbar navbar-inverse navbar-fixed-top" role="banner">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"><img src="{{ asset('assets/img/logo.png') }}" alt="Basica"></a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="{{ route('homepage') }}">Home</a></li>
                <li><a href="{{ route('portfolio.index') }}">Portfolio</a></li>
                <li><a href="{{ route('blog.index') }}">Blog</a></li>
                <li><a href="contact-us.html">Contact</a></li>
            </ul>
        </div>
    </div>
</header>