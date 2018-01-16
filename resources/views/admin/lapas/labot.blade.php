@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-10 col-sm-10 col-md-offset-1">

            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3>Sadaļas - {{$vienaLapa->nosaukums_lv}} - labošana</h3>
            </div>

                <div class="panel-body">

                    <!-- Forma lapas labošanai-->
                    <form action="{{ url('/admin/lapas') }}/{{$vienaLapa->id}}"
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
                                                   value="{{ old('titleLV', $vienaLapa->nosaukums_lv ) }}">

                                    </div>
                                </div>

                                <div role="tabpanel" class="tab-pane" id="en">

                                    <div class="tab-body">
                                    <!-- Nosaukums EN -->
                                    <label for="titleEN" class="control-label">Title</label>
                                    <input type="text" name="titleEN" id="titleEN" class="form-control"
                                           value="{{ old('titleEN', $vienaLapa->nosaukums_en ) }}">
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="ru">
                                    <div class="tab-body">

                                    <!-- Nosaukums RU -->
                                    <label for="titleRU" class="control-label">Название</label>
                                    <input type="text" name="titleRU" id="titleRU" class="form-control"
                                           value="{{ old('titleRU', $vienaLapa->nosaukums_ru ) }}">
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="form-group">
                            <!-- Vieta -->
                            <div class="col-md-2">
                                <label for="vietaLimeni" class="control-label">Kārtas Nr.</label>
                                <input type="text" name="vietaLimeni" id="vietaLimeni" class="form-control"
                                       value="{{ old('vietaLimeni', $vienaLapa->vietaLimeni) }}">
                            </div>

                            {{--Tips--}}
                            <div class="col-md-2">
                            <label>Sadaļas tips</label>
                            <select class="form-control" name="tips">
                                <option value="0" @if($vienaLapa->tips == 0) selected="selected" @endif >Raksts</option>
                                <option value="1"  @if($vienaLapa->tips == 1) selected="selected" @endif >Galerija</option>
                                <option value="2"  @if($vienaLapa->tips == 2) selected="selected" @endif >Parallax</option>
                                <option value="3"  @if($vienaLapa->tips == 3) selected="selected" @endif > Rekvizīti</option>
                                <option value="4"  @if($vienaLapa->tips == 4) selected="selected" @endif > Video</option>
                                <option value="5"  @if($vienaLapa->tips == 5) selected="selected" @endif > Akcija</option>
                                <option value="6"  @if($vienaLapa->tips == 6) selected="selected" @endif > BUJ</option>
                                <option value="7"  @if($vienaLapa->tips == 7) selected="selected" @endif > Katalogs</option>
                            </select>
                            </div>

                        </div>

                        <div class="form-group">
                            <!-- Publicēt  -->
                            <div class="col-sm-3">
                                <div class="checkbox">
                                    <input class="form-control" type="checkbox" name="aktivs" id="aktivs"
                                    @if ( old('publicet',$vienaLapa->aktivs)) checked="checked" @endif>
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

@endsection