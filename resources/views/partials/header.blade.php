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
		      		<img id="logoOne" src="{{ asset('images/logo6.svg') }}" class="hide">
		      		<img id="logoTwo" src="{{ asset('images/logo6.svg') }}">
		      	</a>

		    	<!-- NAVBAR TOGGLE -->
		      	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
					<span class="sr-only">Pārslēgt</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
			    </button>


            </div> <!-- Beidzas navbar-header -->

			<!-- Sākas: slidemenu -->
		   	<div id="slidemenu">
		      	<ul class="nav navbar-nav navbar-right" data-hover="dropdown" data-animations="zoomIn fadeIn fadeInUp fadeIn">

                    <!-- Sākas: Galvenais horiz menu -->

                    @include('partials.megamenu')

                    <!-- Beidzas: Galvenais horiz menu -->

		      	</ul>
		   	</div> <!-- Beidzas slide menu -->
		</div><!-- Beidzas conteiner relative -->
	</nav> <!-- Beidzas horizontālais menu -->
                    </div> <!-- Beidzas HEADER -->

