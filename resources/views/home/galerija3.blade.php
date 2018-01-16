@foreach ($lapa->rinda as $rinda)
<section class="slice sct-color-1 bb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title-wrapper style-2 v1" id="{{$lapa->slug}}">
                    <h3 class="section-title section-title-sm left">
                        <span>{{$rinda->nosaukums}}</span>
                    </h3>
                </div>


                <div class="row">
                    <div class="owl-carousel owl-theme">

                        <!-- Slide -->
                        @foreach ($galerijas as $galerija)

                       {{-- @for ( $k=0 ; $k<$galerijas->count(); $k++)--}}
                            <div class="item">
                                <div class="block style-3 v2">

                                    <div class="block-image">
                                        <div class="view view-third">
                                            <img src="{{ asset($galerija->foto[0]->thumbnail_path) }}">
                                            <div class="mask mask-4 v2">
                                                <h2>{{$galerija->nosaukums}}</h2>
                                                <p>{{$galerija->apaksnos}}</p>
                                                <p>
                                                <a href="{{ asset($galerija->foto[0]->path) }}"
                                                   class="btn btn-b-base-5 fancybox" data-fancybox="albums-{{$galerija->id}}">
                                                    {{ Lang::get('viskas.skatit')}}
                                                </a></p>
                                            </div>

                                            <div style="display: none;">
                                            @foreach ($galerija->foto as $foto)
                                                <a href="{{asset($foto->path)}}" data-fancybox="albums-{{$galerija->id}}"
                                                   data-thumb="{{asset($foto->thumbnail_path)}}"></a>
                                            @endforeach
                                            </div>

                                        </div>

                                    </div>
                                    <div class="block-body">
                                        <h3 class="block-title no-margin no-padding">{{$galerija->apaksnos}}</h3>
                                        <h5 class="no-margin no-padding">{{$galerija->apraksts}}</h5>
                                    </div>

                                </div>
                            </div>{{--Item--}}
                                {{--@endfor k--}}
                        @endforeach
                    </div>
                </div> {{--Row--}}
            </div>
        </div>
    </div>
</section>


{{--<div style="display: none;">

    @foreach ($galerijas as $galerija)
        --}}{{--{{$galerija}}--}}{{--
        @foreach ($galerija->foto as $foto)
            <a href="{{asset($foto->path)}}" data-fancybox="albums-{{$galerija->id}}"
               data-thumb="{{asset($foto->thumbnail_path)}}"></a>
        @endforeach
    @endforeach

</div>--}}

@endforeach