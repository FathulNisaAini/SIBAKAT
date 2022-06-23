<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Tiket;


class AdminController extends Controller
{
    public function index()
    {
        $bantuan = DB::table('bantuan')
        ->latest('id_bantuan')
        ->take(3)
        ->get();
        return view('admin', compact('bantuan'));
    }

    public function bantuan()
    {
        $bantuan = DB::table('bantuan')->get();
        return view('admin_bantuan', compact('bantuan'));
    }

    public function artikel()
    {
        $artikel = DB::table('artikel')
        ->join('admin', 'admin.id_admin', '=', 'artikel.id_admin')
        ->get();
        return view('admin_artikel', compact('artikel'));
    }

    public function tambah()
    {
        return view('admin_tambah_bantuan');
    }
}
