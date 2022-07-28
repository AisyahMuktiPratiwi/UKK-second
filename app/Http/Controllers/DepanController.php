<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepanController extends Controller
{
    //
    public function index(){
        return view('depan');
    }
    public function pesan(){
        return view('pesan');
    }
    public function kamar(){
        return view('kamar');
    }
    public function fasilitas(){
        return view('fasilitas');
    }
    public function detailfasilitas(){
        return view('detailfasilitas');
    }
    public function login(){
        return view('login');
    }
    public function register(){
        return view('register');
    }
}
