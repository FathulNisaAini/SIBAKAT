@extends('template')
@section('konten')

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>SIBAKAT</h3>
        <p>Sistem Informasi Bantuan Masyarakat</p>
        <a role="button" class="btn" data-bs-toggle="modal" data-bs-target="#loginModal">Masuk</a>
        {{-- Modal --}}
        @include('login-modal')


</section>

<!-- home section ends -->

<!-- tentang starts  -->

<section class="tentang" id="tentang">

    <h1 class="heading"> <span>Tentang</span> SIBAKAT </h1>

    <div class="row">

        <style>
            .content p {
                text-align: justify;
                text-justify: inter-word;
            }

            #logo_sibakat {
                    width: 80%;
                }

            @media screen and (min-width: 1037px) {
                #isi-info {
                    padding-right: 10%;
                }
            }

            @media screen and (max-width: 820px) {
                #logo_sibakat {
                    width: 60%;
                }
            }
        </style>

        <div class="image d-flex justify-content-center">
            <img src="images/logo.png" alt="Logo Sibakat" id="logo_sibakat">
        </div>

        <div class="content" style="padding-top: 10%; padding-bottom: 10%">
            <h3>Apa itu SIBAKAT ?</h3>
            <p id="isi-info">SIBAKAT Merupakan Sistem Informasi Bantuan Masyarakat yang memuat berbagai konten menarik dan penting untuk dibaca tentang bantuan sosial</p>
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
    <div style="display:flex; justify-content:center">
        <a href="{{ url('bantuan_lain') }}" class="btn" >Daftar Bantuan</a>
    </div>

</section>

<!-- bantuan ends -->
<!-- artikel section starts  -->

<section class="artikel" id="artikel">

    <h1 class="heading"> Artikel <span>Terbaru</span></h1>

    <div class="box-container">
        @foreach($artikel as $artikel)
        <div class="box">
            <div class="image">
                <img src="images/{{$artikel->gambar}}" alt="">
            </div>
            <div class="content">
                <a class="title" style="text-decoration: none;">{{$artikel->judul}}</a>
                <span>by {{$artikel->nama}} /{{ \Carbon\Carbon::parse($artikel->tanggal)->format('j F, Y') }}</span>
                <p>{{$artikel->judul}}</p>
                <p>{{$artikel->detail}}</p>
                <a href="{{ url('artikel') }}/{{$artikel->id_artikel}}" class="btn">selengkapnya</a>
            </div>
        </div>
        @endforeach
    </div>
    <div style="display:flex; justify-content:center">
        <a href="{{ url('artikel_lain') }}" class="btn" >Semua artikel</a>
    </div>
</section>

<!-- artikel section ends -->
@endsection
