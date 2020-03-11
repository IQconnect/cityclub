@php
      $fb = get_field('facebook','option');
@endphp
@if ($fb)
    <div class="lg-pick">
        <a class="lg-pick__wrapper text" href="{!! $fb !!}">
            <i class="fab fa-facebook-f"></i>
        </a>
    </div>
@endif
