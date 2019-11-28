<section id="main-slider" class="blog_area section_padding">

<div class="container" data-interval="1000">
<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
<ol class="carousel-inner">
@foreach($berita as $b )
        <li data-target="main-slider" data-slide-to="{{ $b['id'] }}" class="carousel-item active"></li>
        @endforeach
    </ol>

  <div class="carousel-inner" data-interval="10000">

  @foreach($berita as $b )
    <li data-target="#my-carousel" data-slide-to="{{ $b['id'] }}" class="carousel-item active">
      <img src="../uploads/{{$b->image}}">

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