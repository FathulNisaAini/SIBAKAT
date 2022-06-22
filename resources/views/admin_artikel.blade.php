@extends('template_admin')
@section('konten')
        <!-- Page Content  -->
        
        <div style="padding: 2%" class="cards mt-2 rounded-3">
    <h3 id="judul" >Artikel</h3>
    <h6 class="card-subtitle mb-2 text-muted">Tabel Data Informasi Artikel</h6>

    <div class="d-grid gap-2 d-md-block mt-3"> <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahModal">Tambah</button> </div>

    <div class="table-responsive">
        <table class="table table-hover mt-2 text-center">
            <tr>
      
              <th>No</th>
              <th>Nama</th>
              <th>Gambar</th>
              <th>Deskripsi</th>
              <th class="">Aksi</th>
      
            </tr>
      
            <tr>
              <td>1</td>
              <td>Bansos PKH Yang Cair Juni 2022</td>
              <td><img src="{!! asset('images/a1.jpg') !!}" width="150"  class="img-fluid" alt="Responsive image"></td>
              <td><textarea readonly class="form-control" id="exampleFormControlTextarea1" rows="3" >Bansos PKH Tahap II Kembali Disalurkan Pada Juni 2022. Bansos PKH Diberikan Bagi Keluarga Yang Terdaftar Dalam Data Terpadu Kesejahteraan Sosial (DTKS) Dan Sesuai Kategori Penerima PKH Menurut Kementerian Sosial (Kemensos)</textarea></td>
              <td> <div class="d-grid gap-2 d-md-block"> <button class="btn btn-success">Ubah</button>  <button class="btn btn-danger ">Hapus</button></div>  </td>
    
            </tr>
            <tr>
                <td>2</td>
                <td>BLT minyak goreng</td>
                <td><img src="{!! asset('images/bb.png') !!}" width="150"  class="img-fluid" alt="Responsive image"></td>
                <td><textarea readonly   class="form-control" id="exampleFormControlTextarea1" rows="3" > Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio dolores ex animi cupiditate deserunt accusantium consequuntur ab. Repudiandae atque laborum officia ipsa possimus libero rerum quam nostrum eaque! Laborum, magni!</textarea></td>
                <td> <div class="d-grid gap-2 d-md-block"> <button class="btn btn-success">Ubah</button>  <button class="btn btn-danger ">Hapus</button></div>  </td>
      
              </tr>
            <tr>
                <td>3</td>
                <td>BLT UMKM</td>
                <td><img src="{!! asset('images/bb.png') !!}" width="150"  class="img-fluid" alt="Responsive image"></td>
                <td><textarea readonly   class="form-control" id="exampleFormControlTextarea1" rows="3" > Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio dolores ex animi cupiditate deserunt accusantium consequuntur ab. Repudiandae atque laborum officia ipsa possimus libero rerum quam nostrum eaque! Laborum, magni!</textarea></td>
                <td> <div class="d-grid gap-2 d-md-block"> <button class="btn btn-success">Ubah</button>  <button class="btn btn-danger ">Hapus</button></div>  </td>
      
              </tr>
          </table>
    </div>
    
  </div>

    @endsection