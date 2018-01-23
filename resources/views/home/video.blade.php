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
            <a href="#{{$rinda->fotoLinks}}" class="btn btn-xl btn-b-blue mr-20">
                {{ Lang::get('viskas.contact')}}
            </a>

            <div class="visible-sm-block visible-xs-block"><br></div>
            <span class="light c-white" style="margin: 0 20px;">vai</span>
            <div class="visible-sm-block visible-xs-block"><br></div>

            <a href="#{{$rinda->fotoThumb}}" class="btn btn-xl btn-b-base-1 scroll-me">
                {{ Lang::get('viskas.skatit')}}
            </a>
        </div>
    </section>
@endforeach