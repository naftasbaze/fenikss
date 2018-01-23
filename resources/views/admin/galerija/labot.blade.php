@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-10 col-sm-10 col-md-offset-1">

            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3>Galerijas - {{$galerija->nosaukums_lv}} - labošana</h3>
            </div>

                <div class="panel-body">

                    <!-- Forma virsraksta labošanai-->
                    <form action="{{ url('/admin/galerija') }}/{{$galerija->id}}"
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
                                               value="{{ old('nosaukums_lv', $galerija->nosaukums_lv ) }}">
                                        <!-- Apraksts LV -->
                                        <label for="apaksnos_lv" class="control-label">Apraksts</label>
                                        <input type="text" name="apaksnos_lv" id="apaksnos_lv" class="form-control"
                                               value="{{ old('apaksnos_lv', $galerija->apaksnos_lv ) }}">


                                    </div>
                                </div>

                                <div role="tabpanel" class="tab-pane" id="en">

                                    <div class="tab-body">
                                        <!-- Nosaukums EN -->
                                        <label for="nosaukums_en" class="control-label">Title</label>
                                        <input type="text" name="nosaukums_en" id="nosaukums_en" class="form-control"
                                               value="{{ old('nosaukums_en', $galerija->nosaukums_en ) }}">

                                        <!-- Apraksts EN -->
                                        <label for="apaksnos_en" class="control-label">Apraksts</label>
                                        <input type="text" name="apaksnos_en" id="apaksnos_en" class="form-control"
                                               value="{{ old('apaksnos_en', $galerija->apaksnos_en ) }}">
                                    </div>
                                </div>

                                <div role="tabpanel" class="tab-pane" id="ru">
                                    <div class="tab-body">

                                        <!-- Nosaukums RU -->
                                        <label for="nosaukums_ru" class="control-label">Название</label>
                                        <input type="text" name="nosaukums_ru" id="nosaukums_ru" class="form-control"
                                               value="{{ old('nosaukums_ru', $galerija->nosaukums_ru ) }}">

                                        <!-- Apraksts LV -->
                                        <label for="apaksnos_ru" class="control-label">Apraksts</label>
                                        <input type="text" name="apaksnos_ru" id="apaksnos_ru" class="form-control"
                                               value="{{ old('apaksnos_ru', $galerija->apaksnos_ru ) }}">
                                    </div>
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
                                <a href="{{url('/admin/lapas')}}" class="btn btn-default"><i
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