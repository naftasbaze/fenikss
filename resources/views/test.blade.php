@extends('layouts.app')

@section('content')

    <section class="slice sct-color-1 bb">
    <div class="flipbook-viewport">
        <div class="container">
            <div class="flipbook">

                <div style="background-image:url('{{ asset('turn/pages/1.jpg') }}')"></div>
                <div style="background-image:url('{{ asset('turn/pages/2.jpg') }}')"></div>
                <div style="background-image:url('{{ asset('turn/pages/3.jpg') }}')"></div>
                <div style="background-image:url('{{ asset('turn/pages/4.jpg') }}')"></div>
                <div style="background-image:url('{{ asset('turn/pages/5.jpg') }}')"></div>
                <div style="background-image:url('{{ asset('turn/pages/6.jpg') }}')"></div>
                <div style="background-image:url('{{ asset('turn/pages/7.jpg') }}')"></div>
                <div style="background-image:url('{{ asset('turn/pages/8.jpg') }}')"></div>
                <div style="background-image:url('{{ asset('turn/pages/9.jpg') }}')"></div>
                <div style="background-image:url('{{ asset('turn/pages/10.jpg') }}')"></div>

            </div>
        </div>
    </div>
    </section>

@endsection

@section('scripts')

    <script type="text/javascript">

        function loadApp() {

            // Create the flipbook

            $('.flipbook').turn({
                // Width

                width:922,

                // Height

                height:600,

                // Elevation

                elevation: 50,

                // Enable gradients

                gradients: true,

                // Auto center this flipbook

                autoCenter: true

            });
        }

        // Load the HTML4 version if there's not CSS transform

        yepnope({
            test : Modernizr.csstransforms,
            yep: ['{{ asset('turn/lib/turn.js') }}'],
            nope: ['{{ asset('turn/lib/turn.html4.min.js') }}'],
            both: ['{{ asset('turn/css/basic.css') }}'],
            complete: loadApp
        });

    </script>

@endsection