@extends('layouts.app')

{{--@section('csscits')
    <!-- Revolution Slider -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/revolution-slider/css/settings.css') }}" media="screen" />
@endsection--}}

@section('content')


    <!-- Lapa -->
    @foreach ($lapas as $lapa)
        @if($lapa->tips==0) {{--teksts--}}
        @include('home.rindina')
        @elseif($lapa->tips==1) {{--galerija--}}
        @include('home.galerija10')
        @elseif($lapa->tips==2) {{--paralaks--}}
        @include('home.parallax')
        @elseif($lapa->tips==3) {{--kontaktu forma--}}
        @include('contact.contact2')
        @elseif($lapa->tips==4) {{--video--}}
        @include('home.video')
        @elseif($lapa->tips==5) {{--akcija--}}
        @include('home.akcija')
        @elseif($lapa->tips==6) {{--jautajumi--}}
        @include('home.jautajumi')
        @endif
    @endforeach

@endsection

@section('scripts')


        <!-- Page related scripts -->
        <script src="{{ asset('/js/vide/js/jquery.vide.min.js') }}"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $(".video-cover").vide({
                    mp4: "{{ asset('images/videos/kaleji.mp4') }}",
                    webm: "{{ asset('images/videos/kaleji.webm') }}",
                    ogv: "{{ asset('images/videos/kaleji.ogv') }}",
                    poster: "{{ asset('images/videos/kaleji.png') }}"
                }, {
                    muted: true,
                    loop: true,
                    autoplay: true,
                    resizing: true
                });

            });
        </script>


       {{-- <script type="text/javascript">
            $(document).ready(function(){
                $('.owl-carousel').owlCarousel({
                    animateOut: 'slideOutDown',
                    animateIn: 'flipInX',
                    autoplay:true,
                    autoplayHoverPause:true,
                    loop:true,
                    margin:10,
                    nav:true,
                    responsive:{
                        0:{
                            items:1
                        },
                        600:{
                            items:2
                        },
                        1000:{
                            items:3
                        }
                    }
                })
            });
        </script>--}}

        <script type="text/javascript">
            $(document).ready(function() {
                $().UItoTop({ easingType: 'easeOutQuart' });

            });
        </script>

      {{--  <!-- Bootstrap Carousel -->
        <script src="/bootstrap-extensions/bootstrap-carousel-animation.js"></script>
--}}


        {{--<script type="text/javascript">
            $(document).ready(function() {
                $('.carouselyyy').carousel();
            });
        </script>--}}


        {{--<script type="text/javascript">
            $(document).ready(function() {
                $(".fancybox").fancybox({
                    openEffect	: 'none',
                    closeEffect	: 'none'
                });
            });
        </script>--}}

        <!-- Revolutions slider -->
       {{-- <script type="text/javascript" src="{{ asset('/revolution-slider/js/jquery.themepunch.plugins.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/revolution-slider/js/jquery.themepunch.revolution.min.js') }}"></script>

        <script type="text/javascript">
            jQuery(document).ready(function() {
                jQuery('.tp-banner').revolution({
                    delay:9000,
                    startwidth:1170,
                    startheight:500,
                    hideThumbs:10,

                    onHoverStop:"on",

                    thumbWidth:100,
                    thumbHeight:50,
                    thumbAmount:3,

                    navigationType:"bullet",
                    navigationArrows:"solo",
                    navigationStyle:"round",

                    hideTimerBar: "on",

                    fullScreen:"on",
                    fullScreenOffsetContainer:".navbar-main",
                });
            });
        </script>--}}

        <script src="{{ asset('turn/lib/turn.js') }}"></script>


        <script type="text/javascript">
            $(document).ready(function() {

                $('.flipbook').turn({

                });

            });
        </script>

@endsection

