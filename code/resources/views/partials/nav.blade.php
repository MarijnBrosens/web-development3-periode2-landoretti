<div id="header">
    <div class="nav-sub">
        <div class="container">
            <a href="/"><i class="sprite sprite-nav-logo logo"></i></a>
            <div class="nav nav-lined clearfix">
                <ul>
                    <li><a href="/watchlist" ><i class="sprite sprite-nav-menu"></i>{{ trans('nav.watchlist') }}</a></li>
                    <li><a href="/profile"><i class="sprite sprite-nav-user"></i>{{ trans('nav.profile') }}</a></li>
                    <li><a href="/login">{{ trans('nav.login') }}</a></li>
                </ul>

                <div class="search">
                    <input type="search" placeholder="Search">
                    <button type="submit"><i class="sprite sprite-nav-search"></i></button>
                </div>

            </div>
        </div>
    </div>

    <div class="nav-main">
        <div class="container">
            <div class="nav">
                <ul>
                    <li><a href="/" >{{ trans('nav.home') }}</a></li>
                    <li><a href="/art">{{ trans('nav.art') }}</a></li>
                    <li><a href="/isearch">{{ trans('nav.isearch') }}</a></li>
                    <li><a href="/auctions">{{ trans('nav.myauctions') }}</a></li>
                    <li><a href="/bids">{{ trans('nav.mybids') }}</a></li>
                    <li><a href="/contact">{{ trans('nav.contact') }}</a></li>
                </ul>

                <ul class="locales">
                    <li><a href="/nl">NL</a></li>
                    <li><a href="/fr">FR</a></li>
                    <li><a href="/en">EN</a></li>
                </ul>
            </div>
        </div>
    </div>

</div>