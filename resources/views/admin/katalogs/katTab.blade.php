<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Kataloga lappuses
                <button type="button" class="btn btn-primary" data-toggle="modal"
                        data-target="#jaunaKataLapa"><i class="fa fa-btn fa-plus"></i>  </button>
            </div>
            <div class="panel-body">

                <div class="table-responsive">
                    <table class="table table-bordered table-hover" id="tbl-izvelne">
                        <thead>
                        <tr>
                            <th>Nr. p.k</th>
                            <th>Attēls</th>
                            <th>Statuss</th>
                            <th>Darbība</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($katalogs as $lpp)

                            <tr>
                                <td>{{$lpp->vietaLimeni}}</td>
                                <td><img src='{{asset( $lpp->lpp_lv) }}' style='height:50px; width:50px'></td>
                                <td>
                                    @if($lpp->aktivs==1)
                                        Publisks
                                    @else
                                        Neaktīvs
                                    @endif
                                </td>

                                <td>
                                    <a href="{{{url('/admin/katalogs')}}}/{{$lpp->id}}/labot" class="btn btn-info">
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


{{--Modal JAUNS--}}
<div class="modal fade" id="jaunaKataLapa" tabindex="-2" role="dialog" >
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Vai izveidot jaunu kataloga lappusi?</h4>
            </div>
            <div class="modal-body">
                <form  action="{{ url('/admin/katalogs') }}" method="POST" >
                    {{ csrf_field() }}

                    <button type="button" class="btn btn-default" data-dismiss="modal">Atcelt</button>
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-btn fa-floppy-o"></i>  Izveidot
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
{{--Bidzas modal--}}