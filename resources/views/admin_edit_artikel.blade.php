@extends('template_admin')
@section('konten')
        <!-- Page Content  -->
        <div style="padding: 2%" class="cards mt-2 rounded-3">
          <h3 id="judul" >Ubah Artikel</h3>
          <h6 class="card-subtitle mb-2 text-muted">Ubah Data Informasi Artikel</h6>
          </br>
                <form action="{{ url('admin/admin_artikel/update', $artikel->id_artikel) }}" method="POST"
                    enctype="multipart/form-data">   
                    @csrf
                    <input type="hidden" class="form-control" name="id_artikel" value="">
                    <input type="hidden" class="form-control" name="id_admin" value="{{ $artikel->id_admin }}">
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul</label>
                        <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" required value="{{ $artikel->judul }}">
                        @error('judul')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar Lama</label></br>
                        <img src="{!! asset('images/' . $artikel->gambar . '') !!}" alt={{ $artikel->judul }}
                        style="max-height: 200px">
                        <p>{{ $artikel->gambar }}</p>
                        <input type="hidden" class="form-control" name="gambar_lama" value="{{ $artikel->gambar }}">
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
                        <label for="exampleInputPassword1" class="form-label">Detail </label>
                        <textarea class="form-control" name="detail" id="exampleFormControlTextarea1" rows="3">{{ $artikel->detail }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Tanggal </label>
                        <input type="date" class="form-control" name="tanggal" value="{{ $artikel->tanggal }}">
                    </div>         

                    <button type="button" class="btn btn-danger" onclick="history.back();">Kembali</button>
                    <button type="submit" class="btn btn-success" onclick="return confirm('Apakah Anda Yakin Ingin Mengubah Data?')">Ubah Data</button>

                </form>
            
</div>
@endsection