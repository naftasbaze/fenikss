<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Sadaļas
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
                        @foreach ($lapas as $lapa)

                            <tr>
                                <td>{{$lapa->vietaLimeni}}</td>
                                <td>{{$lapa->nosaukums_lv}}</td>
                                <td>
                                    @if($lapa->aktivs==1)
                                        Publisks
                                    @else
                                        Neaktīvs
                                    @endif
                                </td>
                                <td>{{$lapa->tips}}</td>

                                <td>
                                    <a href="{{{url('/admin/lapas')}}}/{{$lapa->id}}/rindas" class="btn btn-info">
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
<div class="modal fade" id="uzvardsModal" tabindex="-1" role="dialog" >
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Ieraksti jaunā audzēkņa vārdu un uzvārdu</h4>
            </div>
            <div class="modal-body">
                <form  action="{{ url('/admin/audzekni') }}" method="POST" >
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="vards" class="control-label">Vārds:</label>
                        <input type="text" class="form-control" id="vards" name="vards"
                               placeholder="Vārds">
                    </div>
                    <div class="form-group">
                        <label for="uzvards" class="control-label">Uzvārds:</label>
                        <input type="text" class="form-control" id="uzvards" name="uzvards"
                               placeholder="Uzvārds">
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