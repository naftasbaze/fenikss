@include('partials.errors')

<form class="mt-20" action="{{ action('ContactController@getContactUsForm') }}" method="post">


    {{ csrf_field() }}

    <div class="row">
        <div class="col-sm-6">
            <div class="form-group has-icon">
                <input type="text" class="form-control input-lg" id="inputName" name="inputName" placeholder="{{ Lang::get('forma.vards')}}" value="{{ old('inputName') }}">
                <span class="fa fa-user form-control-icon" aria-hidden="true"></span>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group has-icon">
                <input type="text" class="form-control input-lg" id="inputUzva" name="inputUzva" placeholder="{{ Lang::get('forma.uzvards')}}" value="{{ old('inputUzva') }}">
                <span class="fa fa-user form-control-icon" aria-hidden="true"></span>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <div class="form-group has-icon">
                <input type="text" class="form-control input-lg" id="inputEpasts"  name="inputEpasts" placeholder="{{ Lang::get('forma.email')}}" value="{{ old('inputEpasts') }}">
                <span class="fa fa-envelope-o form-control-icon" aria-hidden="true"></span>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group has-icon">
                <input type="text" class="form-control input-lg" id="inputPhone"   name="inputPhone" placeholder="{{ Lang::get('forma.phone')}}" value="{{ old('inputPhone') }}">
                <span class="fa fa-phone form-control-icon" aria-hidden="true"></span>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <textarea class="form-control" rows="5" name="inputTXT" placeholder="{{ Lang::get('forma.tekst')}}" >{{ old('inputTXT') }}</textarea>
        </div>
    </div>

    <button type="submit" class="btn btn-lg btn-base-1 mt-20">{{ Lang::get('forma.poga')}}</button>

</form>