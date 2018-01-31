<!-- VIDEO COVER -->
@foreach ($lapa->rinda as $rinda)
    <section class="page-cover dynamic-page-cover video-cover" style="width: 100%; height: 500px;">

        <h3 class="title-xl c-white text-uppercase text-center strong-700" style="position: relative; top: 20%;">
            {{$rinda->nosaukums}}
        </h3>

        <!-- Center paragraph -->
        <p class="text-standard text-center c-white" style="position: relative; top: 25%;">
            {!!$rinda->raksts!!}
        </p>

        <div class="hidden-xs hidden-sm text-center" style="width: 100%; position: relative; top: 40%;">
            @if($rinda->poga1->count() > 0)
            <a href="#{{$rinda->poga1[0]->BtnLinks}}" class="btn btn-xl btn-b-blue mr-20">
                {{ $rinda->poga1[0]->nosaukums}}
            </a>
            @endif


                @if($rinda->poga2->count() > 0)
            <div class="visible-sm-block visible-xs-block"><br></div>
            <span class="light c-white" style="margin: 0 20px;">{{ Lang::get('viskas.or')}}</span>
            <div class="visible-sm-block visible-xs-block"><br></div>

            <a href="#{{$rinda->poga2[0]->BtnLinks}}" class="btn btn-xl btn-b-base-1 scroll-me">
                {{$rinda->poga2[0]->nosaukums}}
            </a>
                @endif
        </div>
    </section>
@endforeach