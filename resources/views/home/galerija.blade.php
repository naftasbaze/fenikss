<section class="slice sct-color-1 bb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title-wrapper style-2 v1">
                    <h3 class="section-title section-title-sm left">
                        <span>Galerijas{{--{{$galerijas->nosaukums_lv}}--}}</span>
                    </h3>

                    <div class="aux-nav">
                        <!-- Controls -->
                        <a class="carousel-control left" href="#carousel-3" role="button" data-slide="prev">
                            <i class="fa fa-chevron-left"></i>
                            <span class="sr-only">Ieprikšējā</span>
                        </a>
                        <a class="carousel-control right" href="#carousel-3" role="button" data-slide="next">
                            <i class="fa fa-chevron-right"></i>
                            <span class="sr-only">Nākošā</span>
                        </a>
                    </div>
                </div>

                <!-- Carousel articles -->
                <div id="carousel-3" class="carousel carousel-2 slide mb-40" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-3" data-slide-to="0" class=""></li>
                        <li data-target="#carousel-3" data-slide-to="1" class="active"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <!-- Slide -->
                        {{--{{$galerija->jauns}}--}}
                        {{--@foreach($galerijas as $galerija)--}}
                        @for ( $k=0 ; $k<$galerijas->count(); $k++)
                            <div class="item @if($k==0) active  @endif">
                                <div class="row">
                        @for ( $i=0 ; $i<3; $i++)
                            {{--@if($galerija->jauns=='1')--}}
                               {{-- @endif--}}

                                <div class="col-md-4">
                                    <div class="block style-3 v2">
                                        <div class="block-image">
                                            <div class="view view-third">
                                                {{--<img src="images/prv/block-img-1.jpg">--}}
                                               {{-- <img src="{{ asset($galerijas[$k]->foto->thumbnail_path) }}">--}}
                                                {{$galerijas[$k]}}

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
                            <?php $k=$k+1 ?>

                                    @endfor {{--i--}}
                            <?php $k=$k-1 ?>

                            </div> {{--Row--}}
                        </div> {{--Item--}}


                        @endfor {{--k--}}

                    </div> {{--carousel-inner--}}
                </div>
            </div>
        </div>
    </div>
</section>