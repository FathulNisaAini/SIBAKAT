<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIBAKAT</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="{!! asset('css/style.css') !!}">
    <link rel="shortcut icon" href="{!! asset('images/logo.png') !!}">

</head>
<body>
    
    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo">
        <img src="{!! asset('images/logo.png') !!}" alt="">
    </a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#tentang">tentang</a>
        <a href="#bantuan">bantuan</a>
        <a href="#artikel">artikel</a>
    </nav>

    <div class="icons">
        <a href="admin" class="btn">Masuk</a>
    </div>

</header>

<!-- header section ends -->

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
            <a href="#" data-bs-toggle='modal' class="btn">Selengkapnya</a>
        </div>

    </div>

</section>

<!-- tentang ends -->

<!-- bantuan starts  -->

<section class="bantuan" id="bantuan">

    <h1 class="heading">Bantuan <span>Masyarakat</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/logo.png" alt="">
            <h3>Bantuan UMKM</h3>
            <a href="#" class="btn">Detail Bantuan</a>
        </div>

        <div class="box">
            <img src="images/logo.png" alt="">
            <h3>Bantuan Anak-anak/Janda</h3>
            <a href="#" class="btn">Detail Bantuan</a>
        </div>

        <div class="box">
            <img src="images/logo.png" alt="">
            <h3>Bantuan Sosial</h3>
            <a href="#" class="btn">Detail Bantuan</a>
        </div>

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
                <span>by {{$artikel->uploader}} /{{ \Carbon\Carbon::parse($artikel->tanggal)->format('j F, Y') }}</span>
                <p>{{$artikel->judul}}</p>
                <p>{{$artikel->detail}}}</p>
                <a href="{{ url('artikel') }}/{{$artikel->id}}" class="btn">selengkapnya</a>
            </div>
        </div>
        @endforeach
    </div>

</section>

<!-- artikel section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="#" class="fab fa-pinterest"></a>
    </div>

    <div class="links">
        <a href="#home">home</a>
        <a href="#tentang">tentang</a>
        <a href="#bantuan">bantuan</a>
        <a href="#artikel">artikel</a>
    </div>

    <div class="credit">created by <span>MAMONIR</span> | all rights reserved</div>

</section>

<!-- footer section ends -->

















<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>