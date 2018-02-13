<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Machine Cafe Astrid</a>
        </div>
          <ul class="nav navbar-nav">
            <li class="active"><a href="/bienvenue">Home</a></li>
            <li><a href="/1">Boissons</a></li>
            <li><a href="/2">Ingredients</a></li>
            <li><a href="/3">Monnaie</a></li>
            <li><a href="/4">Recettes</a></li>
            <li><a href="/5">Ventes</a></li>
          </ul>
    {{-- <ul class="nav navbar-nav navbar-right">
      <li><a href="/6"><span class="glyphicon glyphicon-user"></span>Deconnection</a></li>
   
    </ul> --}}

@guest
    <li><a href="{{ route('login') }}">Login</a></li>
    <li><a href="{{ route('register') }}">Register</a></li>
@else
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
        {{ Auth::user()->name }} <span class="caret"></span>
      </a>

      <ul class="dropdown-menu">
        <li>
          <a href="{{ route('logout') }}"
          onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
          Logout
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          {{ csrf_field() }}
        </form>
      </li>
    </ul>
  </li>
@endguest
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}"></script>
</div>
</nav>

