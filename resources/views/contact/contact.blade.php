
<div class="page-title style-1" id="{{$lapa->slug}}">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>{{$lapa->nosaukums}}</h2>
            </div>
        </div>
    </div>
</div>

<section>
<!-- Map canvas -->
<div id="map" class="map-canvas mb-30"></div>
</section>

@foreach ($lapa->rinda as $rinda)
<section class="slice sct-color-1 bb">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="section-title-wrapper style-1 v1">
                    <h3 class="section-title left">
                        <span>{{$rinda->nosaukums}}</span>
                    </h3>
                </div>
                <p class="mb-20 mt-20">
                    {{$rinda->raksts}}
                </p>

                @include('contact.form')
            </div>
            <div class="col-md-4">
                <!-- Quick info   $adrese -->
                <div class="section-title-wrapper style-1 v1">
                    <h3 class="section-title left">
                        <span>{{$adrese->adrnos}}</span>
                    </h3>
                </div>
                <ul class="list-style-1">
                    <li>
                        <span><strong>{{$adrese->nosaukums}}</strong></span>
                    </li>
                    <li>
                        <i class="fa fa-home"></i>
                        <span>{{$adrese->adrese}}</span>
                    </li>
                    <li>
                        <i class="fa fa-envelope"></i>
                        <span>{{$adrese->epasts}}</span>
                    </li>
                    <li>
                        <i class="fa fa-phone"></i>
                        <span>{{$adrese->tel1}}</span>
                    </li>
                    <li>
                        <i class="fa fa-phone"></i>
                        <span>{{$adrese->tel2}}</span>
                    </li>
                    <li>
                        <i class="fa fa-phone"></i>
                        <span>{{$adrese->tel3}}</span>
                    </li>
                    <li>
                        <a href="http://www.fenikssko.lv">
                            <i class="fa fa-globe"></i>
                            {{$adrese->www}}
                        </a>
                    </li>
                </ul>

                <!-- Darbalaiks -->
                <div class="section-title-wrapper style-1 v1 mt-30">
                    <h3 class="section-title left">
                        <span>{{$adrese->dlaiknos}}</span>
                    </h3>
                </div>
                <ul class="list-style-1">
                    {!!$adrese->dlaiks!!}
                </ul>

                <!-- Banka -->
                <div class="section-title-wrapper style-1 v1 mt-30">
                    <h3 class="section-title left">
                        <span>{{$adrese->banknos}}</span>
                    </h3>
                </div>
                <div class="mb-20">

                </div>
                <ul class="list-style-1">
                    <li>
                        <i class="fa fa-university"></i>
                        <span>{{$adrese->banka}}</span>
                    </li>
                    <li>
                        <i class="fa fa-money"></i>
                        <span>{{$adrese->kontaNr}}</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endforeach

{{--@section('csscits')
    <!-- SweetAlert-->
    <link href="{{ asset('css/sweetalert.css') }}" rel="stylesheet" />

@endsection--}}

@section('jscits')
    <!-- PAGE RELATED SCRIPTS -->
    <script type="text/javascript" src="{{ asset('js/google-maps-fenikss.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC9hsHSrqb0fGD0tlpva3h_yzMPzZwR2Zk&callback=initMap"
            async defer></script>

    <!-- sweetalert Js-->
   {{-- <script src="{{ asset('js/sweetalert.min.js') }}"></script>
    @include('partials.flash')--}}

@stop