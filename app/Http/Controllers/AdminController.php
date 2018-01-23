<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class AdminController extends Controller
{
    /**
     * Admin sākums
     */
    public function index()
    {

        return view('admin.home');
    }

}
