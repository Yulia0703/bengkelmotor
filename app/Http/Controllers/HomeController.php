<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'nama' => 'Doraemon',
            'pekerjaan' => 'Develover',
        ];
        
         return view('Home')->with($data);
    }
       
        public function contact()
        {
            return view('contact');
        }    
    }
    