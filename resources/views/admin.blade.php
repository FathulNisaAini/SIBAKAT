    @extends('template_admin')
    @section('konten')
        <!-- Page Content  -->


        <div class="main-content">
            <div class="row" style="padding-right: 5px">
                <div class="card" style="width: 100%">
                    <div class="card-body">
                      <h3 class="card-title">Dashboard Admin</h3>
                      <h6 class="card-subtitle mb-2 text-muted">Selamat Datang di Halaman Admin, {{ auth()->user()->nama }}</h6>
                      {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                    </div>
                  </div>
            </div>
            {{-- <div class="row" style="padding-left: 15px">
                <p>Selamat Datang di Halaman Admin, {{ auth()->user()->nama }}</p>
            </div> --}}
            {{-- <div class="row" style="padding-left: 15px">
                <h3>&nbsp</h3>
            </div> --}}
            <div class="row" style="padding-left: 15px">
                <h4>Data Bantuan Terbaru</h4>
            </div>
            <div class="row">
                @foreach ($bantuan as $bantuan)
                    @php
                        $gambar = $bantuan->gambar;
                        if ($bantuan->gambar == null) {
                            $gambar = 'notfound.jpg';
                        }
                    @endphp
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-header">
                                <div class="icon icon-warning">
                                    <span class="material-icons"></span>
                                </div>
                            </div>
                            <div class="card-content">
                                <p class="category"><strong>{{ $bantuan->nama }}</strong></p>
                                <!-- <p class="category">
                                            <img src="{!! asset('images/' . $gambar . '') !!}" width="150"  class="img-fluid" alt="''.$bantuan->gambar.''">
                                        </p> -->
                                <h3 class="card-title"></h3>
                            </div>
                            <div class="card-footer" style="text-align: right">
                                <div class="stats">
                                    <i class="material-icons text-info">info</i>
                                    <a href="/admin/bantuan_admin">Berikut Detail Bantuan UMKM</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endsection
