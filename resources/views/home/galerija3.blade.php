<section class="slice sct-color-1 bb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title-wrapper style-2 v1">
                    <h3 class="section-title section-title-sm left">
                        <span>{{$galerNos->nosaukums}}</span>
                    </h3>
                </div>


                <div class="row">
                    <div class="owl-carousel owl-theme">

                        <!-- Slide -->

                        @for ( $k=0 ; $k<$galerijas->count(); $k++)
                            <div class="item">
                                <div class="block style-3 v2">

                                    <div class="block-image">
                                        <div class="view view-third">
                                            <img src="{{ asset($galerijas[$k]->foto[0]->thumbnail_path) }}">
                                            <div class="mask">
                                                <h2>{{$galerijas[$k]->nosaukums}}</h2>
                                                <p>{{$galerijas[$k]->apaksnos}}</p>
                                                <a href="#" class="btn btn-b-base-5">{{ Lang::get('viskas.skatit')}}</a>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="block-body">
                                        <h3 class="block-title no-margin no-padding">{{$galerijas[$k]->apaksnos}}</h3>
                                        <h5 class="no-margin no-padding">{{$galerijas[$k]->apraksts}}</h5>
                                    </div>

                                </div>
                            </div>{{--Item--}}
                        @endfor {{--k--}}
                    </div>
                </div> {{--Row--}}
            </div>
        </div>
    </div>
</section>