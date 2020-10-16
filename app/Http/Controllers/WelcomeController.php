<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asspost;

class WelcomeController extends Controller
{
   public function index(){
    $assposts=Asspost::orderby('postdate','Desc')->get();
    return view ('home',compact('assposts'));
     //  return view('welcome',["name"=>$slug]);
   } 
}
