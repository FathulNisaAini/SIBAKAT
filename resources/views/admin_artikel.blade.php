@extends('template_admin')
@section('konten')
        <!-- Page Content  -->
        
      <div style="padding: 2%" class="cards mt-2 rounded-3">
      <h3 id="judul" >Artikel</h3>
      <h6 class="card-subtitle mb-2 text-muted">Tabel Data Informasi Artikel</h6>

      <div class="d-grid gap-2 d-md-block mt-3"> 
        <a role="button" class="btn btn-primary" href="/admin/admin_artikel/klik">Tambah</a> 
      </div>

      <div class="table-responsive">
          <table class="table table-hover mt-2 text-center">
              <tr>
        
                <th>No</th>
                <th>Judul</th>
                <th>Gambar</th>
                <th>Detail</th>
                <th>Uploader</th>
                <th>Tanggal</th>
                <th class="">Aksi</th>
        
              </tr>
            @foreach ($artikel as $artikel)
            @php
            $gambar = $artikel->gambar;
            if ($artikel->gambar == null) {
                $gambar = 'notfound.jpg';
            } 
            @endphp

              <tr>
                <td>{{$loop->iteration}}</td>
                <td>
                  <textarea readonly class="form-control" id="exampleFormControlTextarea1" rows="3" >{{$artikel->judul}}</textarea>                         
                </td>
                <td>
                  <img src="{!! asset('images/' . $gambar . '') !!}" width="150"  class="img-fluid" alt="''.$artikel->gambar.''">
                <td>
                  <textarea readonly class="form-control" id="exampleFormControlTextarea1" rows="3" >{{$artikel->detail}}</textarea>                
                </td>
                <td>{{$artikel->nama}}</td>
                <td>{{$artikel->tanggal}}</td>
                <td> 
                  <div class="d-grid gap-2 d-md-block"> 
                    <a role="button" class="btn btn-success" href="/admin/admin_artikel/ubah/{{$artikel->id_artikel}}">Ubah</a>  
                    <a role="button" class="btn btn-danger " 
                      href="/admin/admin_artikel/hapus/{{$artikel->id_artikel}}"
                      onclick="return confirm('Apakah anda yakin ingin menghapus data?');">Hapus</a>
                  </div>  
                </td>     
              </tr>
            @endforeach
          </table>
      </div>
    
  </div>

    @endsection