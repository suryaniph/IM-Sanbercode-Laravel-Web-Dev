<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaftarController extends Controller
{
    public function daftar (){
        return view("page.pendaftaran");
    }
    public function home(Request $request)
    {
        $fullname = $request->input('fullname');
        $bio = $request->input('bio');

        return view('page.home', ['fullname' => $fullname, 'bio' => $bio]);
    }
}
