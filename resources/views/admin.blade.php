    @extends('template_admin')
    @section('konten')
    
    <!-- Page Content  -->
		
			
			<div class="main-content">
			
			<div class="row">
                @foreach ($bantuan as $bantuan)
                @php
                $gambar = $bantuan->gambar;
                if ($bantuan->gambar == null) {
                    $gambar = 'notfound.jpg';
                } 
                @endphp
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header">
                                    <div class="icon icon-warning">
                                       <span class="material-icons"></span>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <p class="category"><strong>{{$bantuan->nama}}</strong></p>
                                    <!-- <p class="category">                
                                        <img src="{!! asset('images/' . $gambar . '') !!}" width="150"  class="img-fluid" alt="''.$bantuan->gambar.''">
                                    </p> -->
                                    <h3 class="card-title"></h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons text-info">info</i>
                                        <a href="/admin/bantuan_admin">Berikut Detail Bantuan UMKM</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                @endforeach
            </div>
            </div>
                        
    @endsection