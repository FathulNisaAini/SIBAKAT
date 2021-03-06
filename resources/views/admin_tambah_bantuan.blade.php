@extends('template_admin')
@section('konten')
        <!-- Page Content  -->
        <div style="padding: 2%" class="cards mt-2 rounded-3">
          <h3 id="judul" >Tambah Bantuan</h3>
          <h6 class="card-subtitle mb-2 text-muted">Tambah Data Informasi Bantuan</h6>
          </br>
                <form action="/admin/admin_bantuan/tambah" method="POST"
                    enctype="multipart/form-data">   
                    @csrf
                    <input type="hidden" class="form-control" name="id_bantuan" value="">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" required value="{{ old('nama') }}">
                        @error('nama')
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
                        <label for="exampleInputPassword1" class="form-label">Deskripsi </label>
                        <textarea class="form-control" name="deskripsi" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="persyaratan" class="form-label">Persyaratan</label>
                        <input type="text" class="form-control @error('persyaratan') is-invalid @enderror" name="persyaratan" required value="{{ old('persyaratan') }}">
                        @error('persyaratan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Waktu </label>
                        <input type="date" class="form-control" name="waktu">
                    </div>         

                    <div class="mb-3">
                        <label for="peryaratan" class="form-label">Lokasi</label>
                        <input type="text" class="form-control @error('lokasi') is-invalid @enderror" name="lokasi" required value="{{ old('lokasi') }}">
                        @error('lokasi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="sumber" class="form-label">Sumber</label>
                        <input type="text" class="form-control @error('sumber') is-invalid @enderror" name="sumber" required value="{{ old('sumber') }}">
                        @error('sumber')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button type="button" class="btn btn-danger" onclick="history.back();">Kembali</button>
                    <button type="submit" class="btn btn-success" onclick="return confirm('Apakah Anda Yakin Ingin Menambah Data?')">Tambah Data</button>

                </form>
            
</div>
@endsection