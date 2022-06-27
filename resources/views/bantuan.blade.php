@extends('template')
@section('konten')
<!-- bantuan starts  -->
<Style>
    .card{
        border-color:white; border-style: solid; border-width:1px; padding:1%; background-color:transparent;
    }
</Style>

<section class="bantuan" id="bantuan">
    <div class="d-flex justify-content-center" style="padding-top:8%">
        <div style="display:flex; justify-content:center">    
            <h1 class="heading" style="padding-top:10%">{{$bantuan->nama}} </h1>  <br>  
        </div>
    </div>
    <div style="display:flex; justify-content:center">    
        <img src="/images/{{$bantuan->gambar}}" style='width:80%; height:auto' alt="">
    </div>
    <div class="box-container" style="color:white; font-size:150%; width:80%; margin:auto;">
        <div class="card " style="">
            <div class="content">    
                <p>{{$bantuan->deskripsi}}<br></p>                
            </div>
        </div>

        <div class="card" style="">
            <div class="content">
                <p>
                Persyaratan:<br>
                {{$bantuan->persyaratan}}<br><br>
                Waktu Pendaftaran:<br>
                @php
                    $tersedia = $bantuan->waktu;
                    if($bantuan->waktu == null) $tersedia = "-"
                @endphp
                {{$tersedia}}<br><br>
                Lokasi:<br>
                {{$bantuan->lokasi}}<br><br>
                </p>
                <p style="text-align:right">
                Sumber:<br></p>
                <a style="float: right;" href="{{$bantuan->sumber}}">{{$bantuan->sumber}}</a>
            </div>
        </div>
    </div>

    <div class="iq-pt-20">
            <button type="button" class="btn btn-danger" onclick="history.back();">Kembali</button>
    </div>

</section>
<!-- bantuan ends -->


@endsection
