@extends('template')
@section('konten')

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>SIBAKAT</h3>
        <p>Sistem Informasi Bantuan Masyarakat</p>
        <a href="admin" class="btn">Masuk</a>
    </div>

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
