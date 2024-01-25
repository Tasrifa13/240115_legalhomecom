    <!-- navbar -->
    <div class="container-fluid bg-dark">
      <div class="row">
        <div class="col-6">
          <nav class="navbar navbar-expand-lg bg-light fixed-top py-3 custom-navbar" style="#">
            <a href="index.html" class="navbar-brand" style="margin-left: 30px;">Legal Home</a>
            <button class="navbar-toggler button" data-bs-toggle="collapse" data-bs-target="#navmenu">
              <span class="navbar-toggler-icon"></span> 
            </button> 
        <div class="anjay collapse navbar-collapse" id="navmenu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('about') }}">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('legality') }}">Legality</a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('register') }}" class="nav-link">Register</a>
                </li>
                <li class="nav-item button">
                <a href="{{ route('login') }}" class="nav-link button">Login</a>
                </li>
            </ul>
        </div>
      </div>
    </div>
    </nav>
  </div>