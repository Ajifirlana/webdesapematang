<div class="m-grid__item m-footer">
  <!--begin::Portlet-->
  <div class="m-portlet">
    <div class="m-portlet__head">
      <div class="m-portlet__head-caption">
       
      </div>
    </div>

    <div class="m-portlet__body">

@if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
       <div align="center" class="m-portlet__head-title">
          <span class="m-portlet__head-icon m--hide">
          <i class="la la-gear"></i>
          </span>
          <h3 class="m-portlet__head-text">Halaman Galeri</h3>
        </div>
      <div class="col-md-12">

      <a href="/backend/tambahgaleri" class="btn btn-success btn-sm m-btn m-btn--icon m-btn--pill"">
        <i class="la la-plus"></i> Upload Foto 
        </a>

  <table class="table table-bordered" border="0">
<thead>
    
    <th scope="row">
 
        <p>Cari Data Galeri:</p>
        <form action="/backend/galericari" method="GET" class="form-inline">
  
  <div class="form-group mx-sm-3 mb-2">
    <label for="inputPassword2" class="sr-only">Kata Kunci</label>
    <input type="text" class="form-control" name="cari" placeholder="Cari Galeri .." value="{{ old('cari') }}">
  </div>
  <button type="submit" class="btn btn-primary mb-2">Cari</button>
</form>

 
  </th>
  </thead>
  </table>
        <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Judul Foto</th>
      <th scope="col">Gambar</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
   @foreach($galeri as $b )  
    <tr>
      <th scope="row">{{ str_limit ($b->caption, 1000) }}</th>
<th scope="row"><img src="../uploads/{{$b->image}}" width="100px" height="100px"></th>
      

      <th scope="row">
      <a class="btn btn-primary" href="/backend/tampilgaleri/{{ $b->id }}">TAMPIL</a>
      <a class="btn btn-success" href="/backend/editgaleri/{{ $b->id }}">EDIT</a>
      <a class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Untuk Menghapus Data Ini?')" href="/backend/hapus/{{ $b->id }}">HAPUS</a></th>
    </tr>
    @endforeach
  </tbody>
</table>

<div class="container">
<nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                              <h1> 
                            
                                   {!! $galeri->render() !!}
                          
                            </h1>
                              
                            </ul>
                        </nav>
</div>  


      </div>
    </div>
  </div>
  <!--end::Portlet-->
</div>