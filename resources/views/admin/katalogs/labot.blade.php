@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-10 col-sm-10 col-md-offset-1">

            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3>Kataloga lpp Nr. {{$katalogs->id}} - labošana</h3>
            </div>

                <div class="panel-body">

                    <!-- Forma lapas labošanai-->
                    <form action="{{ url('/admin/katalogs') }}/{{$katalogs->id}}"
                          method="POST" class="form-horizontal">

                        {{method_field('PATCH')}}

                        {{ csrf_field() }}

                        <div class="tabs-style-1" role="tabpanel">

                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#lv" aria-controls="lv" role="tab" data-toggle="tab">Latviski</a></li>
                                <li role="presentation"><a href="#en" aria-controls="lv" role="tab" data-toggle="tab">Angliski</a></li>
                                <li role="presentation"><a href="#ru" aria-controls="ru" role="tab" data-toggle="tab">Krieviski</a></li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="lv">

                                    <div class="tab-body">
                                        {{--Bilde LV--}}
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 col-md-offset-3">

                                                    <label for="attels" class="control-label">Attēls</label>
                                                    @if($katalogs->lpp_lv)

                                                        <div class="block block-image v1">

                                                            <div class="block-image">
                                                                <div class="view view-first">
                                                                    <img src="{{ asset($katalogs->lpp_lv )}}">
                                                                    <div class="mask">
                                                                        <h2>Attēls tiks neatgriezeniski izdzēsts!</h2>
                                                                        <p>&nbsp;</p>

                                                                        <form method="POST" action="{{ url('admin/katafoto/' . $katalogs->id)}}">

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

                                                        @else

                                                                <!-- Form uzlādēt teksts bildi-->
                                                        <form action="{{  url('admin/katafoto') }}/{{$katalogs->id}}/foto"
                                                              class="dropzone"
                                                              id="kataFotoLV"
                                                              method="POST">

                                                            {{ csrf_field() }}
                                                            {{method_field('PATCH')}}
                                                        </form>

                                                    @endif

                                                </div>
                                            </div>
                                        </div> {{--Bilde--}}


                                    </div>
                                </div>

                                <div role="tabpanel" class="tab-pane" id="en">

                                    <div class="tab-body">
                                        {{--Bilde LV--}}
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 col-md-offset-3">

                                                    <label for="attels" class="control-label">Attēls</label>
                                                    @if($katalogs->lpp_en)

                                                        <div class="block block-image v1">

                                                            <div class="block-image">
                                                                <div class="view view-first">
                                                                    <img src="{{ asset($katalogs->lpp_en )}}">
                                                                    <div class="mask">
                                                                        <h2>Attēls tiks neatgriezeniski izdzēsts!</h2>
                                                                        <p>&nbsp;</p>

                                                                        <form method="POST" action="{{ url('admin/katafoto/' . $katalogs->id)}}">

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

                                                        @else

                                                                <!-- Form uzlādēt teksts bildi-->
                                                        <form action="{{  url('admin/katafoto') }}/{{$katalogs->id}}/foto"
                                                              class="dropzone"
                                                              id="kataFotoEN"
                                                              method="POST">

                                                            {{ csrf_field() }}
                                                            {{method_field('PATCH')}}
                                                        </form>

                                                    @endif

                                                </div>
                                            </div>
                                        </div> {{--Bilde--}}


                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="ru">
                                    <div class="tab-body">
                                        {{--Bilde LV--}}
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 col-md-offset-3">

                                                    <label for="attels" class="control-label">Attēls</label>
                                                    @if($katalogs->lpp_ru)

                                                        <div class="block block-image v1">

                                                            <div class="block-image">
                                                                <div class="view view-first">
                                                                    <img src="{{ asset($katalogs->lpp_ru )}}">
                                                                    <div class="mask">
                                                                        <h2>Attēls tiks neatgriezeniski izdzēsts!</h2>
                                                                        <p>&nbsp;</p>

                                                                        <form method="POST" action="{{ url('admin/katafoto/' . $katalogs->id)}}">

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

                                                        @else

                                                                <!-- Form uzlādēt teksts bildi-->
                                                        <form action="{{  url('admin/katafoto') }}/{{$katalogs->id}}/foto"
                                                              class="dropzone"
                                                              id="kataFotoRU"
                                                              method="POST">

                                                            {{ csrf_field() }}
                                                            {{method_field('PATCH')}}
                                                        </form>

                                                    @endif

                                                </div>
                                            </div>
                                        </div> {{--Bilde--}}



                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="form-group">
                            <!-- Vieta -->
                            <div class="col-md-4">
                                <label for="vieta" class="control-label">Lpp Nr.</label>
                                <input type="text" name="vieta" id="vieta" class="form-control"
                                       value="{{ old('vieta', $katalogs->id) }}">
                            </div>

                            <!-- Saite uz galeriju -->
                            <div class="col-md-4">
                                <label>Saite uz galeriju</label>
                                <select class="form-control" name="galerija_id">

                                    @foreach($galerijas as $viena)
                                        <option value="{{$viena->id}}"
                                        @if($viena->id==$katalogs->galerija_id)
                                                selected="selected"
                                                @endif
                                                >{{$viena->nosaukums_lv}}</option>
                                    @endforeach
                                </select>

                            </div>
                        </div>

                        <div class="form-group">
                            <!-- Publicēt  -->
                            <div class="col-sm-4">
                                <div class="checkbox">
                                    <input class="form-control" type="checkbox" name="aktivs" id="aktivs"
                                    @if ( old('aktivs',$katalogs->aktivs)) checked="checked" @endif>
                                    <label>Publisks</label>
                                </div>
                            </div>
                        </div>

                        <!-- Add Buttons -->
                        <div class="form-group">

                            <div class="col-sm-offset-2 col-sm-3">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-btn fa-floppy-o"></i>  Saglabāt
                                </button>
                            </div>

                            <div class="col-sm-offset-1 col-sm-3">
                                <a href="{{{url('/admin/lapas')}}}" class="btn btn-default"><i
                                            class="fa fa-btn fa-undo"> Atpakaļ </i></a>
                            </div>

                        </div>



                    </form>

                </div>
            </div>
        </div>
    </div>

                @endsection

@section('scripts')

    @include('partials.flash')

    <script>
        Dropzone.options.kataFotoLV = {
            paramName: 'bilde',
            dictDefaultMessage: 'Attēla izmēram jābūtvismaz 720x480 px',
            acceptedFiles: '.jpg, .png, .JPG',
            maxFiles: '1'
        }
    </script>

    <script>
        Dropzone.options.kataFotoEN = {
            paramName: 'bilde',
            dictDefaultMessage: 'Attēla izmēram jābūtvismaz 720x480 px',
            acceptedFiles: '.jpg, .png, .JPG',
            maxFiles: '1'
        }
    </script>

    <script>
        Dropzone.options.kataFotoRU = {
            paramName: 'bilde',
            dictDefaultMessage: 'Attēla izmēram jābūtvismaz 720x480 px',
            acceptedFiles: '.jpg, .png, .JPG',
            maxFiles: '1'
        }
    </script>

@endsection