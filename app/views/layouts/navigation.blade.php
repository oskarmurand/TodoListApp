<div class="contain-to-grid sticky">
  <nav class="top-bar" data-topbar role="navigation" data-options="sticky_on: small">
    <ul class="title-area">
    <li class="name">
      <h1><a href="#"><i class="fa fa-list fa-inverse"></i> TodoListApp</a></h1>
    </li>
     <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
    <li class="toggle-topbar menu-icon"><a href="#"><span> Menu</span></a></li>
  </ul>

  <section class="top-bar-section">
    <!-- Right Nav Section -->
    <ul class="right">
      <li>
        <a>{{ Auth::check() ? "Welcome, " . Auth::user()->givenname : "Unable to confirm login" }}</a>
      </li>
      @if (Auth::guest())
      <li><a href="register"><i class="fa fa-user-plus fa-inverse"></i> Register</a></li>
      <li><a href="login"><i class="fa fa-user fa-inverse"></i> Login</a></li>
      @else
      <li><a href="logout"><i class="fa fa-power-off fa-inverse"></i> Logout</a></li>
      @endif
    </ul>

    <!-- Left Nav Section -->
    <ul class="left">
    </ul>
  </section>
  </nav>
</div>
