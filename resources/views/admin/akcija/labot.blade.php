@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-10 col-sm-10 col-md-offset-1">

            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3>{{$lapa->nosaukums_lv}} - labošana</h3>
            </div>

                <div class="panel-body">

                    <!-- Forma virsraksta labošanai-->
                    <form action="{{ url('/admin/akcija') }}/{{$lapa->rinda[0]->id}}"
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
                                            <label for="titleLV" class="control-label">Nosaukums</label>
                                            <input type="text" name="titleLV" id="titleLV" class="form-control"
                                                   value="{{ old('titleLV', $lapa->rinda[0]->nosaukums_lv ) }}">

                                        {{--Raksts--}}
                                        <label for="rakstsLV" class="control-label">Apraksts</label>
                                        <textarea class="form-control" rows="5" cols="50"
                                                  name="rakstsLV" id="rakstsLV"
                                                  placeholder="Apraksts (līdz 250 zīmēm)">{{old('rakstsLV', $lapa->rinda[0]->raksts_lv)}}
                                        </textarea>

                                    </div>
                                </div>

                                <div role="tabpanel" class="tab-pane" id="en">

                                    <div class="tab-body">
                                    <!-- Nosaukums EN -->
                                    <label for="titleEN" class="control-label">Title</label>
                                    <input type="text" name="titleEN" id="titleEN" class="form-control"
                                           value="{{ old('titleEN', $lapa->rinda[0]->nosaukums_en ) }}">

                                        {{--Raksts--}}
                                        <label for="rakstsEN" class="control-label">Apraksts</label>
                                        <textarea class="form-control" rows="5" cols="50"
                                                  name="rakstsEN" id="rakstsEN"
                                                  placeholder="Apraksts (līdz 250 zīmēm)">{{old('rakstsEN', $lapa->rinda[0]->raksts_en)}}
                                        </textarea>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="ru">
                                    <div class="tab-body">

                                    <!-- Nosaukums RU -->
                                    <label for="titleRU" class="control-label">Название</label>
                                    <input type="text" name="titleRU" id="titleRU" class="form-control"
                                           value="{{ old('titleRU', $lapa->rinda[0]->nosaukums_ru ) }}">

                                        {{--Raksts--}}
                                        <label for="rakstsRU" class="control-label">Apraksts</label>
                                        <textarea class="form-control" rows="5" cols="50"
                                                  name="rakstsRU" id="rakstsRU"
                                                  placeholder="Apraksts (līdz 250 zīmēm)">{{old('rakstsRU', $lapa->rinda[0]->raksts_ru)}}
                                        </textarea>
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

@endsection