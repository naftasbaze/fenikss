@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-md-12 col-sm-12 ">{{--col-md-offset-1--}}
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3>Galerijas - {{$galerija->nosaukums}} - labošana</h3>
                </div>

                <div class="panel-body">



                        @foreach( $galerija->foto->chunk(4) as $set)
                            <div class="row">
                                @foreach($set as $photo)
                                    <div class="col-md-3">

                                        <div class="block block-image v1">

                                            <div class="block-image">
                                                <div class="view view-first">
                                                    <img src="{{asset( $photo->thumbnail_path) }}">
                                                    <div class="mask">
                                                        <h2>Attēls tiks neatgriezeniski izdzēsts!</h2>
                                                        <p>&nbsp;</p>

                                                        <form method="POST" action="{{url('admin/foto/' . $photo->id)}}">

                                                            {{ csrf_field() }}
                                                            {{method_field('DELETE')}}

                                                            <button type="submit" class="btn btn-6 btn-6c btn-base-5">
                                                                <i class="fa fa-btn fa-trash"></i>  Dzēst
                                                            </button>

                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                @endforeach
                            </div>
                        @endforeach


                </div>
            </div>
        </div>
    </div>


    {{--Drop zona--}}
    <div class="row">
        <div class="panel panel-success">
            <div class="panel-body">
                <form action="{{ url('admin/foto') }}/{{$galerija->id}}/add"
                      class="dropzone"
                      id="galerijafoto"
                      method="POST">

                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>

    <div class="col-sm-offset-1 col-sm-3">
        <a href="{{{url('/admin/lapas')}}}" class="btn btn-default"><i
                    class="fa fa-btn fa-undo"> Atpakaļ </i></a>
    </div>

@endsection

@section('scripts')
    @include('partials.flash')

    <script>
        Dropzone.options.galerijafoto = {
            paramName: 'photo',
            dictDefaultMessage: 'Nomet failus te!',
            acceptedFiles: '.jpg, .png, .JPG'
        }
    </script>
@endsection