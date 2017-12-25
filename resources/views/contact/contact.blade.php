<section>
    <!-- Map canvas -->
    <div id="map" class="map-canvas mb-30"></div>
</section>

<section class="slice sct-color-1">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <!-- Section title -->
                <div class="section-title-wrapper style-1 v1">
                    <h3 class="section-title left">
                        <span>Write us a message</span>
                    </h3>
                </div>

                <ul class="list-style-1">
                    <li>
                        <i class="fa fa-home"></i>
                        <span>5th Avenue, New York City US</span>
                    </li>
                    <li>
                        <i class="fa fa-envelope"></i>
                        <span>contact@yourdomain.com</span>
                    </li>
                    <li>
                        <i class="fa fa-phone"></i>
                        <span>+10 724 1234 567</span>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-globe"></i>
                            www.yourdomain.com
                        </a>
                    </li>
                </ul>

                <!-- Section title -->
                <div class="section-title-wrapper style-1 v1 mt-30">
                    <h3 class="section-title left">
                        <span>Write us a message</span>
                    </h3>
                </div>

                <div class="vertical-info">
                    <!-- Vertical Info - Details -->
                    <h4>Monday-Friday:</h4>
                    <p>10:00 AM - 6:00 PM</p>

                    <h4>Saturday:</h4>
                    <p>10:00 AM - 2:00 PM</p>

                    <h4>Sunday:</h4>
                    <p>Closed</p>
                </div>

                <!-- Follow us -->
                <div class="section-title-wrapper style-1 v1 mt-30">
                    <h3 class="section-title left">
                        <span>Follow us</span>
                    </h3>
                </div>
                Enim phasellus a ullamcorper montes ut vestibulum massa parturient pretium congue nullam eget rhoncus faucibus.<br><br>
                <i class="fa fa-check mr"></i>Habitasse laoreet natoque massa.<br>
                <i class="fa fa-check mr"></i>Habitasse laoreet natoque massa. <br>
                <i class="fa fa-check mr"></i>Habitasse laoreet natoque massa.
            </div>

            <div class="col-md-5">
                <!-- Section title -->
                <div class="section-title-wrapper style-1 v1">
                    <h3 class="section-title left">
                        <span>Our company</span>
                    </h3>
                </div>
                <div class="">
                    <p class="mb-20">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris.
                        Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus.
                    </p>
                    <img src="http://lorempixel.com/640/480/city/7/" class="img-responsive">
                </div>
            </div>

            <div class="col-md-4">
                <!-- Section title -->
                <div class="section-title-wrapper style-1 v1">
                    <h3 class="section-title left">
                        <span>Write us a message</span>
                    </h3>
                </div>

                <!-- Contact form -->
                @include('contact.form')
            </div>
        </div>
    </div>
</section>

@section('csscits')
    <!-- SweetAlert-->
    <link href="{{ asset('css/sweetalert.css') }}" rel="stylesheet" />

@endsection

@section('jscits')
    <!-- PAGE RELATED SCRIPTS -->
    <script type="text/javascript" src="{{ asset('js/google-maps-rmms.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAPJXnEpdTwqfXtdWA4gpjvy47lX5dSFTU&callback=initMap"
            async defer></script>

    <!-- sweetalert Js-->
    <script src="{{ asset('js/sweetalert.min.js') }}"></script>

    @include('partials.flash')
@stop