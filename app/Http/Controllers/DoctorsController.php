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

   public function sort(Request $request,$locale,$sorter) {
      app()->setLocale($locale);
      if($sorter == 'lth'){
          $doctors = doctors::all()->sortBy('fees')->toArray();
      }
      else if($sorter == 'htl'){
          $doctors = doctors::all()->sortByDesc('fees')->toArray();
      }
      else if($sorter == 'rate'){
          $doctors = doctors::all()->sortByDesc('rate')->toArray();
      }
      return view('home',compact('doctors'));
   }

   public function filter(Request $request,$locale,$filter) {
      app()->setLocale($locale);
      if($filter == 'all'){
          $doctors = doctors::all()->toArray();
      }
      else{
          $doctors = doctors::all()->where('general_spec',$filter)->toArray();
      }
      return view('home',compact('doctors'));
   }
   public function search(Request $request,$locale,$search) {
      app()->setLocale($locale);
      $doctors = doctors::where('name_en', 'LIKE' ,'%' .$search. '%')->orWhere('name_ar', 'LIKE' ,'%' .$search. '%')->get();
      //$doctors_ar = doctors::where('name_ar', 'LIKE' ,'%' .$search. '%')->get();
      //$doctors = array_merge($doctors_ar,$doctors_en);
      return view('home',compact('doctors'));
   }
}
