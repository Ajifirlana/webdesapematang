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
          <h3 class="m-portlet__head-text">Halaman Widget</h3>
        </div>
      <div class="col-md-12">

      

        <hr>
 @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
        <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Nama Widget</th>
      <th scope="col">Isi Widget</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
   @foreach($widget as $b )  
    <tr>
      <th scope="row">{{ str_limit ($b->nama_widget, 50) }}</th>
<th scope="row">{{ str_limit ($b->isi_widget, 50) }}</th>
      

      <th scope="row">
      <a class="btn btn-primary" href="/backend/tampilgaleri/{{ $b->id }}">TAMPIL</a>
      <a class="btn btn-success" href="/backend/editgaleri/{{ $b->id }}">EDIT</a>
      <a class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Untuk Menghapus Data Ini?')" href="/backend/hapusberita/{{ $b->id }}">HAPUS</a></th>
    </tr>
    @endforeach
  </tbody>
</table>


      </div>
    </div>
  </div>
  <!--end::Portlet-->
</div>