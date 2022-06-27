@extends('template_admin')
@section('konten')
    <!-- Page Content  -->

    <div style="padding: 2%" class="cards mt-2 rounded-3">
        <h3 id="judul">Bantuan</h3>
        <h6 class="card-subtitle mb-2 text-muted">Tabel Data Informasi Bantuan</h6>
        <div class="d-grid gap-2 d-md-block mt-3">
            <a role="button" class="btn btn-primary" href="/admin/admin_bantuan/klik">Tambah</a>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-hover mt-2 text-center">

            <tr>

                <th>No</th>
                <th>Nama</th>
                <th>Gambar</th>
                <th>Deskripsi</th>
                <th>Persyaratan</th>
                <th>Waktu</th>
                <th>Lokasi</th>
                <th>Sumber</th>
                <th class="">Aksi</th>

            </tr>

            @foreach ($bantuan as $bantuan)
                @php
                    $gambar = $bantuan->gambar;
                    if ($bantuan->gambar == null) {
                        $gambar = 'notfound.jpg';
                    }
                @endphp
                <tr>

                    <td>{{ $loop->iteration }}</td>
                    <td>
                        <textarea readonly class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $bantuan->nama }}</textarea>
                    </td>
                    <td>
                        <img src="{!! asset('images/' . $gambar . '') !!}" width="150" class="img-fluid" alt="''.$bantuan->gambar.''">
                    </td>
                    <td>
                        <textarea readonly class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $bantuan->deskripsi }}</textarea>
                    </td>
                    <td>
                        <textarea readonly class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $bantuan->persyaratan }}</textarea>
                    </td>
                    <td>{{ $bantuan->waktu }}</td>
                    <td>{{ $bantuan->lokasi }}</td>

                    <td>
                        <textarea readonly class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $bantuan->sumber }}</textarea>
                    </td>
                    <td>
                        <div class="d-grid gap-2 d-md-block">
                            <a role="button" style="margin-bottom: 3%" class="btn btn-success"
                                href="/admin/admin_bantuan/ubah/{{ $bantuan->id_bantuan }}">Ubah</a>
                            <a role="button" class="btn btn-danger "
                                href="/admin/admin_bantuan/hapus/{{ $bantuan->id_bantuan }}"
                                onclick="return confirm('Apakah anda yakin ingin menghapus data?');">Hapus</a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
