@php
  $phone = get_field('phone','options');
  $mail = get_field('mail','options');
  $header_img = option('header_img')['id'];

  $sm = get_field('icons');
@endphp

<header class="header" data-header>
  <div class="container container--fluid">
    <div class="header__wrapper">
      <a class="header__brand-wrapper" href="{{ home_url('/') }}">
        <img class="header__brand" src="{{  get_field('logo', 'options')['url'] }}" alt="Cityclub">
      </a>
      
      <div class="header__extras">
        @include('blocks.lg-pick')
        @include('blocks.hamburger')
      </div>
      <nav class="header__nav nav" data-menu>
        {!! image($header_img, 'full', 'nav__bg') !!}
        <div class="container">
          @if (has_nav_menu('primary_navigation'))
            {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'menu']) !!}
          @endif
          @include('blocks.contact-header')
        </div>
      </nav>
    </div>
  </div>
</header>
