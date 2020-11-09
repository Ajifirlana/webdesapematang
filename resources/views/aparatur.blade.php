       <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Aparatur Desa</h3>
                         
                    
           
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
              

<div id="carouselStandar" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">

    <div class="carousel-item active">
        <img src="../uploads/download (1).png" class="d-block w-100" width="200px" height="200px" alt="gambar">
    </div>
    @foreach($aparatur as $a )
    <div class="carousel-item">
      <img src="../uploads/{{$a->image}}" class="d-block w-100" width="200px" height="200px" alt="gambar">
    </div>
    @endforeach
    
  </div>
</div>
                </aside>

 