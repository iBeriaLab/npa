<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;


use App;
use Lang;

class LanguageController extends Controller
{
    /**
     * @desc
     * @request Ajax
     */
    public function changeLanguage(Request $request)
    {
        if($request->ajax()){
            $request->session()->put('locale', $request->locale);
            $request->session()->flash('alert-access',('app.Locale_Change_Success'));
        }
    }
}
