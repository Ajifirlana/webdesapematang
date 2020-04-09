<section id="main-slider" class="blog_area section_padding">

<div class="container">
<div id="my-carousel" class="col-md-8 col-md-offset-2" data-ride="carousel">


  <div id="my-carousel" class="carousel-inner">

  @foreach($berita as $b )
    <li data-target="#my-carousel" data-slide-to="{{ $b['id'] }}" class="carousel-item active">
    <div class="carousel-item {{ 'active'}}">
      <img src="../uploads/{{$b->image}}">
<div>
    </li>
    @endforeach


          

          <div class="carousel-caption d-none d-md-block">
<h1>{{ str_limit ($b->judul, 30) }}</h1>
          <p>{{ str_limit ($b->isi, 30) }}</p>
              </div>
          
        
    
    
  </div>


  <a class="carousel-control-prev" href="#main-slider" role="button" data-slide="{{ $b['id'] }}">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Prev</span>
  </a>
  <a class="carousel-control-next" href="#my-carousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  
</div>

</div>

</section>