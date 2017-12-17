@extends('layouts.app')

@section('content')
    @include('home.video')

    <!-- Lapa -->
    @foreach ($lapas as $lapa)
        @if($lapa->tips==0) {{--teksts--}}
        @include('home.rindina')
        @elseif($lapa->tips==1) {{--galerija--}}
        @include('home.galerija')
        @elseif($lapa->tips==2) {{--paralaks--}}

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

@endsection
