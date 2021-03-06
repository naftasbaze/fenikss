@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-10 col-sm-10 col-md-offset-1">

            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3>Sadaļas - {{$lapa->nosaukums}} - satura labošana</h3>
            </div>

                <div class="panel-body">

                    <!-- Forma virsraksta labošanai-->
                    <form action="{{ url('/admin/video') }}/{{$lapa->rinda[0]->id}}"
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
                                        <label for="rakstsLV" class="control-label">Apakšvirrsraksts</label>
                                        <input type="text" name="rakstsLV" id="rakstsLV" class="form-control"
                                               value="{{ old('rakstsLV', $lapa->rinda[0]->raksts_lv ) }}">
                                    </div>
                                </div>

                                <div role="tabpanel" class="tab-pane" id="en">

                                    <div class="tab-body">
                                    <!-- Nosaukums EN -->
                                    <label for="titleEN" class="control-label">Title</label>
                                    <input type="text" name="titleEN" id="titleEN" class="form-control"
                                           value="{{ old('titleEN', $lapa->rinda[0]->nosaukums_en ) }}">

                                        {{--Raksts EN--}}
                                        <label for="rakstsEN" class="control-label">Apakšvirrsraksts</label>
                                        <input type="text" name="rakstsEN" id="rakstsEN" class="form-control"
                                               value="{{ old('rakstsEN', $lapa->rinda[0]->raksts_en ) }}">
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="ru">
                                    <div class="tab-body">

                                    <!-- Nosaukums RU -->
                                    <label for="titleRU" class="control-label">Название</label>
                                    <input type="text" name="titleRU" id="titleRU" class="form-control"
                                           value="{{ old('titleRU', $lapa->rinda[0]->nosaukums_ru ) }}">

                                        {{--Raksts RU--}}
                                        <label for="rakstsRU" class="control-label">Apakšvirrsraksts</label>
                                        <input type="text" name="rakstsRU" id="rakstsRU" class="form-control"
                                               value="{{ old('rakstsRU', $lapa->rinda[0]->raksts_ru ) }}">
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="form-group">

                            <!-- Pogas 1 Saite -->
                            <div class="col-sm-offset-1 col-md-4">
                                <label>Poga 1 uz sadaļu</label>
                                <select class="form-control" name="poga1">

                                    @foreach($pogas as $viena)
                                        <option value="{{$viena->id}}"
                                        @if($viena->id==$lapa->rinda[0]->poga1_id)
                                                selected="selected"
                                                @endif
                                                >{{$viena->nosaukums_lv}}</option>
                                    @endforeach
                                </select>

                            </div>

                            <!-- Pogas 2 Saite -->
                            <div class="col-sm-offset-1 col-md-4">
                                <label>Poga 2 uz sadaļu</label>
                                <select class="form-control" name="poga2">

                                    @foreach($pogas as $viena)
                                        <option value="{{$viena->id}}"
                                        @if($viena->id==$lapa->rinda[0]->poga2_id)
                                                selected="selected"
                                                @endif
                                                >{{$viena->nosaukums_lv}}</option>
                                    @endforeach
                                </select>

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