<!-- Fixed navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{route('dashboard')}}">BACKOFFICE</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#" target="_blank">Public Home</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gestion<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li class="dropdown-header">Works</li>
              <li><a href="posts">Liste des works</a></li>
              <li><a href="posts/add/form">Ajouter un works</a></li>
              <li role="separator" class="divider"></li>
            </ul>
          </li>
          <li><a href="{{ route('logout') }} ">Logout</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </nav>