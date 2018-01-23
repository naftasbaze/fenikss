@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-10 col-sm-10 col-md-offset-1">

            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3>Jautājuma -  {{str_limit( $rinda->nosaukums_lv, 50, '...')}} - labošana</h3>
            </div>

                <div class="panel-body">

                    <!-- Forma virsraksta labošanai-->
                    <form action="{{ url('/admin/buj') }}/{{$rinda->id}}"
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
                                        <label for="titleLV" class="control-label">Virsraksts</label>
                                        <input type="text" name="titleLV" id="titleLV" class="form-control"
                                               value="{{ old('titleLV', $rinda->nosaukums_lv ) }}">


                                        {{--Raksts--}}
                                        <label for="rakstsLV" class="control-label">Raksts</label>
                                        <textarea class="form-control" rows="10" cols="50"
                                                  name="rakstsLV" id="rakstsLV"
                                                  placeholder="Apraksts (līdz 250 zīmēm)">{{old('rakstsLV',$rinda->raksts_lv)}}
                                        </textarea>

                                    </div>
                                </div>

                                <div role="tabpanel" class="tab-pane" id="en">

                                    <div class="tab-body">
                                        <!-- Nosaukums EN -->
                                        <label for="titleEN" class="control-label">Virsraksts</label>
                                        <input type="text" name="titleEN" id="titleEN" class="form-control"
                                               value="{{ old('titleEN', $rinda->nosaukums_en ) }}">


                                        {{--Raksts--}}
                                        <label for="rakstsEN" class="control-label">Raksts</label>
                                        <textarea class="form-control" rows="10" cols="50"
                                                  name="rakstsEN" id="rakstsEN"
                                                  placeholder="Apraksts (līdz 250 zīmēm)">{{old('rakstsEN',$rinda->raksts_en)}}
                                        </textarea>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="ru">
                                    <div class="tab-body">

                                        <!-- Nosaukums RU -->
                                        <label for="titleRU" class="control-label">Virsraksts</label>
                                        <input type="text" name="titleRU" id="titleRU" class="form-control"
                                               value="{{ old('titleRU', $rinda->nosaukums_ru ) }}">


                                        {{--Raksts--}}
                                        <label for="rakstsRU" class="control-label">Raksts</label>
                                        <textarea class="form-control" rows="10" cols="50"
                                                  name="rakstsRU" id="rakstsRU"
                                                  placeholder="Apraksts (līdz 250 zīmēm)">{{old('rakstsRU',$rinda->raksts_ru)}}
                                        </textarea>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="form-group">
                            <!-- Vieta -->
                            <div class="col-md-2">
                                <label for="vietaLimeni" class="control-label">Kārtas Nr. </label>
                                <input type="text" name="vietaLimeni" id="vietaLimeni" class="form-control"
                                       value="{{ old('vietaLimeni', $rinda->vietaLimeni) }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <!-- Publicēt  -->
                            <div class="col-sm-3">
                                <div class="checkbox">
                                    <input class="form-control" type="checkbox" name="ir_publisks" id="ir_publisks"
                                    @if ( old('ir_publisks',$rinda->ir_publisks)) checked="checked" @endif>
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
        CKEDITOR.replace( 'rakstsLV' );
    </script>

    <script>
        CKEDITOR.replace( 'rakstsEN' );
    </script>

    <script>
        CKEDITOR.replace( 'rakstsRU' );
    </script>

@endsection