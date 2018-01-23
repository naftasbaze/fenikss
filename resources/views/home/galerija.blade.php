@foreach ($lapa->rinda as $rinda)
    <section class="slice sct-color-1 bb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title-wrapper style-2 v1" id="{{$lapa->slug}}">
                        <h3 class="section-title section-title-sm left">
                            <span>{{$rinda->nosaukums}}</span>
                        </h3>
                        <p>
                            <span>{{$rinda->raksts}}</span>
                        </p>

                        <div class="aux-nav">
                            <!-- Controls -->
                            <a class="carousel-control left" href="#carousel-3" role="button" data-slide="prev">
                                <i class="fa fa-chevron-left"></i>
                                <span class="sr-only">Ieprikšējais</span>
                            </a>
                            <a class="carousel-control right" href="#carousel-3" role="button" data-slide="next">
                                <i class="fa fa-chevron-right"></i>
                                <span class="sr-only">Nākamais</span>
                            </a>
                        </div>
                    </div>

                    <!-- Carousel articles -->
                    <div id="carousel-3" class="carousel carousel-2 slide mb-40" data-ride="carousel">

                        <!-- Wrapper for 3 slides -->
                        <div class="carousel-inner" role="listbox">
                            <!-- Slide item 1 ->foto-->
                            @foreach( $galerijas->chunk(3) as $set)
                                <div class="item @if ($loop->first)active @endif">
                                    <div class="row">

                                        @foreach($set as $galerija)
                                            <div class="col-md-4">
                                                <div class="block style-3 v2">
                                                    <div class="block-image">
                                                        <div class="view view-third">
                                                            <a href="{{ asset($galerija->foto[$galerija->foto->count()-1]->path) }}"
                                                               class="fancybox" data-fancybox="albums-{{$galerija->id}}">
                                                                <img src="{{ asset($galerija->foto[$galerija->foto->count()-1]->thumbnail_path) }}">
                                                            </a>

                                                            <div style="display: none;">
                                                                @foreach ($galerija->foto as $foto)
                                                                    @if(! $loop->last)
                                                                    <a href="{{asset($foto->path)}}" data-fancybox="albums-{{$galerija->id}}"
                                                                       data-thumb="{{asset($foto->thumbnail_path)}}">

                                                                    </a>
                                                                    @endif
                                                                @endforeach
                                                                    <a href="{{asset('images/1001.jpg')}}" data-fancybox="albums-{{$galerija->id}}"
                                                                       data-thumb="{{asset('images/1001.jpg')}}">
                                                                    </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="block-body">
                                                        <h3 class="block-title no-margin no-padding">{{$galerija->nosaukums}}</h3>
                                                        <h5 class="no-margin no-padding">{{$galerija->apaksnos}}</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endforeach