<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LangController extends Controller
{
    public function setLang($lang, Request $request)
    {
        $accept = ['en', 'ar'];
        if (!in_array($lang, $accept)) {
            $lang = 'ar';
        }
        $request->session()->put('lang', $lang);
        return back();
    }
}
