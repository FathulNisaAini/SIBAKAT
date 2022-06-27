@extends('template')
@section('konten')
<!-- artikel starts  -->

<section class="artikel" id="artikel">
    <div class="d-flex justify-content-center" style="padding-top:8%">
        <div style="display:flex; justify-content:center">    
            <h1 class="heading">{{$artikel->judul}} </h1>    
        </div>
    </div>
    <div style="display:flex; justify-content:center">    
        <img src="/images/{{$artikel->gambar}}" style='width:80%; height:auto' alt=""> 
    </div>
    <div class="box-container" style="color:white; font-size:150%; width:80%; margin: auto; padding-top:2%;">
        <div class="card " style="border-color:white; border-style: solid; border-width:1px;background-color:transparent; padding:1%">
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
<!-- artikel ends -->


@endsection
