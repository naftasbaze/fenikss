<section class="sct-color-1">
    <section class="bg-base-1">
        <div class="cta-wrapper">
            <div class="container">

                @foreach ($lapa->rinda as $rinda)
                <div class="row v-align-middle">
                    <div class="col-sm-9">
                        <h1 class="text-normal">
                            <strong>{{$rinda->nosaukums}}</strong>
                            {{$rinda->raksts}}
                        </h1>
                    </div>
                    <div class="col-sm-3">
                        <div class="cta-button">
                            <a href="#kontakti" class="btn-a btn-lg btn-1 btn-1a fa-long-arrow-right text-center">
                                {{ Lang::get('viskas.contact')}}
                            </a>
                        </div>
                    </div>
                </div>
                    @endforeach
            </div>
        </div>
    </section>
</section>