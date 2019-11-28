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
          <h3 class="m-portlet__head-text">Halaman Berita</h3>
        </div>
      <div class="col-md-12">

      <a href="backend/tambahberita" class="btn btn-success">
        <i class="la la-plus"></i> Berita Baru
        </a>

        <hr>

        <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Judul Berita</th>
      <th scope="col">Isi Berita</th>
      <th scope="col">Gambar Berita</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
   @foreach($berita as $b )  
    <tr>
      <th scope="row">{{ str_limit ($b->judul, 50) }}</th>
      <th scope="row">{{ str_limit ($b->isi, 50) }}</th>
<th scope="row"><img src="../uploads/{{$b->image}}" width="100px"></th>
      

      <th scope="row">
      <a class="btn btn-primary" href="/backend/tampilberita/{{ $b->id }}">TAMPIL</a>
      <a class="btn btn-success" href="/backend/editberita/{{ $b->id }}">EDIT</a>
      <a class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Untuk Menghapus Data Ini?')" href="/backend/hapusberita/{{ $b->id }}">HAPUS</a></th>
    </tr>
    @endforeach
  </tbody>

 

</table>

     <div class="container">
<nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                               
                            
                                   {!! $berita->render() !!}
                          
                            
                              
                            </ul>
                        </nav>
</div>                          
                            
                            

      </div>
    </div>
  </div>
  <!--end::Portlet-->
</div>