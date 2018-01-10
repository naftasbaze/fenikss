@section('csscits')

    <link rel="stylesheet" type="text/css" href="{{ asset('/turn/pictureflip.css') }}" media="screen" />
@endsection

<section class="slice sct-color-1 bb">

    <div id="flipbook">
        <div class="slide">
            <img src="{{ asset('turn/images/1.jpg') }}" alt="" />
            <div class="content"><a href="#">Flowers: What you didn't know</a></div>
        </div>
        <div class="slide">
            <img src="{{ asset('turn/images/2.jpg') }}" alt="" />
            <div class="content"><a href="#">Flowers: Real or Fiction?</a></div>
        </div>
        <div class="slide">
            <img src="{{ asset('turn/images/3.jpg') }}" alt="" />
            <div class="content"><a href="#">A Flower ate my Baby!</a></div>
        </div>
        <div class="slide">
            <img src="{{ asset('turn/images/4.jpg') }}" alt="" />
            <div class="content"><a href="#">Will Flowers Destroy Earth?</a></div>
        </div>
    </div>

        </section>


@section('scripts')
    <script src="{{ asset('turn/modernizr.js') }}"></script>
    <script src="{{ asset('turn/jquery.pictureflip.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function() {

            $('#flipbook').pageFlip({});

        });
    </script>

@endsection