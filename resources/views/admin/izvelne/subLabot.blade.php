@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-10 col-sm-10 col-md-offset-1">

            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3>Apakšizvēlnes labošana</h3>
            </div>

                <div class="panel-body">

                    <!-- Forma virsraksta labošanai-->
                    <form action="{{ url('/admin/submenu') }}/{{$submenu->id}}"
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
                                        <!-- Nosaukums LV -->
                                            <label for="nosaukums_lv" class="control-label">Nosaukums</label>
                                            <input type="text" name="nosaukums_lv" id="nosaukums_lv" class="form-control"
                                                   value="{{ old('nosaukums_lv', $submenu->nosaukums_lv ) }}">

                                    </div>
                                </div>

                                <div role="tabpanel" class="tab-pane" id="en">

                                    <div class="tab-body">
                                    <!-- Nosaukums EN -->
                                    <label for="nosaukums_en" class="control-label">Title</label>
                                    <input type="text" name="nosaukums_en" id="nosaukums_en" class="form-control"
                                           value="{{ old('nosaukums_en', $submenu->nosaukums_en ) }}">
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="ru">
                                    <div class="tab-body">

                                    <!-- Nosaukums RU -->
                                    <label for="nosaukums_ru" class="control-label">Название</label>
                                    <input type="text" name="nosaukums_ru" id="nosaukums_ru" class="form-control"
                                           value="{{ old('nosaukums_ru', $submenu->nosaukums_ru ) }}">
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="form-group">
                            <!-- Vieta -->
                            <div class="col-md-2">
                                <label for="vietaLimeni" class="control-label">Vieta līmenī </label>
                                <input type="text" name="vietaLimeni" id="vietaLimeni" class="form-control"
                                       value="{{ old('vietaLimeni', $submenu->vietaLimeni) }}">
                            </div>

                            <!-- Links -->
                            <div class="col-md-4">
                                <label>Zem izvēlnes ...</label>
                                <select class="form-control" name="topmenu_id">

                                    @foreach($topmenu as $viena)
                                        <option value="{{$viena->id}}"
                                        @if($viena->id==$submenu->topmenu_id)
                                                selected="selected"
                                                @endif
                                                >{{$viena->nosaukums_lv}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <!-- Publicēt  -->
                            <div class="col-sm-3">
                                <div class="checkbox">
                                    <input class="form-control" type="checkbox" name="aktivs" id="aktivs"
                                    @if ( old('aktivs',$submenu->aktivs)) checked="checked" @endif>
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
                                <a href="{{{url('/admin/izvelne')}}}" class="btn btn-default"><i
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

@endsection