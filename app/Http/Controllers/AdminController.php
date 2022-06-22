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
        return view('admin');
    }

    public function bantuan()
    {
        $bantuan = DB::table('bantuan')->get();
        return view('admin_bantuan', compact('bantuan'));
    }

    public function artikel()
    {
        return view('admin_artikel');
    }

    public function tambah()
    {
        return view('admin_tambah_bantuan');
    }
}
