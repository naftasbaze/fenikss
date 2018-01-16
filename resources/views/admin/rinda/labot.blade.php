@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-10 col-sm-10 col-md-offset-1">

            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3>
                        @if($rinda->nosaukums_lv)
                        {{$rinda->nosaukums_lv}}
                            @else
                            (bez virsraksta)
                            @endif
                             - labošana</h3>
                </div>

                <div class="panel-body">

                    <!-- Forma rindas labošanai-->
                    <form action="{{ url('/admin/rinda') }}/{{$rinda->id}}"
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
                            <!-- Izkārtojums -->
                            <div class="col-md-3">
                                <label>Novietojums</label>
                                <select class="form-control" name="izkartojums">
                                    <option value="0" @if($rinda->izkartojums == 0) selected="selected" @endif >Bilde pa labi</option>
                                    <option value="1"  @if($rinda->izkartojums == 1) selected="selected" @endif >Bilde pa kreisi</option>
                                </select>
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
                                <a href="{{{url('/admin/lapas')}}}/{{$rinda->lapa_id}}/rindas" class="btn btn-default"><i
                                            class="fa fa-btn fa-undo"> Atpakaļ </i></a>
                            </div>


                        </div>

                    </form>


                    {{--Bilde--}}
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-md-offset-3">

                                <label for="attels" class="control-label">Attēls</label>
                                @if($rinda->fotoLinks)

                                    <div class="block block-image v1">

                                        <div class="block-image">
                                            <div class="view view-first">
                                                <img src="{{ asset($rinda->fotoLinks )}}">
                                                <div class="mask">
                                                    <h2>Attēls tiks neatgriezeniski izdzēsts!</h2>
                                                    <p>&nbsp;</p>

                                                    <form method="POST" action="{{ url('admin/rindafoto/' . $rinda->id)}}">

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
                                    <form action="{{  url('admin/rindafoto') }}/{{$rinda->id}}/foto"
                                          class="dropzone"
                                          id="raksaBilde"
                                          method="POST">

                                        {{ csrf_field() }}
                                        {{method_field('PATCH')}}
                                    </form>

                                @endif

                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')

    @include('partials.flash')

    <script>
        Dropzone.options.raksaBilde = {
            paramName: 'bilde',
            dictDefaultMessage: 'Attēla izmēram jābūtvismaz 720x480 px',
            acceptedFiles: '.jpg, .png, .JPG',
            maxFiles: '1'
        }
    </script>

@endsection