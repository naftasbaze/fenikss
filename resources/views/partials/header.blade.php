               <!-- HEADER -->
                <div class="header relative" id="header">
                    @include('partials.headerTop')
	<!-- NAVBAR -->
	<nav class="navbar navbar-main navbar-shadow" role="navigation" id="slide-nav">
		<div class="container relative">
        	
            <!-- Sākas navbar-header -->
		    <div class="navbar-header">
		      	<!-- LOGO -->
		      	<a class="navbar-logo" href="/">
		      		<img id="logoOne" src="{{ asset('images/Logo4.png') }}" class="hide">
		      		<img id="logoTwo" src="{{ asset('images/Logo4.png') }}">
		      	</a>

		    	<!-- NAVBAR TOGGLE -->
		      	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
					<span class="sr-only">Pārslēgt</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
			    </button>

			    			    <!-- SLIDEBAR TOGGLE -->
			    {{--<button type="button" class="navbar-icon-btn btn-st-trigger" data-effect="st-effect-1">
					<i class="fa fa-dedent"></i>
			    </button>--}}
            </div> <!-- Beidzas navbar-header -->

			<!-- Sākas: slidemenu -->
		   	<div id="slidemenu">
		      	<ul class="nav navbar-nav navbar-right" data-hover="dropdown" data-animations="zoomIn fadeIn fadeInUp fadeIn">



                        <!-- Svitrainā ikona -->
{{--                        <li class="dropdown-icon hidden-xs hidden-sm">
                            <a  href="#" class="btn-st-trigger ttip" data-effect="st-effect-1">
                                <span><i class="fa fa-bars"></i></span>
                            </a>
                        </li>--}}
                        <!-- Svitrainā ikona -->

                    <!-- Sākas: Galvenais horiz menu -->

                    @include('partials.megamenu')

                    <!-- Beidzas: Galvenais horiz menu -->

                    <!-- Sākas: Login horiz menu -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest

                            <li><a href="{{ url('/login') }}">Pieteikties</a></li>
                            <li><a href="{{ url('/register') }}">Reģistrēties</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <span>{{ Auth::user()->name }} </span>
                                </a>

                                <ul class="dropdown-menu" role="menu">

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
                    </ul>
                    {{--<!-- Sakas: valoda -->
                    <ul class="nav navbar-nav navbar-right" data-hover="dropdown" data-animations="zoomIn fadeIn fadeInUp fadeIn">
                        <li class="dropdown navbar-right">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-flag"></i>
                    <span>
                        {{ LaravelLocalization::getCurrentLocaleName()  }}
                    </span>
                            </a>
                            <ul class="dropdown-menu language-menu">
                                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                    <li class="{{ App::getLocale() == $localeCode ? 'active' : '' }}">
                                        <a rel="alternate" lang="{{$localeCode}}" href="{{LaravelLocalization::getLocalizedURL($localeCode) }}">
                                            {!! $properties['native'] !!}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>

                        </li>

                    </ul><!-- Beidzas: valoda -->--}}

                    <!-- Beidzas: Login horiz menu -->





                    
		      	</ul>
		   	</div> <!-- Beidzas slide menu -->
		</div><!-- Beidzas conteiner relative -->
	</nav> <!-- Beidzas horizontālais menu -->
                    </div> <!-- Beidzas HEADER -->

