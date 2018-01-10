<section class="slice sct-color-1 bb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title-wrapper style-2 v1" id="{{$lapa->slug}}">
                    <h3 class="section-title section-title-sm left">
                        <span>{{$galerNos->nosaukums}}</span>
                    </h3>
                </div>


                <div class="row">
                    <div class="owl-carousel owl-theme">

                        <!-- Slide -->

                        @foreach ($galerijas as $galerija)
                            <div class="item">
                                <div class="block style-3 v2">

                                    <div class="block-image">
                                        <div class="view">
                                            <p>
                                                <a href="{{ asset($galerija->foto[0]->path) }}"
                                                   data-fancybox="galerija-{{$galerija->id}}">
                                                    <img src="{{ asset($galerija->foto[0]->thumbnail_path) }}" />
                                                </a>
                                            </p>
                                        </div>

                                    </div>
                                    <div class="block-body">
                                        <h3 class="block-title no-margin no-padding">{{$galerija->apaksnos}}</h3>
                                        <h5 class="no-margin no-padding">{{$galerija->apraksts}}</h5>
                                    </div>

                                </div>
                            </div>{{--Item--}}

                        @endforeach {{--k--}}
                    </div>
                </div> {{--Row--}}
            </div>
        </div>
    </div>
</section>

 <div style="display: none;">
@foreach ($galerijas as $galerija)

    @foreach ($galerija->foto as $foto)
        <a href="{{asset($foto->path)}}" data-fancybox="galerija-{{$galerija->id}}">
            <img src="{{ asset($foto->thumbnail_path) }}" />
        </a>
    @endforeach

@endforeach
</div>


