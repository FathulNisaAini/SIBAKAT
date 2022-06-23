@extends('template_admin')
@section('konten')
        <!-- Page Content  -->
        <div style="padding: 2%" class="cards mt-2 rounded-3">
          <h3 id="judul" >Tambah Artikel</h3>
          <h6 class="card-subtitle mb-2 text-muted">Tambah Data Informasi Artikel</h6>
          </br>
                <form action="/admin/admin_artikel/tambah" method="POST"
                    enctype="multipart/form-data">   
                    @csrf
                    <input type="hidden" class="form-control" name="id_artikel" value="">
                    <input type="hidden" class="form-control" name="id_admin" value="1">
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul</label>
                        <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" required value="{{ old('judul') }}">
                        @error('judul')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar</label>
                        <input class="form-control @error('gambar') is-invalid @enderror" type="file" id="gambar"
                            name="gambar" required>
                        @error('gambar')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Detail </label>
                        <textarea class="form-control" name="detail" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Tanggal </label>
                        <input type="date" class="form-control" name="tanggal">
                    </div>         

                    <button type="button" class="btn btn-danger" onclick="history.back();">Kembali</button>
                    <button type="submit" class="btn btn-success" onclick="return confirm('Apakah Anda Yakin Ingin Menambah Data?')">Tambah Data</button>

                </form>
            
</div>
@endsection