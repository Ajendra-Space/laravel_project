<html>
    <head>
        <title>Restaurant App</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <style>
        .navbar-custom {
            background-color: #ff2c2c; /* Custom dark color */
        }
        .navbar-brand-custom {
            font-size: 1.5rem; /* Increase size of brand name */
            color: #ffffff; /* White color for brand name */
        }
        .nav-link-custom {
            color: #ffffff !important; /* White color for nav links */
        }
    </style>
      </head>
    <body>
        <nav class="navbar navbar-expand-sm navbar-custom">
  <a class="navbar-brand navbar-brand-custom" href="/">Resto</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/checklist">List</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/add">Add</a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="#">Search</a>
      </li> -->
      @if(Session::get('user'))
    <li class="nav-item">
        <a class="nav-link" href="#">Welcome {{ Session::get('user') }}</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}"
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
           Logout
        </a>
    </li>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
@else
    <li class="nav-item">
        <a class="nav-link" href="/login">Login</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/register">Register</a>
    </li>
@endif

    </ul>
  </div>
</nav>
        <div>
            @yield('content') 
        </div>
        <div>
            @yield('additional-content')
        </div>
        <footer>
            <!-- Copy right by Resto app Footer add-->
        </footer>
    </body>
</html>