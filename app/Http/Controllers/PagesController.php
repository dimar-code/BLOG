<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\CreateMessageRequest;

class PagesController extends Controller
{
    public function home(){
        return view('home');
     }
    public function booking(){
        return view('booking');
    }
    public function information(){
        return view('information');
    }
}
