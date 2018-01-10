<section class="slice sct-color-1 bb">
    <div class="filip">
    <div class="flipbook-viewport">
        <div class="container">
            <div class="flipbook">

                {{--<div style="background-image:url('{{ asset('turn/pages/1.jpg') }}')"></div>
                <div style="background-image:url('{{ asset('turn/pages/2.jpg') }}')"></div>
                <div style="background-image:url('{{ asset('turn/pages/3.jpg') }}')"></div>
                <div style="background-image:url('{{ asset('turn/pages/4.jpg') }}')"></div>
                <div style="background-image:url('{{ asset('turn/pages/5.jpg') }}')"></div>
                <div style="background-image:url('{{ asset('turn/pages/6.jpg') }}')"></div>
                <div style="background-image:url('{{ asset('turn/pages/7.jpg') }}')"></div>
                <div style="background-image:url('{{ asset('turn/pages/8.jpg') }}')"></div>
                <div style="background-image:url('{{ asset('turn/pages/9.jpg') }}')"></div>
                <div style="background-image:url('{{ asset('turn/pages/10.jpg') }}')"></div>
--}}
                <div id="flipbook">
                    <div class="hard"> Turn.js </div>
                    <div class="hard"></div>
                    <div> Page 1 </div>
                    <div> Page 2 </div>
                    <div> Page 3 </div>
                    <div> Page 4 </div>
                    <div class="hard"></div>
                    <div class="hard"></div>
                </div>

            </div>
        </div>
    </div></div>
</section>


@section('scripts')

    <script type="text/javascript" src="{{ asset('turn/lib/turn.js') }}"></script>

   {{-- <script type="text/javascript" src="{{ asset('turn/extras/modernizr.2.5.3.min.js') }}"></script>--}}

    {{--<script type="text/javascript">

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

    </script>--}}

    <script type="text/javascript">

        $("#flipbook").turn({
            width: 400,
            height: 300,
            autoCenter: true
        });

    </script>

@endsection