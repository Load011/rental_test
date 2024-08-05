<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index(){
        return view('frontend.car');
    }

    public function  show(){
        return view('frontend.detail');
    }
}
