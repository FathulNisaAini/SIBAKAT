@extends('template')
@section('konten')
<!-- bantuan starts  -->

<section class="bantuan" id="bantuan">
    <div class="d-flex justify-content-center" style="padding-top:8%">
        <div style="display:flex; justify-content:center">    
            <h class="heading">{{$artikel->judul}} </h1>    
            <img src="/images/{{$artikel->gambar}}" style='width:80%; height:auto' alt="">
        </div>
    </div>

    <div class="box-container" style="color:white; font-size:150%; width:80%; margin: auto;">
        <div class="card " style="border-color:white; border-style: solid; border-width:1px;">
            <div class="content">    
                <p>{{$artikel->detail}}<br></p>
                <p style="text-align:right">
                {{ \Carbon\Carbon::parse($artikel->tanggal)->format('j F, Y') }}<br></p>                
            </div>
        </div>
    </div>

    <div class="iq-pt-20">
            <button type="button" class="btn btn-danger" onclick="history.back();">Kembali</button>
    </div>

</section>
<!-- bantuan ends -->


@endsection
