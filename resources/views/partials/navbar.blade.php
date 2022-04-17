<nav class="navbar navbar-expand-lg navbar-light fixed-top "style="background-color:white;font-weight:bold;">
  <div class="container">
    <a class="navbar-brand" href="#">Post Worlds</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link @if($title=='MFL | Home') active @endif" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if($title=='MFL | Blog') active @endif" aria-current="page" href="/blog">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if($title=='MFL | Categories') active @endif" aria-current="page" href="/categories">Categories</a>
        </li>
      </ul>
      
      <ul class="navbar-nav ms-auto">
        @auth

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-person"> </i>{{ auth()->user()->name }} 
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> Dashboard</a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <form action="/logout"method="post">
                @csrf
                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout </button>
              </form>
            </li>
          </ul>
        </li>

        @else
        <a href="/login"class="nav-link @if($title=='MFL | Login') active @endif"><li class="nav-item">Login  <i class="bi bi-person-plus"></i> </li></a>

        @endauth 
      </ul>
    </div>
  </div>
</nav>
<div class="space mt-5">
  
</div>