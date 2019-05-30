<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home (){
        return view('home');
    }
    public function acercade(){
        return view('acercade');
    }
    public function quienessomos (){
        return view('quienessomos');
    }
    public function servicios (){
        return view('servicios');
    }
    public function productos (){
        return view('productos');
    }
    public function contacto (){
        return view('contacto');
    }

}