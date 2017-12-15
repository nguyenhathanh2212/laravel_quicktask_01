<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class LanguageController extends Controller
{
    public function changeLanguage(Request $request, $language)
    {
        $request->session()->put('language-select', $language);
        App::setLocale($language);
        
        return redirect()->back();
    }
}
