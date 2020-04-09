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
          <h3 class="m-portlet__head-text">Halaman Aparatur Desa</h3>
        </div>
      <div class="col-md-12">

    
        
        <hr>

        <table class="table table-bordered" border="0">
        
  <p></p>
  <thead>
    <tr>
    <th scope="col-md-12">No</th>
      <th scope="col">Nama Aparatur</th>
      <th scope="col">Jabatan</th>
      <th scope="col">Foto Aparatur</th>
     
    </tr>
  </thead>
  <tbody>
  <?php $no = 0;?>
   @foreach($aparatur as $a )  
   <?php $no++ ;?>
    <tr>
    <th scope="row">{{ $no }}</th>
      <th scope="row">{{ str_limit ($a->nama, 50) }}</th>
      <th scope="row">{{ str_limit ($a->jabatan, 50) }}</th>
<th scope="row"><img src="../uploads/{{$a->image}}" width="100px" height="100px"></th>
      

      <th scope="row">
      
     </th>
    </tr>
    @endforeach
  </tbody>

 

</table>

     <div class="container">
<nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                              <h1> 
                            
                                   {!! $aparatur->render() !!}
                          
                            </h1>
                              
                            </ul>
                        </nav>
</div>                          
                            
                            

      </div>
    </div>
  </div>
  <!--end::Portlet-->
</div>