<header class="spotlight-header" style="background-image: url(http://www.fillmurray.com/g/1920/800);">
    <div class="container">
        <article class="spotlight-header__info">
            <h1 class="spotlight-header__info--title">Lorum Ipsum</h1>
            <p  class="spotlight-header__info--text">
                {{
                    str_limit(
                        "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. magnis dis parturient montes, nascetur ridiculus mussdfsdfsdfsdf",
                        $limit = 158,
                        $end = '...'
                    )
                }}
            </p>
                <span class="spotlight-header__info--price-text">
                    {{ trans('art.price') }}: <span class="spotlight-header__info--price">&euro;320</span>
                </span>
            <a href="#" class="spotlight-header__info--btn">
                {{ trans('art.visit-auction') }} <i class="sprite sprite-banner-info-arrow-right"></i>
            </a>

        </article>
    </div>
</header>