@php
    $hero = $data['hero'];
    $content = option("contact-header");
    $title = option("upper");
    $eventurl = option("eventurl");
    $eventtext = option("eventtext");
    $logo = get_field('logo', 'options')['url']
@endphp

@if($hero)
<section class="hero">
    @foreach ($hero as $item)
    @php
        $img = $item['img'];
    @endphp
    <div class="hero__cell">
        {!! image($img['ID'], 'full', 'hero__image') !!}
    </div>
    @endforeach
    <div class="hero__content">
        @if ($title)
            <h2 class="hero__title title">
                {!! $title !!}
            </h2>
        @endif
        @if ($logo)
            <div class="hero__logowrapper">
                <img class="hero__logo" src="{{ $logo }}" alt="Cityclub">
            </div>
        @endif
        @if($content)
            <div class="hero__text subtitle">
                {!! $content !!}
                <a data-fancybox data-type="iframe" class="button button--buttonbg" data-src= {!!$eventurl !!}>{!! $eventtext !!}</a>
            </div>
        @endif
    </div>
</section>

@endif
