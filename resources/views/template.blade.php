<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIBAKAT</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


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

    <nav class="navbar navbar-expand-lg">
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

@yield('konten')

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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>
</html>