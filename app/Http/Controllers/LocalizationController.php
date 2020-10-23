<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocalizationController extends Controller
{
    public function index(Request $request,$locale) {
      app()->setLocale($locale);
      return view('home');
   }
}