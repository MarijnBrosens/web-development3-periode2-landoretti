<div id="footer">
    <div class="container">
        <a href="/"><i class="sprite sprite-nav-logo logo"></i></a>
    </div>
    <div class="container">
        <div class="linkable">
            <div class="row">
                <div class="col col-3">
                    <h3>{{ trans('footer.help') }}</h3>
                    @if (Auth::check())
                        <a href="#">Logout</a>
                    @else
                        <a href="#">Login</a>
                        <a href="#">Register</a>
                        <a href="#">Forgot password</a>
                    @endif
                    <h3>{{ trans('footer.help') }}</h3>
                    <a href="#">Terms of Service</a>
                    <a href="#">Privacy Policy</a>
                    {!! link_to_route('faq', $title = 'FAQ' , $parameters = array(), $attributes = array()) !!}
                    <a href="#">Contact Us</a>
                    <a href="#">About Us</a>
                    <h3>{{ trans('footer.languages') }}</h3>
                    <a href="#">English</a>
                <!-- <a href="#">Français</a> -->
                    <a href="#">Nederlands</a>
                </div>
                <div class="col col-3">
                    <h3>{{ trans('footer.style') }}</h3>
                    <a href="#">Abstract</a>
                    <a href="#">African American</a>
                    <a href="#">Asian Contemporary</a>
                    <a href="#">Conceptual</a>
                    <a href="#">Contemporary</a>
                    <a href="#">Emergin Artists</a>
                    <a href="#">Figurative</a>
                    <a href="#">Middle Eastern Contemporary</a>
                    <a href="#">Minimalism</a>
                    <a href="#">Modern</a>
                    <a href="#">Pop</a>
                    <a href="#">Urban</a>
                    <a href="#">Vintage Photographs</a>
                    <h3>{{ trans('footer.style') }}</h3>
                    <a href="#">Design</a>
                    <a href="#">Paintings and Works on Paper</a>
                    <a href="#">Photographs</a>
                    <a href="#">Prints and Multiples</a>
                    <a href="#">Sculpture</a>
                </div>
                <div class="col col-3">
                    <h3>{{ trans('footer.price') }}</h3>
                    <a href="#">Up to 5,000</a>
                    <a href="#">5,000-10,000</a>
                    <a href="#">25,000-50,000</a>
                    <a href="#">50,000-100,000</a>
                    <a href="#">Above</a>
                    <h3>{{ trans('footer.era') }}</h3>
                    <a href="#">Pre-War</a>
                    <a href="#">1940s-1950s</a>
                    <a href="#">1960s-1980s</a>
                    <a href="#">1990s-Present</a>
                    <h3>{{ trans('footer.endings') }}</h3>
                    <a href="#">Ending this week</a>
                    <a href="#">Newly Listed</a>
                    <a href="#">Purchase Now</a>
                </div>
                <div class="col col-3 hr-left">

                    <h3>{{ trans('footer.get-what-you-need') }}.</h3>

                    <div class="search">
                        {!! Form::open(array('route' => 'search', 'method' => 'post' ,'id' => 'search-form')) !!}
                        <input type="search" placeholder="Search" id="search" name="search">
                        <button type="submit"><i class="sprite sprite-nav-search"></i></button>
                        {!! Form::close() !!}
                    </div>

                    <h3>CONTACT</h3>
                    <p>Landoretti ART</p>
                    <p>Straatnaam xxx</p>
                    <p>xxxx, Oostende</p>

                    <div class="contact">
                        <p><i class="sprite sprite-footer-phone"></i> +xx (0)x xxx xx xx </p>
                        <p><i class="sprite sprite-footer-email"></i> <a class="link--inline" href="#">info@landorettiart.com</a></p>
                    </div>

                    <i class="sprite sprite-footer-social"></i>
                </div>

            </div>
        </div>
    </div>
    <div class="clearfix">
        <div class="nav-main">
            <div class="container">
                <div class="nav">
                    <ul>
                        <li>{!! link_to_route('home', $title = trans('nav.home') , $parameters = array(), $attributes = array()) !!}</li>
                        <li>{!! link_to_route('art', $title = trans('nav.art') , $parameters = array(), $attributes = array()) !!}</li>
                        <li><a href="/isearch">{{ trans('nav.isearch') }}</a></li>

                        @if(Auth::check())

                            <li>{!! link_to_route('myAuctions', $title = trans('nav.myauctions') , $parameters = array(), $attributes = array()) !!}</li>
                            <li>{!! link_to_route('myBids', $title = trans('nav.mybids') , $parameters = array(), $attributes = array()) !!}</li>
                        @endif

                        <li>{!! link_to_route('contact', $title = trans('nav.contact') , $parameters = array(), $attributes = array()) !!}</li>

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

</div>