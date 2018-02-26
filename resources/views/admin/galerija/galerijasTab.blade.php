<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                {{$lapa->nosaukums_lv}}

                <button type="button" class="btn btn-primary" data-toggle="modal"
                        data-target="#jaunaGalera"><i class="fa fa-btn fa-plus"></i>  </button>

                <button type="button" class="btn btn-green" data-toggle="modal"
                        data-target="#labotGaleriju"><i class="fa fa-btn fa-pencil "></i>  </button>
            </div>
            <div class="panel-body">

                <div class="table-responsive">
                    <table class="table table-bordered table-hover" id="tbl-izvelne">
                        <thead>
                        <tr>
                            <th>Nr. p.k</th>
                            <th>Nosaukums</th>
                            <th></th>
                            <th>Apakšnos.</th>
                            <th>Darbība</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($galerijas as $rinda)

                            <tr>
                                <td>{{$rinda->id}}</td>
                                <td>{{$rinda->nosaukums_lv}}</td>
                                <td>
                                    <a href="{{{url('/admin/galerija')}}}/{{$rinda->id}}/labot" class="fa fa-btn fa-pencil btn btn-green">
                                        {{--Labot--}}
                                    </a>
                                </td>
                                <td>{{$rinda->apaksnos_lv}}</td>

                                <td>

                                    <a href="{{{url('/admin/albums')}}}/{{$rinda->id}}/labot" class="btn btn-info">
                                        Foto
                                    </a>
                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <!--End Advanced Tables -->
    </div>
</div>
<!-- /. ROW  -->


{{--Modal Labot--}}
<div class="modal fade" id="labotGaleriju" tabindex="-1" role="dialog" >
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Galerijas labošana</h4>
            </div>
            <div class="modal-body">
                <form  action="{{ url('/admin/fotorinda') }}/{{$lapa->rinda[0]->id}}" method="POST" >
                    {{ csrf_field() }}
                    {{method_field('PATCH')}}

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
                                           value="{{ old('nosaukums_lv', $lapa->rinda[0]->nosaukums_lv ) }}">
                                    <!-- Apraksts LV -->
                                    <label for="raksts_lv" class="control-label">Apraksts</label>
                                    <input type="text" name="raksts_lv" id="raksts_lv" class="form-control"
                                           value="{{ old('raksts_lv', $lapa->rinda[0]->raksts_lv ) }}">


                                </div>
                            </div>

                            <div role="tabpanel" class="tab-pane" id="en">

                                <div class="tab-body">
                                    <!-- Nosaukums EN -->
                                    <label for="nosaukums_en" class="control-label">Title</label>
                                    <input type="text" name="nosaukums_en" id="nosaukums_en" class="form-control"
                                           value="{{ old('nosaukums_en', $lapa->rinda[0]->nosaukums_en ) }}">

                                    <!-- Apraksts EN -->
                                    <label for="raksts_en" class="control-label">Apraksts</label>
                                    <input type="text" name="raksts_en" id="raksts_en" class="form-control"
                                           value="{{ old('raksts_en', $lapa->rinda[0]->raksts_en ) }}">
                                </div>
                            </div>

                            <div role="tabpanel" class="tab-pane" id="ru">
                                <div class="tab-body">

                                    <!-- Nosaukums RU -->
                                    <label for="nosaukums_ru" class="control-label">Название</label>
                                    <input type="text" name="nosaukums_ru" id="nosaukums_ru" class="form-control"
                                           value="{{ old('nosaukums_ru', $lapa->rinda[0]->nosaukums_ru ) }}">

                                    <!-- Apraksts LV -->
                                    <label for="raksts_ru" class="control-label">Apraksts</label>
                                    <input type="text" name="raksts_ru" id="raksts_ru" class="form-control"
                                           value="{{ old('raksts_ru', $lapa->rinda[0]->raksts_ru ) }}">
                                </div>
                            </div>
                        </div>

                    </div>

                    <button type="button" class="btn btn-default" data-dismiss="modal">Atcelt</button>
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-btn fa-floppy-o"></i>  Saglabāt
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
{{--Bidzas modal--}}

{{--Modal JAUNS--}}
<div class="modal fade" id="jaunaGalera" tabindex="-2" role="dialog" >
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Ieraksti jaunās galerijas nosaukumu</h4>
            </div>
            <div class="modal-body">
                <form  action="{{ url('/admin/fotorinda') }}" method="POST" >
                    {{ csrf_field() }}

                    <div class="tabs-style-1" role="tabpanel">

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#lv2" aria-controls="lv2" role="tab" data-toggle="tab">Latviski</a></li>
                            <li role="presentation"><a href="#en2" aria-controls="en2" role="tab" data-toggle="tab">Angliski</a></li>
                            <li role="presentation"><a href="#ru2" aria-controls="ru2" role="tab" data-toggle="tab">Krieviski</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="lv2">

                                <div class="tab-body">
                                    <!-- Nosaukums LV -->
                                    <label for="nosaukums_lv2" class="control-label">Nosaukums</label>
                                    <input type="text" name="nosaukums_lv2" id="nosaukums_lv2" class="form-control"
                                           value="{{ old('nosaukums_lv2' ) }}">
                                    <!-- Apraksts LV -->
                                    <label for="raksts_lv2" class="control-label">Apraksts</label>
                                    <input type="text" name="raksts_lv2" id="raksts_lv2" class="form-control"
                                           value="{{ old('raksts_lv2' ) }}">


                                </div>
                            </div>

                            <div role="tabpanel" class="tab-pane" id="en2">

                                <div class="tab-body">
                                    <!-- Nosaukums EN -->
                                    <label for="nosaukums_en2" class="control-label">Title</label>
                                    <input type="text" name="nosaukums_en2" id="nosaukums_en2" class="form-control"
                                           value="{{ old('nosaukums_en2' ) }}">

                                    <!-- Apraksts EN -->
                                    <label for="raksts_en2" class="control-label">Apraksts</label>
                                    <input type="text" name="raksts_en2" id="raksts_en2" class="form-control"
                                           value="{{ old('raksts_en2' ) }}">
                                </div>
                            </div>

                            <div role="tabpanel" class="tab-pane" id="ru2">
                                <div class="tab-body">

                                    <!-- Nosaukums RU -->
                                    <label for="nosaukums_ru2" class="control-label">Название</label>
                                    <input type="text" name="nosaukums_ru2" id="nosaukums_ru2" class="form-control"
                                           value="{{ old('nosaukums_ru2' ) }}">

                                    <!-- Apraksts LV -->
                                    <label for="raksts_ru2" class="control-label">Apraksts</label>
                                    <input type="text" name="raksts_ru2" id="raksts_ru2" class="form-control"
                                           value="{{ old('raksts_ru2' ) }}">
                                </div>
                            </div>
                        </div>

                    </div>

                    <button type="button" class="btn btn-default" data-dismiss="modal">Atcelt</button>
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-btn fa-floppy-o"></i>  Saglabāt
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
{{--Bidzas modal--}}