@extends('layouts.admin')

@section('content')


    {{--{{$izvelneVisa}}--}}

        @include('admin.katalogs.katTab')

    <div class="col-sm-offset-1 col-sm-3">
        <a href="{{{url('/admin/lapas')}}}" class="btn btn-default"><i
                    class="fa fa-btn fa-undo"> Atpakaļ </i></a>
    </div>


@endsection

@section('csscits')
        <!-- TABLE STYLES-->
        <link href="{{ asset('js/dataTables/dataTables.bootstrap.css') }}" rel="stylesheet" />

@endsection


@section('jscits')
        <!-- DATA TABLE SCRIPTS -->

        <script src="{{ asset('js/dataTables/jquery.dataTables.js') }}"></script>
        <script src="{{ asset('js/dataTables/dataTables.bootstrap.js') }}"></script>
        <script>
            $(document).ready(function () {
                $('#tbl-izvelne').DataTable({
                            order: [[0, "asc"]],
                            ordering: false,
                    language: {
                        search: "Meklēt: ",
                        lengthMenu:    " Rādīt _MENU_ ierakstus lapā",
                        info:           "Tiek rādīti _START_ līdz _END_ no _TOTAL_ ierakstiem",
                        infoEmpty:      "Tiek rādīti 0 līdz 0 no 0 ierakstiem",
                        infoFiltered:   "(filtrēti no _MAX_ ierakstiem)",
                        infoPostFix:    "",
                        loadingRecords: "Ielādē datus ...",
                        zeroRecords:    "Netika atrasti atbistoši ieaksti",
                        emptyTable:     "Tabulā nav ierakstu",
                        paginate: {
                            first:      "Pirmais",
                            previous:   "Iepriekšējais",
                            next:       "Nākošais",
                            last:       "Pēdējais"
                        },
                        aria: {
                            sortAscending:  ": kārtot augošā secībā",
                            sortDescending: ": kārtot dilstošā secībā"
                        }
                    }


                }
                );
            });


        </script>

@endsection

@section('scripts')
    @include('partials.flash')
@endsection