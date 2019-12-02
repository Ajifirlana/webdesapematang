

                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Aparatur Desa</h3>
                            @foreach($galeri as $g )
                            <div class="media post_item">
                                <img src="../uploads/{{$g->image}}" width="100px" height="100px">
                                <div class="media-body">
                                    <a href="#">
                                        <h5>{{ str_limit ($g->caption, 30) }}</h5>
                                        <h3>{{ str_limit ($g->jabatan, 30) }}</h3>
                                    </a>
                                </div>
                                
                            </div>
                            @endforeach
                     
                          
 <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
   @foreach($galeri as $key => $g )
    <div class="item{{ $key == 0 ? ' active' : '' }}">
   
      <img src="../uploads/{{$g->image}}" class="d-block w-100" alt="...">

    </div>
         @endforeach
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div> 
                        </aside>