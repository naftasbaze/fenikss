@extends('layouts.app')

@section('content')


    <!-- Lapa -->
    @foreach ($lapas as $lapa)
        @if($lapa->tips==0)           {{--teksts--}}
        @include('home.rindina')
        @elseif($lapa->tips==1)       {{--galerija--}}
        @include('home.galerija')
        @elseif($lapa->tips==2)       {{--paralaks--}}
        @include('home.parallax')
        @elseif($lapa->tips==3)       {{--kontaktu forma--}}
        @include('contact.contact')
        @elseif($lapa->tips==4)       {{--video--}}
        @include('home.video')
        @elseif($lapa->tips==5)       {{--akcija--}}
        @include('home.akcija')
        @elseif($lapa->tips==6)       {{--jautajumi--}}
        @include('home.jautajumi')
        @elseif($lapa->tips==7)       {{--katalga lapas--}}
        @include('home.katalogs')

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


        <script type="text/javascript">
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
        </script>

        <script type="text/javascript">
            $(document).ready(function() {
                $().UItoTop({ easingType: 'easeOutQuart' });

            });
        </script>

        <script src="{{ asset('turn/lib/turn.js') }}"></script>


        <script type="text/javascript">
            $(document).ready(function() {

                $('.flipbook').turn({
                    //autoCenter:true
                   /* width: $(this).width() * 0.8,
                    height: $(this).width() * 0.46*/
                    /*when: {turn: function(e, page, view){ alert('page'+ e); }}*/

                });
                //$( "#filips" ).height(660);
                izmers();
                //alert('page'+ $( "#filips" ).height());

            });
        </script>

        <script type="text/javascript">
            $(window).resize(function() {
                /*if ($(this).width() < 981) {
                    //do something
                }*/
                izmers();


            });

            function izmers(){
                var plt = $(this).width() * 0.8;
                var augt = $(this).width() * 0.46;
                //alert('page'+ plt);

                $( "#filips" ).height(augt);

                $( "flipbook-viewport" ).width(plt).height(augt);
                $( "flipbook-viewport" ).offset({top:200 });
                $( "flipbook" ).width(plt).height(augt);
                $( "flipbook" ).css({top:'200px'} );
                // $( "#filips" ).text( "The height for the " + " is " + augt + "px." );
                $('.flipbook').turn('size',plt ,augt );
                $('.flipbook').turn('resize');
            }
        </script>

@endsection


@section('lapasapraksts'){{$adrese->desription}}@endsection

@section('lapaskeywordi'){{$adrese->keywords}}@endsection

@section('saits'){{$adrese->saits}}@endsection