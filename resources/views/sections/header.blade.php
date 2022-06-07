<header class="wrapper-navbar">
  <nav id="main-nav" class="navbar navbar-expand-md navbar-light bg-light" aria-label="Main navigation">
    <div class="container">
      {!! $customLogo !!}
      <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
        @if (has_nav_menu('primary_navigation')) {!!
        wp_nav_menu($primaryNavigation) !!} @endif
      </div>
    </div>
  </nav>
</header>
