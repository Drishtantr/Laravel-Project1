<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">Apple</a>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="{{Request::is('/') ? 'nav-item active':'nav-item'}}">
        <a class="nav-link" href="/">Home</a>
      </li>
      <li class="{{Request::is('about') ? 'nav-item active':'nav-item'}}">
        <a class="nav-link" href="/about">About</a>
      </li>
      <li class="{{Request::is('contact') ? 'nav-item active':'nav-item'}}">
        <a class="nav-link" href="/contact">Contact</a>
      </li>
    </ul>
  </div>
</nav>