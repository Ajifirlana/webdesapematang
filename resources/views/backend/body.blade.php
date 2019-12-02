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
        <table class="table table-bordered" border="0">
<thead>
    
    <th scope="row">
 
        <p>Cari Data Berita:</p>
        <form action="/home/cari" method="GET" class="form-inline">
  
  <div class="form-group mx-sm-3 mb-2">
    <label for="inputPassword2" class="sr-only">Kata Kunci</label>
    <input type="text" class="form-control" name="cari" placeholder="Cari Berita .." value="{{ old('cari') }}">
  </div>
  <button type="submit" class="btn btn-primary mb-2">Cari</button>
</form>

 
  </th>
  </thead>
  </table>
        <hr>

        <table class="table table-bordered" border="0">
        
  <p></p>
  <thead>
    <tr>
    <th scope="col-md-12">No</th>
      <th scope="col">Judul Berita</th>
      <th scope="col">Isi Berita</th>
      <th scope="col">Gambar Berita</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php $no = 0;?>
   @foreach($berita as $b )  
   <?php $no++ ;?>
    <tr>
    <th scope="row">{{ $no }}</th>
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