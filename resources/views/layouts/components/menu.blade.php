@php

$menu = $data['categorymenu'];
@endphp

<section class="section">
  <div class="container">
    @if($data['titlemenu'])
		<h3 class="menu__title">
			{{ $data['titlemenu'] }}
		</h3>
    @endif
    <div class="menu">
		@foreach ($menu as $cate)
			@php
			$cat_id = (int) $cate;
			$galleryName = rand(1, 999);
			$category = get_term( $cat_id, 'category' );
			$img= get_field('thumbnail', $category);
			$page= get_field('page', $category);
			$cat_name= get_cat_name($cate);
      	@endphp
    	<div class="menu__category">
        	<a  data-fancybox="gallery{{$galleryName}}" href="{{ $page['url'] }}">
				<img class="menu__image" src="{{ $img['sizes']['medium'] }}">
				<p class="menu__catname">{!! $cat_name !!}</p>
			</a>
        </div>
      @endforeach
    </div>
  </div>
</section>
