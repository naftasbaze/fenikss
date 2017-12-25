@extends('layouts.app')

@section('content')


    <!-- Lapa -->
    @foreach ($lapas as $lapa)
        @if($lapa->tips==0) {{--teksts--}}
        @include('home.rindina')
        @elseif($lapa->tips==1) {{--galerija--}}
        @include('home.galerija3')
        @elseif($lapa->tips==2) {{--paralaks--}}
        @include('home.parallax')
        @elseif($lapa->tips==3) {{--kontaktu forma--}}
        @include('contact.contact2')
        @elseif($lapa->tips==4) {{--video--}}
        @include('home.video')
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
@endsection
