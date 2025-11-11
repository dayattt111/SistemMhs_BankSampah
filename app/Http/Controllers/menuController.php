<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class menuController extends Controller
{
    // login & regist
    public function index(){
        return view('login');
    }
    public function Daftar(){
        return view('daftar');
    }
    public function backLogin(){
        return view('/');
    }

    //admin


    //petugas
    public function petugasDashboard(){
        return view('petugas/kelolaDataSampah');
    }


    //warga
}
