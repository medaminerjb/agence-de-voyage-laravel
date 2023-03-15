<?php
namespace App\Http\Controllers;
use App\Models\Home;
use App\Models\vacance;

class HomeController extends Controller
{

   public function show(HOME $home)
   {
       //
       return view('hotel',compact('home'));
   }


   public function __invoke()
       {
          $homes = Home::all();
          return view('home', compact('homes'));
       }

    }       

    