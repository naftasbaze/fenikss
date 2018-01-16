
@foreach ($lapa->rinda as $rinda)
<section class="parallax-section parallax-section-1" style="background-image: url('{{ asset($rinda->fotoLinks) }}');">
    <div class="mask mask-1"></div>
    <div class="parallax-content">
        <h1 class="parallax-title white">{{$rinda->nosaukums}}</h1>
        <p class="c-white">
           {{$rinda->raksts}}
        </p>
        <div class="text-center mt-40">
            <a href="#kontakti" class="btn btn-xl btn-b-blue">{{ Lang::get('viskas.contact')}}</a>
            <div class="visible-sm-block visible-xs-block"><br></div>
            <span class="light c-white" style="margin: 0 20px;">vai</span>
            <div class="visible-sm-block visible-xs-block"><br></div>
            <a href="#fotogalerija" class="btn btn-xl btn-b-white">{{ Lang::get('viskas.skatit')}}</a>
        </div>
    </div>
</section>
    @endforeach