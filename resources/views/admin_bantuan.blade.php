@extends('template_admin')
@section('konten')
        <!-- Page Content  -->

        <div style="padding: 2%" class="cards mt-2 rounded-3">
          <h3 id="judul" >Bantuan</h3>
          <h6 class="card-subtitle mb-2 text-muted">Tabel Data Informasi Bantuan</h6>
          <div class="d-grid gap-2 d-md-block mt-3"> 
            <a role="button" class="btn btn-primary" href="/admin/tambah_bantuan">Tambah</a> 
          </div>
        </div>

    <div class="table-responsive">
        <table class="table table-hover mt-2 text-center">
          
            <tr>
      
              <th>No</th>
              <th>Nama</th>
              <th>Gambar</th>
              <th>Deskripsi</th>
              <th class="">Aksi</th>
      
            </tr>
          
          @foreach($bantuan as $bantuan)
          @php
            $gambar = $bantuan->gambar;
            if ($bantuan->gambar == null) {
                $gambar = 'notfound.jpg';
            } 
          @endphp

            <tr>
              <td>{{$bantuan->id_bantuan}}</td>
              <td>{{$bantuan->nama}}</td>
              <td>
                <img src="{!! asset('images/' . $gambar . '') !!}" width="150"  class="img-fluid" alt="''.$bantuan->gambar.''">
              </td>
              <td>
                <textarea readonly class="form-control" id="exampleFormControlTextarea1" rows="3" >{{$bantuan->deskripsi}}</textarea>
              </td>
              <td> 
                <div class="d-grid gap-2 d-md-block"> 
                  <button class="btn btn-success">Ubah</button>  
                  <button class="btn btn-danger ">Hapus</button>
                </div>  
              </td>
    
            </tr>
          @endforeach
          </table>
    </div>
  </div>
    
</div>

@endsection