<!-- Jautājumi SECTION -->
<section class="slice sct-color-1 bb">
    <div class="container">
        <div class="row">


            <div class="col-md-10">
                <!-- Section title -->
                <div class="section-title-wrapper style-1 v1">
                    <h3 class="section-title left">
                        <span class="text-caps">{{$lapa->nosaukums}} </span>
                    </h3>
                </div>

                <!-- Collapse example -->
                <div class="collapse-wrapper " id="jautajumi">

                    @foreach ($lapa->rinda as $rinda)
                    <div class="">
                        <div class="">
                            <h4 class="lead">
                                <a data-toggle="collapse" data-parent="#jautajumi" href="#{{$rinda->slug}}" class="text-primary">
                                    {{$rinda->nosaukums}}
                                </a>
                            </h4>
                        </div>
                        <div id="{{$rinda->slug}}" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>
                                            {{$rinda->raksts}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach


                </div>

            </div>

        </div>
    </div>
</section>