<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class DashboardController extends Controller
{
    public function index()
    {      
        $artikel = DB::table('artikel')
        ->join('admin', 'admin.id_admin', '=', 'artikel.id_admin')
        ->get();
        $bantuan = DB::table('bantuan')
        ->latest('id_bantuan')
        ->take(3)
        ->get();
        $admin = DB::table('admin')
        ->get();
        //dd($bantuan);
        return view('index', compact('artikel','bantuan','admin'));
    }

    public function login()
    {
        return view('login');
    }
}
