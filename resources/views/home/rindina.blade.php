

<section id="services" data-target="services" class="sct-color-2">
    <div class="one-page-slice">
        <div class="container">
            <div class="section-title-wrapper style-1 v1" id="{{$lapa->slug}}">
                <h3 class="section-title center arLinku">
                    {{--<a>
                    <img src="{{asset('images/favicon3.svg')}}"


                    </a>--}}
                    <span> {{$lapa->nosaukums}} </span>
                </h3>
            </div>
            <!-- Rinda -->
            @foreach ($lapa->rinda as $rinda)
                <div class="row">
                    <div class="col-md-12">
                        <div class="block article list style-1">

                            @if($rinda->izkartojums==1) {{--bilde pa kreisi--}}

                            @if ($rinda->fotoLinks)
                                <div class="article-image">
                                    <img src="{{ asset($rinda->fotoLinks) }}">
                                </div>
                            @endif

                            <div class="block-body right">
                                <h3 class="title">
                                    {{$rinda->nosaukums}}
                                </h3>

                                <p class="article-text">
                                    {!!$rinda->raksts!!}
                                </p>

                            </div>
                            @else

                                <div class="block-body left">
                                    <h3 class="title">
                                        {{$rinda->nosaukums}}
                                    </h3>

                                    <p class="article-text">
                                        {!!$rinda->raksts!!}
                                    </p>

                                </div>
                                @if ($rinda->fotoLinks)

                                    <div class="article-image">
                                        <img src="{{ asset($rinda->fotoLinks) }}">
                                    </div>
                                @endif
                            @endif
                        </div>


                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>