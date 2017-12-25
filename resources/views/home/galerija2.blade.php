<section class="slice sct-color-1 bb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title-wrapper style-2 v1">
                    <h3 class="section-title section-title-sm left">
                        <span>Galerijas{{--{{$galerijas->nosaukums_lv}}--}}</span>
                    </h3>
                </div>

                <!-- Carousel articles -->
                <div id="carousel-3" class="carousel carousel-2 slide mb-40" data-ride="carousel">


                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="owl-carousel">
                            <div class="row">
                        <!-- Slide -->
                        {{--{{$galerija->jauns}}--}}
                        {{--@foreach($galerijas as $galerija)--}}
                        @for ( $k=0 ; $k<$galerijas->count(); $k++)

                                <div class="col-md-4">
                                    <div class="block style-3 v2">
                                        <div class="block-image">
                                            <div class="view view-third">
                                                {{--<img src="images/prv/block-img-1.jpg">--}}
                                                <img src="{{ asset($galerijas[$k]->foto[0]->thumbnail_path) }}">
                                                {{--{{$galerijas[$k]->foto[0]}}--}}

                                                <div class="mask">
                                                    <h2>{{--{{$galerijas[$k]->nosaukums_lv}}--}}</h2>
                                                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                                                    <a href="#" class="btn btn-b-base-5">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="block-body">
                                            <h3 class="block-title no-margin no-padding">Silken <span>Truth</span></h3>
                                            <h5 class="no-margin no-padding">Bootstrap template</h5>
                                        </div>
                                    </div>
                                </div>


                            @endfor {{--k--}}
                        </div> {{--Row--}}
                        </div> {{--Item--}}

                    </div> {{--carousel-inner--}}
                </div>
            </div>
        </div>
    </div>
</section>