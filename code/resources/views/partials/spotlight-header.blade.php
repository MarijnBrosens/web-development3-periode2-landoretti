<header class="spotlight-header" style="background-image: url({{$auction->image_artwork}});">
    <div class="container">
        <article class="spotlight-header__info">
            <h1 class="spotlight-header__info--title">{{$auction->title}}</h1>
            <p  class="spotlight-header__info--text">
                {{
                    str_limit(
                        $auction->description,
                        $limit = 158,
                        $end = '...'
                    )
                }}
            </p>
                <span class="spotlight-header__info--price-text">
                    {{ trans('art.price') }}: <span class="spotlight-header__info--price">&euro;{{$auction->current_price}}</span>
                </span>
            <a href="{{ route( 'show', $parameters = array($auction->slug), $attributes = array() ) }}" class="spotlight-header__info--btn">
                {{ trans('art.visit-auction') }} <i class="sprite sprite-banner-info-arrow-right"></i>
            </a>

        </article>
    </div>
</header>