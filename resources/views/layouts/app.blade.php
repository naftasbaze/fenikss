<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content=" @yield('lapasapraksts', ' Fenikss un KO mājas lapa')" />
    <meta name="keywords" content="@yield('lapaskeywordi', 'Stopiņu novads, Sprīdīši')"/>
    <meta name="robots" content="index, follow">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- FAVICON -->
    <link href="{{ asset('images/favicon.png') }}" rel="icon" type="image/png">

    <title>{{ config('app.name', 'Fenikss un KO') }}</title>

    <!-- Styles -->
    @include('partials.cssmain')


</head>
<body>
<!-- 1. MAIN WRAPPER -->
<div class="body-wrap">

    <!-- 2. Sākas st-container -->
    <div id="st-container" class="st-container">

        <!-- 3. Sākas vertikālā navigācija -->
        {{-- <nav class="st-menu st-effect-1" id="menu-1">
             @include('partials.navigacija')
        </nav>     <!-- 3. Beidzas vertikālā navigācija -->--}}

        <!-- 3. Sākas st-pusher -->
        <div class="st-pusher">

            <!-- 4.Sākas st-content -->
            <div class="st-content">

                <!-- 5.Sākas st-content-inner -->
                <div class="st-content-inner">
                    @include('partials.header')
                  {{--  @include('partials.parallax')--}}

                    @yield('content')

                      @include('partials.footer')
                    @include('partials.copyright')

                </div> <!-- 5. Beidzas: st-content-inner -->
            </div>  <!--4. END: st-content -->
        </div><!-- 3. END: st-pusher -->
    </div><!-- 2. END: st-container -->
</div><!--1. END: body-wrap -->



@include('partials.jsmain')
@yield('scripts')
</body>
</html>
