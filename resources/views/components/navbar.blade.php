<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('product.index')}}">Tutte le Scarpe</a>
        </li>
      </ul>
      @auth
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" 
          data-bs-toggle="dropdown" aria-expanded="false">
          {{Auth::user()->name}}
        </a>
        
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="{{route('user.home')}}">Dashboard</a></li>
          <li><a class="dropdown-item" href="{{route('product.create')}}">Create product</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li>
            <form action="{{route('logout')}}">
              @csrf
              <button class="btn" type="submit">Logout</button>
            </form>
          </li>
        </ul>
      </li>
    </ul>
    @else
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link" href="{{route('register')}}">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('login')}}">Login</a>
      </li>
    </ul>
    @endauth
  </div>
</div>
</nav>