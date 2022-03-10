  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">BlogApp</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('posts.create') }}">Inserisci un articolo</a>
          </li>
          @auth

          <li class="nav-item">
            <a class="nav-link" href="{{ route('posts.index') }}">I miei posts</a>
          </li>

          @endauth
          @guest
          <li class="nav-item">
            <a class="nav-link" href="/login">Login</a>
          </li>

          @endguest
          @auth
          <li class="nav-item">
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a href="{{ route('logout') }}"  onclick="event.preventDefault();this.closest('form').submit();" class="nav-link">
             Logout
            </a>
        </form>
    </li>
          @endauth

        </ul>
        <form class="d-flex" action="{{ route('results') }}" method="get">
            @csrf
          <input class="form-control me-2" type="search" placeholder="Cerca..." aria-label="Search" name="cerca">
          <button class="btn btn-outline-success" type="submit">Cerca</button>
        </form>
      </div>
    </div>
  </nav>
