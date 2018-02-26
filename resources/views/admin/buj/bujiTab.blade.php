<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Jautājumi
                <button type="button" class="btn btn-primary" data-toggle="modal"
                        data-target="#jautajumiPlus"><i class="fa fa-btn fa-plus"></i>  </button>
            </div>
            <div class="panel-body">

                <div class="table-responsive">
                    <table class="table table-bordered table-hover" id="tbl-izvelne">
                        <thead>
                        <tr>
                            <th>Nr. p.k</th>
                            <th>Nosaukums</th>
                            <th>Statuss</th>
                            <th>Tips</th>
                            <th>Darbība</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($lapa->rinda as $rinda)

                            <tr>
                                <td>{{$rinda->vietaLimeni}}</td>
                                <td>{{$rinda->nosaukums_lv}}</td>
                                <td>
                                    @if($rinda->ir_publisks==1)
                                        Publisks
                                    @else
                                        Neaktīvs
                                    @endif
                                </td>
                                <td>{{$rinda->tips}}</td>

                                <td>
                                    <a href="{{{url('/admin/buj')}}}/{{$rinda->id}}/labot" class="btn btn-info">
                                        Labot
                                    </a>
                                </td>

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


{{--Modal JAUNS jautājums--}}
<div class="modal fade" id="jautajumiPlus" tabindex="-2" role="dialog" >
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Ieraksti jauno jautājumu!</h4>
            </div>
            <div class="modal-body">
                <form  action="{{ url('/admin/bujAdd') }}" method="POST" >
                    {{ csrf_field() }}
                    <input type="text" hidden id="lapaID" name="lapaID" value="{{$lapa->id}}">

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
                                    <label for="nosaukums_lv2" class="control-label">Jautājums</label>
                                    <input type="text" name="nosaukums_lv2" id="nosaukums_lv2" class="form-control"
                                           value="{{ old('nosaukums_lv2' ) }}">
                                    <!-- Apraksts LV -->
                                    <label for="raksts_lv2" class="control-label">Atbilde</label>
                                    <input type="text" name="raksts_lv2" id="raksts_lv2" class="form-control"
                                           value="{{ old('raksts_lv2' ) }}">


                                </div>
                            </div>

                            <div role="tabpanel" class="tab-pane" id="en2">

                                <div class="tab-body">
                                    <!-- Nosaukums EN -->
                                    <label for="nosaukums_en2" class="control-label">Question</label>
                                    <input type="text" name="nosaukums_en2" id="nosaukums_en2" class="form-control"
                                           value="{{ old('nosaukums_en2' ) }}">

                                    <!-- Apraksts EN -->
                                    <label for="raksts_en2" class="control-label">Answer</label>
                                    <input type="text" name="raksts_en2" id="raksts_en2" class="form-control"
                                           value="{{ old('raksts_en2' ) }}">
                                </div>
                            </div>

                            <div role="tabpanel" class="tab-pane" id="ru2">
                                <div class="tab-body">

                                    <!-- Nosaukums RU -->
                                    <label for="nosaukums_ru2" class="control-label">Вопрос</label>
                                    <input type="text" name="nosaukums_ru2" id="nosaukums_ru2" class="form-control"
                                           value="{{ old('nosaukums_ru2' ) }}">

                                    <!-- Apraksts LV -->
                                    <label for="raksts_ru2" class="control-label">Ответ</label>
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