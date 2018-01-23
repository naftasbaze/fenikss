<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Izveidot jaunu rindkopu
                <button type="button" class="btn btn-primary" data-toggle="modal"
                        data-target="#jaunaRinda"><i class="fa fa-btn fa-plus"></i>  Jauns</button>
            </div>
            <div class="panel-body">

                <div class="table-responsive">
                    <table class="table table-bordered table-hover" id="tbl-izvelne">
                        <thead>
                        <tr>
                            <th>Nr. p.k</th>
                            <th>Nosaukums</th>
                            <th>Statuss</th>

                            <th>Darbība</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($lapa->rinda as $rinda)

                            <tr>
                                <td>{{$rinda->vietaLimeni}}</td>
                                <td>
                                    @if($rinda->nosaukums_lv)
                                        {{$rinda->nosaukums_lv}}
                                    @else
                                    (bez nosaukuma)
                                    @endif
                                </td>
                                <td>
                                    @if($rinda->ir_publisks==1)
                                        Publisks
                                    @else
                                        Neaktīvs
                                    @endif
                                </td>


                                <td>
                                    <a href="{{{url('/admin/rinda')}}}/{{$rinda->id}}/labot" class="btn btn-info">
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


{{--Modal--}}
<div class="modal fade" id="jaunaRinda" tabindex="-1" role="dialog" >
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Ieraksti jaunās rindkopas nosaukumu (LV)</h4>
            </div>
            <div class="modal-body">
                <form  action="{{ url('/admin/rinda') }}" method="POST" >
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="vards" class="control-label">Nosaukums:</label>
                        <input type="text" class="form-control" id="nosaukums_lv" name="nosaukums_lv"
                               placeholder="Nosaukums LV">

                        <input type="text" hidden id="lapaID" name="lapaID" value="{{$lapa->id}}">
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