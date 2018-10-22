      <div class="nav-scroller">
        <nav class="nav">
          <a class="text-muted" href="/">Home</a>
          @if(Auth::check())
          <a class="text-muted" href="/posts/create">Kreiraj objavu</a>
          @endif
           @if(!Auth::check())
          <a class="text-muted" href="/register">Registracija</a>
          <a class="text-muted" href="/login">Prijava</a>
          @endif
          @if(Auth::check())
          	<a class="userLoggedIn" href="#">{{ Auth::user()->name }}</a>
          @endif
        
        </nav>
      </div>