<!doctype html>
<html>
<head lang="lv">
    <meta charset="utf-8">
    <meta name="description" content=" @yield('lapasapraksts', ' Fenikss un KO mājas lapa')" />
    <meta name="keywords" content="@yield('lapaskeywordi', 'Stopiņu novads, Sprīdīši')"/>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index, follow">

    <title>{{ config('app.name', 'Fenikss un KO') }}</title>

    <!-- FAVICON -->
    <link href="{{ asset('images/favicon.png') }}" rel="icon" type="image/png">

    @include('partials.cssadm')

    </head>

    <body>
    <div id="wrapper">

        @include('admin.navH')
        @include('admin.navV')

        <div id="page-wrapper">
            @include('admin.PageHead')

            <div id="page-inner">

            @yield('content')

                @include('admin.PageFoot')

            </div><!-- /. PAGE INNER  -->

        </div><!-- /. PAGE WRAPPER  -->

    </div><!-- /. WRAPPER  -->

        @include('partials.jsadmin')

    @yield('scripts')
    </body>
</html>