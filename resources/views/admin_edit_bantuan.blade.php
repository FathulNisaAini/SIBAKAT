@extends('template_admin')
@section('konten')
        <!-- Page Content  -->
        <div style="padding: 2%" class="cards mt-2 rounded-3">
          <h3 id="judul" >Ubah Bantuan</h3>
          <h6 class="card-subtitle mb-2 text-muted">Ubah Data Informasi Bantuan</h6>
          </br>
                <form action="{{ url('admin/admin_bantuan/update', $bantuan->id_bantuan) }}" method="POST"
                    enctype="multipart/form-data">   
                    @csrf
                    <input type="hidden" class="form-control" name="id_bantuan" value="">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" required value="{{ $bantuan->nama }}">
                        @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar Lama</label></br>
                        <img src="{!! asset('images/' . $bantuan->gambar . '') !!}" alt={{ $bantuan->nama }}
                        style="max-height: 200px">
                        <p>{{ $bantuan->gambar }}</p>
                        <input type="hidden" class="form-control" name="gambar_lama" value="{{ $bantuan->gambar }}">
                    </div>

                    <div class="mb-3">
                        <label for="gambar" class="form-label">Upload Gambar Baru</label>
                        <input class="form-control @error('gambar') is-invalid @enderror" type="file" id="gambar"
                            name="gambar">
                        @error('gambar')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Deskripsi </label>
                        <textarea class="form-control" name="deskripsi" id="exampleFormControlTextarea1" rows="3">{{ $bantuan->deskripsi }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="persyaratan" class="form-label">Persyaratan</label>
                        <textarea class="form-control @error('persyaratan') is-invalid @enderror" name="persyaratan" rows="3" required>{{ $bantuan->persyaratan }}</textarea>                        @error('persyaratan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Waktu </label>
                        <input type="date" class="form-control" name="waktu" value="{{ $bantuan->waktu }}">
                    </div>         

                    <div class="mb-3">
                        <label for="peryaratan" class="form-label">Lokasi</label>
                        <input type="text" class="form-control @error('lokasi') is-invalid @enderror" name="lokasi" required value="{{ $bantuan->lokasi }}">
                        @error('lokasi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="sumber" class="form-label">Sumber</label>
                        <input type="text" class="form-control @error('sumber') is-invalid @enderror" name="sumber" required value="{{ $bantuan->sumber }}">
                        @error('sumber')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button type="button" class="btn btn-danger" onclick="history.back();">Kembali</button>
                    <button type="submit" class="btn btn-success" onclick="return confirm('Apakah Anda Yakin Ingin Mengubah Data?')">Ubah Data</button>

                </form>
            
</div>
@endsection