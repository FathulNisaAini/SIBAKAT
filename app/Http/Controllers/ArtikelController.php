<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Tiket;


class ArtikelController extends Controller
{
    public function index($id)
    {
        return view('admin_artikel');
    }

    public function publik_index($id)
    {
        $artikel = DB::table('artikel')
        ->where('id_artikel',$id)
        ->first();
        //dd($artikel);
        return view('artikel',compact('artikel'));
    }
}
