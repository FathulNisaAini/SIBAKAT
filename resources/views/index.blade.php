@extends('template')
@section('konten')

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>SIBAKAT</h3>
        <p>Sistem Informasi Bantuan Masyarakat</p>
        @foreach ($admin as $admin)
        <a role="button" class="btn" data-bs-toggle="modal" data-bs-target="#loginModal{{$admin->id_admin}}">Masuk</a>
        {{-- Modal --}}
        <div class="modal fade" id="loginModal{{$admin->id_admin}}" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="row align-items-center" style="width: 100%">
                                <div class="col-lg-11">
                                    <h5 align="center" class="modal-title" id="loginModalLabel"
                                        style="padding-left: 15%; color:#167594;">
                                        LOGIN ADMIN<br><b> SIBAKAT</b></h5>
                                </div>
                                <div class="col-1">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                            </div>
                        </div>
                        <div class="modal-body">
            
                            <!-- {{-- Alert --}}
                            @if (session()->has('loginError'))
                                <div class="alert alert-danger d-flex align-items-center" role="alert">
                                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                                        <use xlink:href="#exclamation-triangle-fill" />
                                    </svg>
                                    <div>
                                        {{ session('loginError') }}
                                    </div>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif
                            {{-- Alert End --}} -->
            
                            <form action="/login" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" name="email" id="email"
                                        class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"
                                        required>
                                    {{-- @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror --}}
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Password</label>
                                    <input type="password" name="password" id="password"
                                        class="form-control @error('password') is-invalid @enderror" required>
                                    {{-- @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror --}}
                                </div>
                                <center>
                                    <button type="submit" class="btn btn-primary" style="width: 100%">Login</button>
                                </center>
                            </form>
                            <!-- <center style="color: black">
                                Belum punya akun? Silahkan <a href="#" data-bs-toggle="modal"
                                    data-bs-target="#registrasiModal">Registrasi</a>
                            </center> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach


</section>

<!-- home section ends -->

<!-- tentang starts  -->

<section class="tentang" id="tentang">

    <h1 class="heading"> <span>Tentang</span> SIBAKAT </h1>

    <div class="row">

        <div class="image">
            <img src="images/logo.png" alt="">
        </div>

        <div class="content">
            <h3>Apa itu SIBAKAT ?</h3>
            <p>SIBAKAT Merupakan Sistem Informasi Bantuan Masyarakat yang memuat berbagai konten menarik dan penting untuk dibaca tentang bantuan sosial</p>
            <!--<a href="#" data-bs-toggle='modal' class="btn">Selengkapnya</a> selengkapnya mau diisi apa?-->
        </div>

    </div>

</section>

<!-- tentang ends -->

<!-- bantuan starts  -->

<section class="bantuan" id="bantuan">

    <h1 class="heading">Bantuan Masyarakat <span>Terbaru</span> </h1>

    <div class="box-container">

    @foreach($bantuan as $bantuan)
        <div class="box" style="background-image:linear-gradient(to bottom, rgba(3, 15, 29, 0.7) 50%,rgba(3, 15, 29, 0.6) 100%), url('images/{{$bantuan->gambar}}'); background-position: center">
            <h3 style="margin-top: 26%">{{$bantuan->nama}}</h3>
            <a href="{{ url('bantuan') }}/{{$bantuan->id_bantuan}}" class="btn" >Detail Bantuan</a>
        </div>
    @endforeach

    </div>

</section>

<!-- bantuan ends -->
<!-- artikel section starts  -->

<section class="artikel" id="artikel">

    <h1 class="heading"> Artikel</h1>

    <div class="box-container">
        @foreach($artikel as $artikel)
        <div class="box">
            <div class="image">
                <img src="images/{{$artikel->gambar}}" alt="">
            </div>
            <div class="content">
                <a href="#" class="title">{{$artikel->judul}}</a>
                <span>by {{$artikel->nama}} /{{ \Carbon\Carbon::parse($artikel->tanggal)->format('j F, Y') }}</span>
                <p>{{$artikel->judul}}</p>
                <p>{{$artikel->detail}}}</p>
                <a href="{{ url('artikel') }}/{{$artikel->id_artikel}}" class="btn">selengkapnya</a>
            </div>
        </div>
        @endforeach
    </div>

</section>

<!-- artikel section ends -->
@endsection
