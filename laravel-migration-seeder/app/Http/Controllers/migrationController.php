<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class migrationController extends Controller
{
    public function homeFunction() {
         return view('pages.home');
   }
}
