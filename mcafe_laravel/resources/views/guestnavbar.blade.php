<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Machine Cafe Astrid</a>
        </div>
          <ul class="nav navbar-nav">
            {{-- <li><a href="/guest">Guest</a></li> --}}
            
        
@guest
    <a href="{{ route('login') }}">Login</a>
    <a href="{{ route('register') }}">Register</a>
    </ul>
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

