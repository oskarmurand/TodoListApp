<div class="contain-to-grid sticky">
  <nav class="top-bar" data-topbar role="navigation" data-options="sticky_on: small">
    <ul class="title-area">
    <li class="name">
      <h1><a href="#"><i class="fa fa-list"></i> TodoListApp</a></h1>
    </li>
     <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
    <li class="toggle-topbar"><a href="#"><i class="fa fa-bars fa-2x"></i></a></li>
  </ul>

  <section class="top-bar-section">
    <!-- Right Nav Section -->
    <ul class="right">
      @if (Auth::guest())

      <li><a href="register"><i class="fa fa-user-plus"></i> Register</a></li>
      <li><a href="login"><i class="fa fa-user"></i> Login</a></li>
      @else
      <li>
        <a>{{ Auth::check() ? 'Welcome, <span style="color:#06B294;"> ' . Auth::user()->givenname : "</span>" }}</a>
      </li>
      <li><a href="logout"><i style="color:#06B294;" class="fa fa-power-off"></i> Logout</a></li>
      @endif
    </ul>
  </section>
  </nav>
</div>
