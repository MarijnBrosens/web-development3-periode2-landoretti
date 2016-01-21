<div id="header">
    <div class="nav-sub">
        <div class="container">
            {!! link_to_route('home', '' , array(), ['class' => 'sprite sprite-nav-logo logo']) !!}
            <div class="nav nav-lined clearfix">
                <ul>
                    @if(Auth::check())
                        <li><a href="/watchlist" ><i class="sprite sprite-nav-menu"></i>{{ trans('nav.watchlist') }}</a></li>
                        <li><a href="/profile"><i class="sprite sprite-nav-user"></i>{{ trans('nav.profile') }}</a></li>
                        <li><a href="/auth/logout">{{ trans('nav.logout') }}</a></li>
                    @else
                        <li>{!! link_to_route('getRegister', $title = trans('nav.register') , $parameters = array(), $attributes = array()) !!}</li>
                        <li><a href="#" id="login">{{ trans('nav.login') }}</a></li>
                    @endif

                </ul>

                @if(!Auth::check())

                    {!! Form::open(array('route' => 'postLogin', 'method' => 'post' ,'id' => 'login-form')) !!}

                        <input id="login-form__user" type="text" name="email" value="{{ old('email') }}" placeholder="{{ trans('nav.user') }}">
                        <input id="login-form__password" type="password" name="password" id="password" placeholder="{{ trans('nav.password') }}">
                        <button id="login-form__submit" type="submit"><i class="sprite sprite sprite-detail-visitauction-arrow"></i></button>
                    {!! Form::close() !!}

                @endif

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
                    <li>{!! link_to_route('home', $title = trans('nav.home') , $parameters = array(), $attributes = array()) !!}</li>
                    <li>{!! link_to_route('art', $title = trans('nav.art') , $parameters = array(), $attributes = array()) !!}</li>
                    <li><a href="/isearch">{{ trans('nav.isearch') }}</a></li>

                    @if(Auth::check())

                        <li>{!! link_to_route('myAuctions', $title = trans('nav.myauctions') , $parameters = array(), $attributes = array()) !!}</li>
                        <li><a href="/bids">{{ trans('nav.mybids') }}</a></li>
                    @endif

                    <li><a href="/contact">{{ trans('nav.contact') }}</a></li>

                </ul>

                <ul class="locales">
                    <li><a class="{!! Config::get('app.locale') == 'nl' ? 'active' : '' !!}" href="/nl">NL</a></li>
                    <!-- <li><a class="{!! Config::get('app.locale') == 'fr' ? 'active' : '' !!}" href="/fr">FR</a></li> -->
                    <li><a class="{!! Config::get('app.locale') == 'en' ? 'active' : '' !!}" href="/en">EN</a></li>
                </ul>

            </div>
        </div>
    </div>

</div>