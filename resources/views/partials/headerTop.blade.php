<!-- TOP NAVIGATION -->
<div class="top-header">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
            	<span class="aux-text hidden-xs">

                    <ul class="meta-info-cells v4 float-wrapper">
                        <li>
                            <i class="fa fa-phone"></i>
                            <a href="{{ url('/home#kontakti') }}">{{$adrese->tel1}}</a>

                        </li>
                        <li>
                            <i class="fa fa-envelope"></i>
                            <a href="{{ url('/home#kontakti') }}">{{$adrese->epasts}}</a>
                        </li>
                        <li>
                            <i class="fa fa-map-marker"></i>
                            <a href="{{ url('/home#kontakti') }}">{{$adrese->adrese}}</a>
                        </li>
                    </ul>
                </span>
                <nav class="top-header-menu">
                    <ul class="top-menu">
                        @guest

                        <li><a href="{{ url('/login') }}">Pieteikties</a></li>
                        <li><a href="{{ url('/register') }}">Reģistrēties</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <span>{{ Auth::user()->name }} </span>
                                </a>

                                <ul class="dropdown-menu sub-menu" role="menu">

                                    @if (Auth::user()->irAdmin())
                                        <li>
                                            <a href="{{ url('/admin') }}">
                                                <i class="fa fa-btn fa-address-card"></i> Vadības panelis
                                            </a>
                                        </li>
                                    @endif
                                    <li>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="fa fa-btn fa-sign-out"></i> Atteikties
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>

                                    <li><a href="{{ route('logout') }}"><i class="fa fa-btn fa-sign-out"></i> Atteikties</a></li>
                                </ul>
                            </li>
                            @endguest
                        <li class="aux-languages dropdown navbar-right">
                            <a href="#">
                                <i class="fa fa-flag"></i>
                    <span>
                        {{ LaravelLocalization::getCurrentLocaleName()  }}
                    </span>
                            </a>
                            <ul id="auxLanguages" class="sub-menu language-menu dropdown-menu">
                                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                    <li class="{{ App::getLocale() == $localeCode ? 'active' : '' }}">
                                        <a rel="alternate" lang="{{$localeCode}}" href="{{LaravelLocalization::getLocalizedURL($localeCode) }}">
                                            {!! $properties['native'] !!}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>

                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>