<nav class="navbar navbar-expand navbar-dark bg-dark">
  <a class="navbar-brand" href="#">BLOG</a>
  @if (Auth::check())
			<a class="nav-link ml-auto" href="#">{{ Auth()->user()->name }}</a>
      <a class="nav-link" href="/logout">Logout</a>
  @else
      <a class="nav-link ml-auto" href="/register">Register</a>
      <a class="nav-link ml-auto" href="/login">Login</a>
  @endif
</nav>