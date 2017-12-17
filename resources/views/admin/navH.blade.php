<nav class="navbar navbar-default top-navbar" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
            <span class="sr-only">Pārslēgt</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ url('/admin') }}"><strong>{{ config('app.name', 'Fenikss un KO') }}</strong></a>

    </div>

    <ul class="nav navbar-top-links navbar-right">

        <!-- /.dropdown -->
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                <i class="fa fa-user fa-fw"></i>
                {{ Auth::user()->name }}
                <i class="fa fa-caret-down"></i>

            </a>
            <ul class="dropdown-menu dropdown-user">
                <li>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-user fa-fw"></i> {{ Auth::user()->name }}
                </li>
                <li>&nbsp;&nbsp;&nbsp;&nbsp; {{ Auth::user()->roles()->first()->nosaukums }}
                </li>
                <li class="divider"></li>
                <li><a href="{{ url('/') }}"><i class="fa fa-globe fa-fw"></i> Web lapa</a>
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
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>

        <!-- /.dropdown -->
    </ul>
</nav>
<!--/. NAV TOP  -->
