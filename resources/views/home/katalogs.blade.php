@section('csscits')

    <link rel="stylesheet" type="text/css" href="{{ asset('/turn/css/basic.css') }}" media="screen" />
@endsection


<section class="slice sct-color-1 bb">
    <div class="container">
        @foreach ($lapa->rinda as $rinda)
        <div class="row">
            <div class="col-md-12">
                <div class="section-title-wrapper style-2 v1" id="{{$rinda->slug}}">
                    <h3 class="section-title section-title-sm left">
                        <span>{{$rinda->nosaukums}}</span>
                    </h3>
                </div>

                <div class="filip">
                    <div class="flipbook-viewport">
                        <div class="container">
                            <div class="flipbook article-image">

                                @foreach ($katalogs as $lappuse)
                                    <div style="background-image:url('{{ asset($lappuse->lpp) }}')">
                                       {{-- {{$lappuse->galerja->path}}--}}
                                        @if($lappuse->galerija_id <> 1)

                                            <a href="
                                            @if($lappuse->btn_links)
                                            {{$lappuse->btn_links}}
                                            @else
                                            {{$lappuse->galerja->foto[$lappuse->galerja->foto->count()-1]->path}}
                                            @endif
                                            "
                                               class="btn btn-lg {{$lappuse->btn_krasa}}"
                                               style="top: {{str_finish($lappuse->btn_top,'%')}}; margin-left: {{str_finish($lappuse->btn_left,'%')}};"
                                               data-fancybox="galerijaID-{{$lappuse->galerja->id}}">
                                                {{$lappuse->btnlabel}}
                                            </a>
                                        @endif
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        @endforeach
    </div>
</section>

{{--Galerias pašas $galerijas--}}

@foreach ($galerijas as $galerija)
    @foreach ($galerija->foto as $grafija)
        @if(! $loop->last)
            <a href="{{ asset($grafija->path) }}" data-fancybox="galerijaID-{{$galerija->id}}"
               data-thumb="{{ asset($grafija->thumbnail_path) }}">
            </a>
        @endif
    @endforeach
@endforeach