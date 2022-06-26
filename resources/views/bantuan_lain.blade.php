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
<section class="bantuan" id="bantuan" style="padding-top:8%">
    <h1 class="heading">Bantuan Masyarakat <span>Terbaru</span> </h1>
        <div class="box-container">
        @foreach($bantuan_baru as $bantuan_baru)
            <div class="box" style="background-image:linear-gradient(to bottom, rgba(3, 15, 29, 0.7) 50%,rgba(3, 15, 29, 0.6) 100%), url('images/{{$bantuan_baru->gambar}}'); background-position: center">
                <h3 style="margin-top: 26%">{{$bantuan_baru->nama}}</h3>
                <a href="{{ url('bantuan') }}/{{$bantuan_baru->id_bantuan}}" class="btn" >Detail Bantuan</a>
            </div>
        @endforeach
        </div>
    <hr>
    <h1 class="heading">Bantuan <span>Lainnya</span> </h1>
        <div class="box-container">
            <table >
                <tr id="isi-info">
                    <th>Gambar</th>
                    <th>Nama bantuan</th>
                    <th>deskripsi</th>
                    <th>Syarat</th>
                    <th>Waktu</th>
                    <th>Lokasi</th>
                    <th>Sumber</th>
                </tr>
                @foreach($bantuan as $bantuan)
                    @php
                        $link = $bantuan->sumber;
                        $kelas = "";
                        if($link == null) {
                            $link = "#";
                            $kelas = "disabled";
                        }
                    @endphp
                <tr id="isi-info">
                    <td style="width:20%"><img src="/images/{{$bantuan->gambar}}" style='width:95%; height:auto;' alt=""></td>
                    <td style="width:10%">{{ $bantuan->nama }}</td>
                    <td style="width:25%">{{ $bantuan->deskripsi }}</td>
                    <td style="width:10%">{{ $bantuan->persyaratan}}</td>
                    <td style="width:7%">{{ $bantuan->waktu}}</td>
                    <td style="width:8%">{{ $bantuan->lokasi}}</td>
                    <td style="width:20%"><a style="width:95%; height:80%" class="btn {{$kelas}}" href={{$link}}>Kunjungi laman</a></td>
                </tr>
                @endforeach
            </table>
        </div>
    </section>
<!-- bantuan ends -->


@endsection
