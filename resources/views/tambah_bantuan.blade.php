<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
            <title>Admin SIBAKAT</title>
            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="{!! asset('css/bootstrap.min.css') !!}">
            <!----css3---->
            <link rel="stylesheet" href="{!! asset('css/admin.css') !!}">
            <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
            <link rel="shortcut icon" href="{!! asset('images/logo.png') !!}">
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

        
        
        
        <!--google material icon-->
            <link href="https://fonts.googleapis.com/css2?family=Material+Icons"
        rel="stylesheet">
    </head>
    <body>
                <form>   
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nama </label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Gambar </label>
                        <input type="file" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Deskripsi </label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </form>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Tambah Data</button>
    </body>
 

</html>