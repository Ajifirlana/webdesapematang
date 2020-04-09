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
          <h3 class="m-portlet__head-text">Halaman Menu</h3>
        </div>
      <div class="col-md-12">

      <a href="/backend/tambahgaleri" class="btn btn-success btn-sm m-btn m-btn--icon m-btn--pill"">
        <i class="la la-plus"></i> Tambah Direktori
        </a>
        <a href="/backend/tambahgaleri" class="btn btn-success btn-sm m-btn m-btn--icon m-btn--pill"">
        <i class="la la-plus"></i> Tambah Halaman
        </a>

         <a href="/backend/tambahgaleri" class="btn btn-success btn-sm m-btn m-btn--icon m-btn--pill"">
        <i class="la la-plus"></i> Tambah Link/ Tautan
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
      <th scope="col">Direktori</th>
      <th scope="col">Isi Halaman</th>
       <th scope="row"></th>
        <th scope="row"></th>
         <th scope="row"></th>
          <th scope="row"></th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
   @foreach($menu as $m )  
    <tr>
      <th scope="row">{{ str_limit ($m->nama, 1000) }}</th>
      <th scope="row">{{ str_limit ($m->isi1, 1000) }}</th>
        <th scope="row">{{ str_limit ($m->isi2, 1000) }}</th>
         <th scope="row">{{ str_limit ($m->isi3, 1000) }}</th>
          <th scope="row">{{ str_limit ($m->isi4, 1000) }}</th>
           <th scope="row">{{ str_limit ($m->isi5, 1000) }}</th>
      

      <th scope="row">
     
      <a class="btn btn-success" href="/backend/editgaleri/{{ $m->id }}">EDIT</a>
      <a class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Untuk Menghapus Data Ini?')" href="/backend/hapus/{{ $m->id }}">HAPUS</a></th>
    </tr>
    @endforeach
  </tbody>
</table>

<nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                               
                            
                                   {!! $menu->render() !!}
                          
                            
                              
                            </ul>
                        </nav>


      </div>
    </div>
  </div>
  <!--end::Portlet-->
</div>