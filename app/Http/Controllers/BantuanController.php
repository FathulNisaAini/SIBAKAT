<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Tiket;


class BantuanController extends Controller
{
    public function index()
    {
        return view('admin_bantuan');
    }

    public function publik_index($id)
    {
        $bantuan = DB::table('bantuan')
        ->where('id_bantuan',$id)
        ->first();
        //dd($bantuan);
        return view('bantuan',compact('bantuan'));
    }

    public function lain()
    {
        $bantuan_baru = DB::table('bantuan')
        ->latest('id_bantuan')
        ->take(3)
        ->get();

        $bantuan = DB::table('bantuan')
        ->orderby('nama')
        ->get();
        return view('bantuan_lain',compact('bantuan','bantuan_baru'));
    }
}
