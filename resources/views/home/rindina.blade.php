<section id="services" data-target="services" class="sct-color-2">
    <div class="one-page-slice">
        <div class="container">
            <div class="section-title-wrapper style-1 v1">
                <h3 class="section-title center">
                    <span>{{$lapa->nosaukums}}</span>
                    {{--<span class="section-subtitle">Cum sociis natoque penatibus et magnis</span>--}}
                </h3>
            </div>
            <!-- Rinda -->
            @foreach ($lapa->rinda as $rinda)
                <div class="row">
                    <div class="col-md-12">
                        <div class="block article list style-1">

                            @if($rinda->izkartojums==1) {{--bilde pa kreisi--}}
                            <div class="article-image">
                                <img src="{{ asset($rinda->fotoLinks) }}">
                            </div>

                            <div class="block-body right">
                                <h3 class="title">
                                    {{--<a href="#">{{$rinda->nosaukums}}</a>--}}
                                    {{$rinda->nosaukums}}
                                </h3>

                                <p class="article-text">
                                    {!!$rinda->raksts!!}
                                </p>

                            </div>
                            @else

                                <div class="block-body left">
                                    <h3 class="title">
                                        {{--<a href="#">React to the future with isomorphic apps</a>--}}
                                        {{$rinda->nosaukums}}
                                    </h3>

                                    <p class="article-text">
                                        {!!$rinda->raksts!!}
                                    </p>

                                </div>

                                <div class="article-image">
                                    <img src="{{ asset($rinda->fotoLinks) }}">
                                </div>
                            @endif
                        </div>


                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>