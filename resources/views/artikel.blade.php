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
<div class="wrapper">
<div class="body-overlay"></div>
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3><img src="{!! asset('images/logo.png') !!}" class="img-fluid"/><span>SIBAKAT</span></h3>
            </div>
            <ul class="list-unstyled components">
			          <li  class="">
                    <a href="/admin" class="dashboard"><i class="material-icons">dashboard</i><span>Dashboard</span></a>
                </li>
                <li class="">
                    <a href="/admin/bantuan_admin"><i class="material-icons">grid_on</i><span>Bantuan</span></a>
                </li>
                <li class="">
                    <a href="/admin/artikel"><i class="material-icons">date_range</i><span>Artikel</span></a>
                </li>
            </ul> 
        </nav>
        <!-- Page Content  -->
        <div id="content">
		
		<div class="top-navbar">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
					
					<a class="navbar-brand" href="#"> Dashboard </a>
					
                    <button class="d-inline-block d-lg-none ml-auto more-button" type="button" data-toggle="collapse"
					data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="material-icons"></span>
                    </button>

                    <div class="collapse navbar-collapse d-lg-block d-xl-block d-sm-none d-md-none d-none" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">   
                            <li class="dropdown nav-item active">
                </div>
            </nav>
	    </div>
        <div style="padding: 2%" class="cards mt-2 rounded-3">
    <h3 id="judul" >Artikel</h3>
    <h6 class="card-subtitle mb-2 text-muted">Tabel Data Informasi Artikel</h6>

    <div class="d-grid gap-2 d-md-block mt-3"> <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahModal">Tambah</button> </div>

    <div class="table-responsive">
        <table class="table table-hover mt-2 text-center">
            <tr>
      
              <th>No</th>
              <th>Nama</th>
              <th>Gambar</th>
              <th>Deskripsi</th>
              <th class="">Aksi</th>
      
            </tr>
      
            <tr>
              <td>1</td>
              <td>Bansos PKH Yang Cair Juni 2022</td>
              <td><img src="{!! asset('images/a1.jpg') !!}" width="150"  class="img-fluid" alt="Responsive image"></td>
              <td><textarea readonly class="form-control" id="exampleFormControlTextarea1" rows="3" >Bansos PKH Tahap II Kembali Disalurkan Pada Juni 2022. Bansos PKH Diberikan Bagi Keluarga Yang Terdaftar Dalam Data Terpadu Kesejahteraan Sosial (DTKS) Dan Sesuai Kategori Penerima PKH Menurut Kementerian Sosial (Kemensos)</textarea></td>
              <td> <div class="d-grid gap-2 d-md-block"> <button class="btn btn-success">Ubah</button>  <button class="btn btn-danger ">Hapus</button></div>  </td>
    
            </tr>
            <tr>
                <td>2</td>
                <td>BLT minyak goreng</td>
                <td><img src="{!! asset('images/bb.png') !!}" width="150"  class="img-fluid" alt="Responsive image"></td>
                <td><textarea readonly   class="form-control" id="exampleFormControlTextarea1" rows="3" > Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio dolores ex animi cupiditate deserunt accusantium consequuntur ab. Repudiandae atque laborum officia ipsa possimus libero rerum quam nostrum eaque! Laborum, magni!</textarea></td>
                <td> <div class="d-grid gap-2 d-md-block"> <button class="btn btn-success">Ubah</button>  <button class="btn btn-danger ">Hapus</button></div>  </td>
      
              </tr>
            <tr>
                <td>3</td>
                <td>BLT UMKM</td>
                <td><img src="{!! asset('images/bb.png') !!}" width="150"  class="img-fluid" alt="Responsive image"></td>
                <td><textarea readonly   class="form-control" id="exampleFormControlTextarea1" rows="3" > Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio dolores ex animi cupiditate deserunt accusantium consequuntur ab. Repudiandae atque laborum officia ipsa possimus libero rerum quam nostrum eaque! Laborum, magni!</textarea></td>
                <td> <div class="d-grid gap-2 d-md-block"> <button class="btn btn-success">Ubah</button>  <button class="btn btn-danger ">Hapus</button></div>  </td>
      
              </tr>
          </table>
    </div>
    
  </div>

  <!-- Modal -->
<div class="modal fade" id="tambahModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="text-center modal-title" id="staticBackdropLabel ">Tambah Data</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form>
                
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Nama Artikel</label>
                  <input type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Gambar</label>
                    <input type="file" class="form-control">
                  </div>

                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Deskripsi</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>

    
              </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Tambah Data</button>
        </div>
      </div>
    </div>
  </div>

     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="js/jquery-3.3.1.slim.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/jquery-3.3.1.min.js"></script>
  
  
  <script type="text/javascript">
  $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
				$('#content').toggleClass('active');
            });
			
			 $('.more-button,.body-overlay').on('click', function () {
                $('#sidebar,.body-overlay').toggleClass('show-nav');
            });
			
        });          
       
</script>
  </body>
  </html>