<?php

namespace App\Http\Controllers;

use Mail;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class ContactController extends Controller
{
    //

        public function getContactUsForm(Request $request){


        $this->validate($request, [
            'inputName' => 'required',
            'inputUzva' => 'required',
            'inputEpasts' => 'required|email',
            'inputTXT' => 'required|min:5|max:255'
        ]);


            Mail::send('contact.zinaNoWeb', ['data'=>$request], function($message) use ($request)
            {
                $message->from($request->inputEpasts, $request->inputName);
                $message->to('jkivils@inbox.lv', 'JKivils');
                $message->subject('ePasts no Fenikss-KO web lapas');
            });

            return \Redirect::back()->withSuccess( 'Paldies! Ziņa tika nosūtīta!' );


    }
}
