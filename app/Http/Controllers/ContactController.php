<?php

namespace App\Http\Controllers;

use Mail;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Lang;

class ContactController extends Controller
{
    //

        public function getContactUsForm(Request $request){

            $data = Input::all();


            $rules = array (
                'inputName' => 'required',
                'inputUzva' => 'required',
                'inputEpasts' => 'required|email',
                'inputTXT' => 'required|min:5'
            );

            $validator = Validator::make ($data, $rules);

            if ($validator -> passes()) {

                Mail::send('contact.zinaNoWeb', ['data' => $data], function ($message) use ($data) {
                    $message->from('web@fenikssko.lv','kontaktu forma no web');
                    $message->to('web@fenikssko.lv', 'web@fenikssko');
                    $message->subject('ePasts no Fenikss-KO web lapas');
                });


                return Redirect::to('/home/#kontaktinfo')
                    ->with('nosutits', Lang::get('forma.paldies'));

            }else{
                //ja ir kļūda
                return Redirect::to('/home/#kontaktinfo')
                    ->withErrors($validator)
                    ->withInput();

            }

    }
}

