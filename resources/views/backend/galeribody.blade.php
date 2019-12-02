<div class="m-grid__item m-footer">
  <!--begin::Portlet-->
  <div class="m-portlet">
    <div class="m-portlet__head">
      <div class="m-portlet__head-caption">
       
      </div>
    </div>

    <div class="m-portlet__body">
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

        <hr>
 @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
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
      <th scope="row">{{ str_limit ($b->caption, 50) }}</th>
<th scope="row"><img src="../uploads/{{$b->image}}" width="100px"></th>
      

      <th scope="row">
      <a class="btn btn-primary" href="/backend/tampilgaleri/{{ $b->id }}">TAMPIL</a>
      <a class="btn btn-success" href="/backend/editgaleri/{{ $b->id }}">EDIT</a>
      <a class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Untuk Menghapus Data Ini?')" href="/backend/hapus/{{ $b->id }}">HAPUS</a></th>
    </tr>
    @endforeach
  </tbody>
</table>

<nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                               
                            
                                   {!! $berita->render() !!}
                          
                            
                              
                            </ul>
                        </nav>


      </div>
    </div>
  </div>
  <!--end::Portlet-->
</div>