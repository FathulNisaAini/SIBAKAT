@extends('template')
@section('konten')
<!-- bantuan starts  -->
<style>
    #isi-info {
        color:white;
    }

    th{
        border-color:white;
        border-style: solid;
        border-width:1px;
        background-color:transparent;
        padding-left:1%;
        padding-right:1%;
    }

    td{
        border-color:white;
        border-style: solid;
        border-width:1px; 
        background-color:transparent;
        padding: 1%;
    }
</style>
<section class="artikel" id="artikel">

    <h1 class="heading">Semua <span>Artikel</span></h1>

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
</section>
<!-- bantuan ends -->


@endsection
