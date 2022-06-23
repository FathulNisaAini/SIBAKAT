<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Bantuan;
use App\Models\Artikel;


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

    // Bantuan
    public function bantuan()
    {
        $bantuan = DB::table('bantuan')->get();
        return view('admin_bantuan', compact('bantuan'));
    }

    public function button_tambah_bantuan()
    {
        return view('admin_tambah_bantuan');
    }

    public function tambah_bantuan(Request $request)
    {
        $this->validate($request, [
            'nama'          =>  'required',
            'gambar'        =>  'required|image|file|mimes:jpeg,png,jpg',
            'deskripsi'     =>  'required',
            'waktu'         =>  'required',
            'lokasi'        =>  'required',
            'sumber'        =>  'required',
            'persyaratan'   =>  'required',
        ]);

        // menyimpan data file yang diupload ke variabel $file
	    $file = $request->file('gambar');
	    $nama_file = time()."_".$file->getClientOriginalName();

        // isi dengan nama folder tempat kemana file diupload
	    $tujuan_upload = 'images';
	    $file->move($tujuan_upload,$nama_file);

        Bantuan::Create([
            'nama'          =>  $request->nama,
            'gambar'        =>  $nama_file,
            'deskripsi'     =>  $request->deskripsi,
            'waktu'         =>  $request->waktu,
            'lokasi'        =>  $request->lokasi,
            'sumber'        =>  $request->sumber,
            'persyaratan'   =>  $request->persyaratan,
        ]);

        return redirect('/admin/admin_bantuan');
    }

    // public function edit_bantuan($id)
    // {
    //     $bantuan = Bantuan::findOrFail($id);
    //     return view('admin_edit_bantuan', ['bantuan' => $bantuan]);
    // }

    public function hapus_bantuan($id)
    {
        DB::table('bantuan')->where('id_bantuan', $id)->delete();
        return redirect('/admin/admin_bantuan')->with('success',' Data Berhasil Dihapus!');
    }

    public function ubah_bantuan($id)
    {
        $bantuan = Bantuan::findOrFail($id);
        return view('admin_edit_bantuan', ['bantuan' => $bantuan]);
    }

    public function update_bantuan(Request $request, $id)
    {
        $this->validate($request, [
            'nama'          =>  'required',
            'gambar'        =>  'required|image|file|mimes:jpeg,png,jpg',
            'deskripsi'     =>  'required',
            'waktu'         =>  'required',
            'lokasi'        =>  'required',
            'sumber'        =>  'required',
            'persyaratan'   =>  'required',
        ]);

        // menyimpan data file yang diupload ke variabel $file
	    $file = $request->file('gambar');
	    $nama_file = time()."_".$file->getClientOriginalName();

        // isi dengan nama folder tempat kemana file diupload
	    $tujuan_upload = 'images';
	    $file->move($tujuan_upload,$nama_file);
        
        $bantuan                = Bantuan::find($id);
        $bantuan->nama          = $request->nama;
        $bantuan->gambar        = $nama_file;
        $bantuan->deskripsi     = $request->deskripsi;
        $bantuan->waktu         = $request->waktu;
        $bantuan->lokasi        = $request->lokasi;
        $bantuan->sumber        = $request->sumber;
        $bantuan->persyaratan   = $request->persyaratan;

        $bantuan->save();

        return redirect('/admin/admin_bantuan')->with('success',' Data telah diperbaharui!');
    }
    //End Bantuan

    //Artikel
    public function artikel()
    {
        $artikel = DB::table('artikel')
        ->join('admin', 'admin.id_admin', '=', 'artikel.id_admin')
        ->get();
        return view('admin_artikel', compact('artikel'));
    }

    public function button_tambah_artikel()
    {
        return view('admin_tambah_artikel');
    }

    public function tambah_artikel(Request $request)
    {
        $this->validate($request, [
            'judul'     =>  'required',
            'gambar'    =>  'required|image|file|mimes:jpeg,png,jpg',
            'tanggal'   =>  'required',
            'detail'    =>  'required',
            'id_admin'  =>  'required',
        ]);

        // menyimpan data file yang diupload ke variabel $file
	    $file = $request->file('gambar');
	    $nama_file = time()."_".$file->getClientOriginalName();

        // isi dengan nama folder tempat kemana file diupload
	    $tujuan_upload = 'images';
	    $file->move($tujuan_upload,$nama_file);

        Artikel::Create([
            'judul'    =>  $request->judul,
            'gambar'   =>  $nama_file,
            'detail'   =>  $request->detail,
            'tanggal'  =>  $request->tanggal,
            'id_admin' =>  $request->id_admin
        ]);

        return redirect('/admin/admin_artikel');
    }

    public function hapus_artikel($id)
    {
        DB::table('artikel')->where('id_artikel', $id)->delete();
        return redirect('/admin/admin_artikel')->with('success',' Data Berhasil Dihapus!');
    }

    public function ubah_artikel($id)
    {
        $artikel = Artikel::findOrFail($id);
        return view('admin_edit_artikel', ['artikel' => $artikel]);
    }

    public function update_artikel(Request $request, $id)
    {
        $this->validate($request, [
            'judul'     =>  'required',
            'gambar'    =>  'required|image|file|mimes:jpeg,png,jpg',
            'tanggal'   =>  'required',
            'detail'    =>  'required',
            'id_admin'  =>  'required',
        ]);

        // menyimpan data file yang diupload ke variabel $file
	    $file = $request->file('gambar');
	    $nama_file = time()."_".$file->getClientOriginalName();

        // isi dengan nama folder tempat kemana file diupload
	    $tujuan_upload = 'images';
	    $file->move($tujuan_upload,$nama_file);
        
        $artikel                = Artikel::find($id);
        $artikel->judul         = $request->judul;
        $artikel->gambar        = $nama_file;
        $artikel->detail        = $request->detail;
        $artikel->tanggal       = $request->tanggal;
        $artikel->id_admin       = $request->id_admin;
        $artikel->save();

        return redirect('/admin/admin_artikel')->with('success',' Data telah diperbaharui!');
    }
    //End Artikel

}
