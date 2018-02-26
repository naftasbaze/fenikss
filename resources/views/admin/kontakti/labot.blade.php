@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-10 col-sm-10 col-md-offset-1">

            <div class="panel panel-success">
                <div class="panel-heading">
                    Kontaktinformācijas labošana
                    <button type="button" class="btn btn-green" data-toggle="modal"
                            data-target="#labotFormu"><i class="fa fa-btn fa-pencil "></i> Forma </button>
                </div>

                <div class="panel-body">

                    <!-- Forma virsraksta labošanai-->
                    <form action="{{ url('/admin/kontakti') }}/{{$kontakti->id}}"
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
                                        <label for="nosaukums_lv" class="control-label">Uzņēmuma nosaukums</label>
                                        <input type="text" name="nosaukums_lv" id="nosaukums_lv" class="form-control"
                                               value="{{ old('nosaukums_lv', $kontakti->nosaukums_lv ) }}">

                                        <!-- Adrese LV -->
                                        <label for="adrese_lv" class="control-label">Uzņēmuma adrese</label>
                                        <input type="text" name="adrese_lv" id="adrese_lv" class="form-control"
                                               value="{{ old('adrese_lv', $kontakti->adrese_lv ) }}">

                                        <div class="form-group">
                                            <div class="col-md-4">
                                                <!-- Banka nosLV -->
                                                <label for="banknos_lv" class="control-label">Banka virsraksts</label>
                                                <input type="text" name="banknos_lv" id="banknos_lv" class="form-control"
                                                       value="{{ old('banknos_lv', $kontakti->banknos_lv ) }}">
                                            </div>
                                            <div class="col-md-4">
                                                <!-- Banka LV -->
                                                <label for="banka_lv" class="control-label">Banka</label>
                                                <input type="text" name="banka_lv" id="banka_lv" class="form-control"
                                                       value="{{ old('banka_lv', $kontakti->banka_lv ) }}">
                                            </div>
                                            <div class="col-md-4">
                                                <!-- Konts LV -->
                                                <label for="kontaNr" class="control-label">Konts</label>
                                                <input type="text" name="kontaNr" id="kontaNr" class="form-control"
                                                       value="{{ old('kontaNr', $kontakti->kontaNr ) }}">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-4">
                                                <!-- Darba laiks LV -->
                                                <label for="dlaiknos_lv" class="control-label">Darbalaiks virsraksts</label>
                                                <input type="text" name="dlaiknos_lv" id="dlaiknos_lv" class="form-control"
                                                       value="{{ old('dlaiknos_lv', $kontakti->dlaiknos_lv  ) }}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-12">

                                                <!-- Darba laiks nos LV -->
                                                <label for="dlaiks_lv" class="control-label">Darbalaiks</label>
                                                <textarea class="form-control" rows="7" cols="50"
                                                          name="dlaiks_lv" id="dlaiks_lv"
                                                          placeholder="Darbalaiks (līdz 250 zīmēm)">{{old('dlaiks_lv',$kontakti->dlaiks_lv)}}
                                        </textarea>
                                            </div>
                                        </div>

                                        <!-- Nosaukums LV -->
                                        <label for="saits_lv" class="control-label">Mājas lapas virsraksts</label>
                                        <input type="text" name="saits_lv" id="saits_lv" class="form-control"
                                               value="{{ old('saits_lv', $kontakti->saits_lv ) }}">

                                        <!-- Nosaukums LV -->
                                        <label for="desription_lv" class="control-label">Mājas lapas apraksts</label>
                                        <input type="text" name="desription_lv" id="desription_lv" class="form-control"
                                               value="{{ old('desription_lv', $kontakti->desription_lv ) }}">

                                    </div>
                                </div>




                                <div role="tabpanel" class="tab-pane" id="en">

                                    <div class="tab-body">
                                        <!-- Nosaukums en -->
                                        <label for="nosaukums_en" class="control-label">Uzņēmuma nosaukums</label>
                                        <input type="text" name="nosaukums_en" id="nosaukums_en" class="form-control"
                                               value="{{ old('titleEN', $kontakti->nosaukums_en ) }}">

                                        <!-- Adrese en -->
                                        <label for="adrese_en" class="control-label">Uzņēmuma adrese</label>
                                        <input type="text" name="adrese_en" id="adrese_en" class="form-control"
                                               value="{{ old('adrese_en', $kontakti->adrese_en ) }}">

                                        <div class="form-group">
                                            <div class="col-md-4">
                                                <!-- Banka nosEN -->
                                                <label for="banknos_en" class="control-label">Banka virsraksts</label>
                                                <input type="text" name="banknos_en" id="banknos_en" class="form-control"
                                                       value="{{ old('banknos_en', $kontakti->banknos_en ) }}">
                                            </div>
                                            <div class="col-md-4">
                                                <!-- Banka EN -->
                                                <label for="banka_en" class="control-label">Banka</label>
                                                <input type="text" name="banka_en" id="banka_en" class="form-control"
                                                       value="{{ old('banka_en', $kontakti->banka_en ) }}">
                                            </div>
                                            {{--<div class="col-md-4">
                                                <!-- Konts EN -->
                                                <label for="kontaNrEN" class="control-label">Konts</label>
                                                <input type="text" name="kontaNrEN" id="kontaNrEN" class="form-control"
                                                       value="{{ old('kontaNrEN', $kontakti->kontaNr ) }}">
                                            </div>--}}
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-4">
                                                <!-- Darba laiks EN -->
                                                <label for="dlaiknos_en" class="control-label">Darbalaiks virsraksts</label>
                                                <input type="text" name="dlaiknos_en" id="dlaiknos_en" class="form-control"
                                                       value="{{ old('dlaiknos_en', $kontakti->dlaiknos_en  ) }}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-12">

                                                <!-- Darba laiks nos EN -->
                                                <label for="dlaiks_en" class="control-label">Darbalaiks</label>
                                                <textarea class="form-control" rows="7" cols="50"
                                                          name="dlaiks_en" id="dlaiks_en"
                                                          placeholder="Darbalaiks (līdz 250 zīmēm)">{{old('dlaiks_en',$kontakti->dlaiks_en)}}
                                        </textarea>
                                            </div>
                                        </div>

                                        <!-- Nosaukums EN -->
                                        <label for="saits_en" class="control-label">Mājas lapas virsraksts</label>
                                        <input type="text" name="saits_en" id="saits_en" class="form-control"
                                               value="{{ old('saits_en', $kontakti->saits_en ) }}">

                                        <!-- Nosaukums EN -->
                                        <label for="desription_en" class="control-label">Mājas lapas apraksts</label>
                                        <input type="text" name="desription_en" id="desription_en" class="form-control"
                                               value="{{ old('desription_en', $kontakti->desription_en ) }}">
                                    </div>
                                </div>


                                <div role="tabpanel" class="tab-pane" id="ru">
                                    <div class="tab-body">
                                        <!-- Nosaukums ru -->
                                        <label for="nosaukums_ru" class="control-label">Uzņēmuma nosaukums</label>
                                        <input type="text" name="nosaukums_ru" id="nosaukums_ru" class="form-control"
                                               value="{{ old('titleRU', $kontakti->nosaukums_ru ) }}">

                                        <!-- Adrese ru -->
                                        <label for="adrese_ru" class="control-label">Uzņēmuma adrese</label>
                                        <input type="text" name="adrese_ru" id="adrese_ru" class="form-control"
                                               value="{{ old('adrese_ru', $kontakti->adrese_ru ) }}">

                                        <div class="form-group">
                                            <div class="col-md-4">
                                                <!-- Banka nosRU -->
                                                <label for="banknos_ru" class="control-label">Banka virsraksts</label>
                                                <input type="text" name="banknos_ru" id="banknos_ru" class="form-control"
                                                       value="{{ old('banknos_ru', $kontakti->banknos_ru ) }}">
                                            </div>
                                            <div class="col-md-4">
                                                <!-- Banka RU -->
                                                <label for="banka_ru" class="control-label">Banka</label>
                                                <input type="text" name="banka_ru" id="banka_ru" class="form-control"
                                                       value="{{ old('banka_ru', $kontakti->banka_ru ) }}">
                                            </div>
                                            {{--<div class="col-md-4">
                                                <!-- Konts RU -->
                                                <label for="kontaNrRU" class="control-label">Konts</label>
                                                <input type="text" name="kontaNrRU" id="kontaNrRU" class="form-control"
                                                       value="{{ old('kontaNrRU', $kontakti->kontaNr ) }}">
                                            </div>--}}
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-4">
                                                <!-- Darba laiks EN -->
                                                <label for="dlaiknos_ru" class="control-label">Darbalaiks virsraksts</label>
                                                <input type="text" name="dlaiknos_ru" id="dlaiknos_ru" class="form-control"
                                                       value="{{ old('dlaiknos_ru', $kontakti->dlaiknos_ru  ) }}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-12">

                                                <!-- Darba laiks nos RU -->
                                                <label for="dlaiks_ru" class="control-label">Darbalaiks</label>
                                                <textarea class="form-control" rows="7" cols="50"
                                                          name="dlaiks_ru" id="dlaiks_ru"
                                                          placeholder="Darbalaiks (līdz 250 zīmēm)">{{old('dlaiks_ru',$kontakti->dlaiks_ru)}}
                                        </textarea>
                                            </div>
                                        </div>

                                        <!-- Nosaukums RU -->
                                        <label for="saits_ru" class="control-label">Mājas lapas virsraksts</label>
                                        <input type="text" name="saits_ru" id="saits_ru" class="form-control"
                                               value="{{ old('saits_ru', $kontakti->saits_ru ) }}">

                                        <!-- Nosaukums RU -->
                                        <label for="desription_ru" class="control-label">Mājas lapas apraksts</label>
                                        <input type="text" name="desription_ru" id="desription_ru" class="form-control"
                                               value="{{ old('desription_ru', $kontakti->desription_ru ) }}">



                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-1 col-sm-3">
                                <!-- Tel1 -->
                                <label for="tel1" class="control-label">Tālrunis 1</label>
                                <input type="text" name="tel1" id="tel1" class="form-control"
                                       value="{{ old('tel1', $kontakti->tel1 ) }}">

                            </div>

                            <div class="col-sm-offset-1 col-sm-3">
                                <label for="tel2" class="control-label">Tālrunis 2</label>
                                <input type="text" name="tel2" id="tel2" class="form-control"
                                       value="{{ old('tel2', $kontakti->tel2 ) }}">

                            </div>

                            <div class="col-sm-offset-1 col-sm-3">
                                <label for="tel3" class="control-label">Tālrunis 3</label>
                                <input type="text" name="tel3" id="tel3" class="form-control"
                                       value="{{ old('tel3', $kontakti->tel3 ) }}">

                            </div>

                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-1 col-sm-3">
                                <!-- Tel1 -->
                                <label for="registraNr" class="control-label">LR UR apliec. Nr.</label>
                                <input type="text" name="registraNr" id="registraNr" class="form-control"
                                       value="{{ old('registraNr', $kontakti->registraNr ) }}">

                            </div>

                            <div class="col-sm-offset-1 col-sm-3">
                                <label for="vienotaisNr" class="control-label">Vienotais reģ. Nr.</label>
                                <input type="text" name="vienotaisNr" id="vienotaisNr" class="form-control"
                                       value="{{ old('vienotaisNr', $kontakti->vienotaisNr ) }}">

                            </div>

                            <div class="col-sm-offset-1 col-sm-3">
                                <label for="pvnNr" class="control-label">PVN kods</label>
                                <input type="text" name="pvnNr" id="pvnNr" class="form-control"
                                       value="{{ old('pvnNr', $kontakti->pvnNr ) }}">

                            </div>

                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-1 col-sm-5">
                                <!-- Tel1 -->
                                <label for="epasts" class="control-label">e-pasts</label>
                                <input type="text" name="epasts" id="epasts" class="form-control"
                                       value="{{ old('epasts', $kontakti->epasts ) }}">

                            </div>

                            <div class="col-sm-offset-1 col-sm-5">
                                <label for="www" class="control-label">WWW</label>
                                <input type="text" name="www" id="www" class="form-control"
                                       value="{{ old('www', $kontakti->www ) }}">

                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-1 col-md-11">
                            <textarea class="form-control" rows="7" cols="50"
                                      name="keywords" id="keywords"
                                      placeholder="Atslēgas vārdi (līdz 250 zīmēm)">{{old('keywords',$kontakti->keywords)}}
                                </textarea>
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



    {{--Modal Labot Formu--}}
    <div class="modal fade" id="labotFormu" tabindex="-1" role="dialog" >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="exampleModalLabel">Kontaktu formas labošana</h4>
                </div>
                <div class="modal-body">
                    <form  action="{{ url('/admin/fotorinda') }}/{{$lapa->rinda[0]->id}}" method="POST" >
                        {{ csrf_field() }}
                        {{method_field('PATCH')}}

                        <div class="tabs-style-1" role="tabpanel">

                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#lvForma" aria-controls="lv" role="tab" data-toggle="tab">Latviski</a></li>
                                <li role="presentation"><a href="#enForma" aria-controls="lv" role="tab" data-toggle="tab">Angliski</a></li>
                                <li role="presentation"><a href="#ruForma" aria-controls="ru" role="tab" data-toggle="tab">Krieviski</a></li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="lvForma">

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

                                <div role="tabpanel" class="tab-pane" id="enForma">

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

                                <div role="tabpanel" class="tab-pane" id="ruForma">
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

@endsection

@section('scripts')

    @include('partials.flash')

    <script>
        CKEDITOR.replace( 'dlaiks_lv' );
    </script>

    <script>
        CKEDITOR.replace( 'dlaiks_en' );
    </script>

    <script>
        CKEDITOR.replace( 'dlaiks_ru' );
    </script>

@endsection