


<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
    <a class="navbar-brand" href="#">{{ config('app.name') }}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link @if(Request::route()->getName()=='app_home') active @endif" aria-current="page" href="{{ route('app_home') }}">Home </a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if(Request::route()->getName()=='app_show') active @endif" aria-current="page"  href="{{  route('app_show')}}">Details</a>
        </li>

      </ul>
    </div>
    <div class="dropdown">
        <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Mon compte
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="{{ route('login') }}">login</a>
          <a class="dropdown-item" href="{{ route('register') }}">register</a>

        </div>
      </div>
  </nav>
