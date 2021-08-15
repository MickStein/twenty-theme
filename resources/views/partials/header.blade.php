<header class="banner">
    <nav class="navbar navbar-expand-lg bg-dark">
      <a class="brand text-uppercase text-white" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            @if (has_nav_menu('primary_navigation'))
              {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
            @endif
          </li>
        </ul>
      </div>
    </nav>
</header>
