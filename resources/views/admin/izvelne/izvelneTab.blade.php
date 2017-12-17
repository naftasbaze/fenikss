<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Izvēlnes (menu)
            </div>
            <div class="panel-body">

                <div class="table-responsive">
                    <table class="table table-bordered table-hover" id="tbl-izvelne">
                        <thead>
                        <tr>
                            <th>Vieta</th>
                            <th>Nosaukums</th>
                            <th>Название</th>
                            <th>Title</th>
                            <th>Statuss</th>
                            <th>Darbība</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($izvelneVisa as $punkts)

                            <tr
                                    @if ($punkts->aktivs==1)
                                class="success"
                                @else
                                    class="warning"
                                    @endif>


                                <td>{{$punkts->vietaLimeni}}</td>
                                <td>{{$punkts->nosaukums_lv}}</td>
                                <td>{{$punkts->nosaukums_ru}}</td>
                                <td>{{$punkts->nosaukums_en}}</td>
                                <td>
                                    @if($punkts->aktivs==1)
                                        Publisks
                                    @else
                                        Neaktīvs
                                    @endif
                                </td>

                                <td>
                                    <a href="{{{url('/admin/izvelne')}}}/{{$punkts->id}}/labot" class="btn btn-info">
                                        Labot
                                    </a>
                                </td>



                            </tr>

                                @foreach ($punkts->submenu as $subpunkts )
                            <tr class="info">
                                    <td>{{$punkts->vietaLimeni}}.{{$subpunkts->vietaLimeni}}</td>
                                    <td>{{$subpunkts->nosaukums_lv}}</td>
                                    <td>{{$subpunkts->nosaukums_ru}}</td>
                                    <td>{{$subpunkts->nosaukums_en}}</td>
                                <td>
                                    @if($punkts->aktivs==1)
                                        Publisks
                                    @else
                                        Neaktīvs
                                    @endif
                                </td>
                                <td>
                                    <a href="{{{url('/admin/submenu')}}}/{{$subpunkts->id}}/labot" class="btn btn-info">
                                        Labot
                                    </a>
                                </td>
                            </tr>
                                @endforeach

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