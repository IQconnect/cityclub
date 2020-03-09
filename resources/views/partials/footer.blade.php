@php
  $contact = option('contact');
  $info = option('info');
  $headquarters = option('headquarters');
  $branch = option('branch');
  $facility = option('facility');
@endphp

<footer class="footer">
  <div class="container">
    <div class="footer_title">
    <p>Kontakt</p>
    </div>
    <div class="footer__contact">
      <div class="footer__text">
      {!! option("contact") !!}
      </div>
      <nav class="footer__nav" data-nav>
        @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'header__menu']) !!}
        @endif
      </nav>
      <div class="footer__prize">
        <img src="{{ option('prize')['url'] }}" alt="{{ option('prize')['alt'] }}">
      </div>
    </div>
    <div class="footer__other">

      <div class="footer__copyright text text--bold text--white">
        {{ option("copyright") }}
        <div class="footer__logo">
          <a href="http://iqconnect.pl">
            <img src="{{ option('iqlogo')['url'] }}" alt="{{ option('iqlogo')['alt'] }}">
          </a>
        </div>
    </div>
  </div>
</footer>
