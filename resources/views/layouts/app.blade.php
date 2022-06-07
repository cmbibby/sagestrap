<a class="visually-hidden-focusable" href="#main">
  {{ __('Skip to content') }}
</a>

@include('sections.header')
<div class="wrapper">
  <div class="container">
    <div class="row">
      <main id="main" class="main">
        @yield('content')
      </main>
      @hasSection('sidebar')
      <aside class="sidebar">
        @yield('sidebar')
      </aside>
      @endif
    </div>
  </div>
</div>
@include('sections.footer')
