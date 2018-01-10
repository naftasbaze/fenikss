@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-10 col-sm-10 col-md-offset-1">

            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3>{{$rinda->nosaukums_lv}}</h3>
            </div>

                <div class="panel-body">

                    <!-- Forma virsraksta labošanai-->
                    <form action="{{ url('/admin/rinda') }}/{{$rinda->id}}"
                          method="POST" class="form-horizontal">

                        {{method_field('PATCH')}}

                        {{ csrf_field() }}

                        <div class="form-group ">

                            <!-- Nosaukums -->
                            <div class="col-sm-4">
                                <label for="visraks" class="control-label">Virsraksts</label>
                                <input type="text" name="visraks" id="visraks" class="form-control"
                                       value="{{ old('visraks', $rinda->nosaukums_lv ) }}">
                            </div>

                            <!-- Raksts -->
                            <div class="col-sm-7">
                                <label for="raksts" class="control-label">Saturs</label>
                                <input type="text" name="raksts" id="raksts" class="form-control"
                                       value="{{ old('raksts', $rinda->raksts_lv) }}">
                            </div>


                        </div>

                        <div class="form-group">
                            <!-- Links1 -->
                            <div class="col-md-8">
                                <label for="links1" class="control-label">Saite 1 </label>
                                <input type="text" name="links1" id="links1" class="form-control"
                                       value="{{ old('links1', $rinda->izkartojums) }}">
                            </div>
                            <!-- Poga1 -->
                            <div class="col-md-2">
                                <label for="poga1" class="control-label">Poga 1<small> zila</small></label>
                                <input type="text" name="poga1" id="poga1" class="form-control"
                                       value="{{ old('poga1', $rinda->ir_publisks) }}">
                            </div>
                        </div>


                        <div class="form-group">
                            <!-- Links2 -->
                            <div class="col-md-8">
                                <label for="links1" class="control-label">Saite 2 </label>
                                <input type="text" name="links2" id="links2" class="form-control"
                                       value="{{ old('links2', $rinda->ir_publisks) }}">
                            </div>
                            <!-- Poga2 -->
                            <div class="col-md-2">
                                <label for="poga1" class="control-label">Poga 2<small> sarkana</small></label>
                                <input type="text" name="poga2" id="poga2" class="form-control"
                                       value="{{ old('poga2', $rinda->ir_publisks) }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <!-- Links3 -->
                            <div class="col-md-8">
                                <label for="links1" class="control-label">Saite 3 </label>
                                <input type="text" name="links3" id="links3" class="form-control"
                                       value="{{ old('links3', $rinda->ir_publisks) }}">
                            </div>
                            <!-- Poga3 -->
                            <div class="col-md-2">
                                <label for="poga1" class="control-label">Poga 3<small> dzeltena</small></label>
                                <input type="text" name="poga3" id="poga3" class="form-control"
                                       value="{{ old('poga3', $rinda->ir_publisks) }}">
                            </div>
                        </div>


                        <div class="form-group">

                            <!-- Datums -->
                            {{--<div class="col-sm-3">
                                <label for="datums" class="control-label">Publicēt līdz</label>
                                <input type="text" name="datums" id="dp3" class="form-control date-picker" data-date-format="dd-mm-yyyy"
                                       value="{{ old('datums', $rinda->datums->format('d-m-Y') ) }}">

                            </div>--}}

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

                </div>
            </div>
        </div>
    </div>

                @endsection

@section('scripts')

    @include('partials.flash')



    <script>
        $(function () {
            $('[data-toggle="popover"]').popover({
                html : true,
                container: 'body'
            })
        })
    </script>

    <script>
        $( function() {
            $('#dp3').datepicker()
        } );
    </script>
@endsection