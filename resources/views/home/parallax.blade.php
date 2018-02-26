
@foreach ($lapa->rinda as $rinda)
    <section class="parallax-section parallax-section-1" style="background-image: url('{{ asset($rinda->fotoLinks) }}');">
        <div class="mask mask-1"></div>
        <div class="parallax-content">
            <h2 class="parallax-title white">{{$rinda->nosaukums}}</h2>
            <p class="c-white">
                {{$rinda->raksts}}
            </p>
            <div class="hidden-xs hidden-sm text-center mt-40">

                @if($rinda->poga1->count() > 0)
                <a href="#{{$rinda->poga1[0]->BtnLinks}}" class="btn btn-xl btn-b-blue">{{ $rinda->poga1[0]->nosaukums}}</a>
                @endif

                @if($rinda->poga2->count() > 0)
                <div class="visible-sm-block visible-xs-block"><br></div>
                <span class="light c-white" style="margin: 0 20px;">{{ Lang::get('viskas.or')}}</span>
                <div class="visible-sm-block visible-xs-block"><br></div>
                <a href="#{{$rinda->poga2[0]->BtnLinks}}" class="btn btn-xl btn-b-white">{{$rinda->poga2[0]->nosaukums}}</a>
                    @endif
            </div>
        </div>
    </section>
@endforeach

@if($lapa->id == 10)
    <a href="{{asset('images/bildes/akreditacija2017.jpg')}}" data-fancybox="albums-akreditacija"
       data-thumb="{{asset('images/bildes/akreditacija2017.jpg')}}">
    </a>
    <a href="{{asset('images/bildes/amatniecibasKamera.jpg')}}" data-fancybox="albums-akreditacija"
       data-thumb="{{asset('images/bildes/amatniecibasKamera.jpg')}}">
    </a>
@endif