@extends('layouts.app')

@section('content')

    <div class="mask mask-2"></div>

    <!-- 404 Error section -->
    <section class="page-cover dynamic-page-cover">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                    <h1 class="heading-404">
                        4<i class="fa fa-question-circle"></i>4
                    </h1>

                    <div class="clearfix"></div>

                    <h3  class="heading heading-sm text-caps font-500 c-white pt-20">
                        {{ Lang::get('error.removed')}}
                    </h3>

                    <div class="text-center mt-40">
                        <a href="{{{url('/home')}}}" class="btn btn-xl btn-base-5">{{ Lang::get('error.back')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>



@stop


@section('jscits')

    <!-- Backstretch - It allows you to add a dynamically-resized, slideshow-capable background image to any page or element -->
    <script src="{{ asset('js/jquery.backstretch.js') }}"></script>
    <script>
        $.backstretch("{{ asset('images/videos/kaleji.png') }}");
    </script>

@stop