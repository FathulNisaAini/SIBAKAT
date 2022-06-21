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
        <a href="#anggota">anggota</a>
        <a href="#kontak">kontak</a>
        <a href="#artikel">artikel</a>
    </nav>

    <div class="icons">
        <a href="#" class="btn">Masuk</a>
    </div>

    <div class="cart-items-container">
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="images/cart-item-1.png" alt="">
            <div class="content">
                <h3>cart item 01</h3>
                <div class="price">$15.99/-</div>
            </div>
        </div>
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="images/cart-item-2.png" alt="">
            <div class="content">
                <h3>cart item 02</h3>
                <div class="price">$15.99/-</div>
            </div>
        </div>
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="images/cart-item-3.png" alt="">
            <div class="content">
                <h3>cart item 03</h3>
                <div class="price">$15.99/-</div>
            </div>
        </div>
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="{!! asset('images/cart-item-4.png') !!}" alt="">
            <div class="content">
                <h3>cart item 04</h3>
                <div class="price">$15.99/-</div>
            </div>
        </div>
        <a href="#" class="btn">checkout now</a>
    </div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>SIBAKAT</h3>
        <p>Sistem Informasi Bantuan Masyarakat</p>
        <a href="#" class="btn">Masuk</a>
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
            <a href="#" class="btn">Selengkapnya</a>
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

<!-- anggota starts -->

<section class="anggota" id="anggota">

    <h1 class="heading">  <span>Anggota</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/quote-img.png" alt="" class="quote">
            <p>Anggota</p>
            <img src="images/foto1 (3).jpeg" class="user" alt="">
            <h3>Mu'adz</h3>
        </div>

        <div class="box">
            <img src="images/quote-img.png" alt="" class="quote">
            <p>Anggota</p>
            <img src="images/foto1 (1).jpeg" class="user" alt="">
            <h3>Fathul Nisa Aini</h3>
        </div>
        
        <div class="box">
            <img src="images/quote-img.png" alt="" class="quote">
            <p>Manager Proyek</p>
            <img src="images/foto1 (5).png" class="user" alt="">
            <h3>Jovian Nathaniel Ulhaq</h3>
        </div>

        <div class="box">
            <img src="images/quote-img.png" alt="" class="quote">
            <p>Anggota</p>
            <img src="images/foto1 (2).jpeg" class="user" alt="">
            <h3>Muhammad Azhar Ibnu W</h3>
        </div>

        <div class="box">
            <img src="images/quote-img.png" alt="" class="quote">
            <p>Anggota</p>
            <img src="images/foto1 (4).jpeg" class="user" alt="">
            <h3>Indra Kusuma Ananta Adimanggala</h3>
        </div>

    </div>

</section>

<!-- anggota ends -->

<!-- contact section starts  -->

<section class="contact" id="kontak">

    <h1 class="heading"> Kontak </h1>

    <div class="row">

        <form action="">
            <div class="inputBox">
                <span class="fas fa-user"></span>
                <input type="text" placeholder="nama">
            </div>
            <div class="inputBox">
                <span class="fas fa-envelope"></span>
                <input type="email" placeholder="email">
            </div>
            <div class="inputBox">
                <span class="fas fa-phone"></span>
                <input type="number" placeholder="nomer">
            </div>
            <input type="submit" value="kontak" class="btn">
        </form>

    </div>

</section>

<!-- contact section ends -->

<!-- artikel section starts  -->

<section class="artikel" id="artikel">

    <h1 class="heading"> Artikel</h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="images/a1.jpg" alt="">
            </div>
            <div class="content">
                <a href="#" class="title">Bansos PKH yang Cair Juni 2022</a>
                <span>by admin /Senin, 20 Juni 2022</span>
                <p>Bansos PKH tahap II kembali disalurkan pada Juni 2022.
                <p>Bansos PKH diberikan bagi keluarga yang terdaftar dalam Data Terpadu Kesejahteraan Sosial (DTKS) dan sesuai kategori penerima PKH menurut Kementerian Sosial (Kemensos).</p>
                <a href="#" class="btn">selengkapnya</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/a2.jpeg" alt="">
            </div>
            <div class="content">
                <a href="#" class="title">Cara Cek dan Daftar BLT Anak Sekolah SD, SMP, SMA, Ada Bantuan Rp 4,4 Juta</a>
                <span>by admin / Senin, 20 Juni 2022</span>
                <p>Kementerian Sosial (Kemensos) menyalurkan BLT anak sekolah yang merupakan bagian dari Program Keluarga Harapan (PKH). Anak usia sekolah adalah komponen dalam PKH bersama lansia, disabilitas berat, dan ibu hamil. Program BLT anak sekolah diperuntukkan bagi keluarga miskin yang memiliki anak usia sekolah dengan total mencapai Rp 4,4 juta.</p>
                <a href="#" class="btn">selengkapnya</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/a3.jpeg" alt="">
            </div>
            <div class="content">
                <a href="#" class="title">Jokowi Bagikan Bansos di Pasar Baros Serang: Cukup Nggak?</a>
                <span>by admin / Jumat, 17 Juni 2022</span>
                <p>Presiden Joko Widodo (Jokowi) mengunjungi Pasar Baros, Kabupaten Serang, untuk menyerahkan sejumlah bantuan sosial bagi penerima manfaat Program Keluarga Harapan (PKH) dan para pedagang. Bantuan yang diberikan senilai Rp 1,2 juta.</p>
                <a href="#" class="btn">selengkapnya</a>
            </div>
        </div>

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
        <a href="#">home</a>
        <a href="#">tentang</a>
        <a href="#">bantuan</a>
        <a href="#">anggota</a>
        <a href="#">kontak</a>
        <a href="#">artikel</a>
    </div>

    <div class="credit">created by <span>MAMONIR</span> | all rights reserved</div>

</section>

<!-- footer section ends -->

















<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>