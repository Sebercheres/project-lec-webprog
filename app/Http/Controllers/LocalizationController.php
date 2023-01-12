<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocalizationController extends Controller
{
    //
    public function localization($language) {
        session()->put('mySession', $language);
        return redirect()->back();
    }
}
