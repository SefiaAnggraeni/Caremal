<?php

namespace App\Http\Controllers;

use App\Models\ArtikelPublic;
use Illuminate\Http\Request;

class ArtikelPublicController extends Controller
{
    public function artikel()
    {
        $data = ArtikelPublic::all();
        //return view('artikel', compact('data'));

        dd($data);
    
    }

}


