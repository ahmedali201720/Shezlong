<?php

namespace App\Http\Controllers;

use App\Models\doctors;
use Illuminate\Http\Request;

class DoctorsController extends Controller
{
    public function index(Request $request,$locale) {
      app()->setLocale($locale);
      $doctors = doctors::all()->toArray();
      return view('home',compact('doctors'));
   }
}
