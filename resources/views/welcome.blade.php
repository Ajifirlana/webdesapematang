
@include('template')


<body>

    @include("menu")




<img src="/img/header.jpg" height="400px" width="2000px">
    <section class="blog_area section_padding">
        <div class="container">
        <div class="row justify-content-center">
                <div class="col-xl-3">
                    <div class="section_tittle text-center">
                        <h2>Berita</h2>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        @foreach($berita as $b ) 
                        <article class="blog_item">
                            <div class="blog_item_img">
                    
                                <img src="../uploads/{{$b->image}}"  class="card-img rounded-0" width="100px" height="300px">
                                <a href="/baca_selengkapnya/{{ $b->uuid }}" class="blog_item_date">
                                    <h3>{{ str_limit ($b->judul, 100) }}</h3>
                                   
                                    
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="single-blog.html">
                                    <h2></h2>
                                </a>
                                <p>{{ str_limit ($b->isi, 500) }}</p>
                                <ul class="blog-info-link">
                                   
                                    <li><a href="/baca_selengkapnya/{{ $b->uuid }}"><i class="far fa-comments"></i> Baca Selengkapnya</a></li>
                                </ul>
                            </div>
                        </article>
@endforeach

<div class="container">
<nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                           
                                <h1 class="page-item">
                                    {!! $berita->render() !!}
                                </h1>
                            
                           
                            </ul>
                        </nav>
</div>
<br></br>



@include('galeri')
       

                        

                        
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        

                      @include('kategori')

                        @include('recenpost')
                      
@include('statistikdesa')
@include('aparatur')

@include('agenda')

                        



                        <aside class="single_sidebar_widget newsletter_widget">
                            <h4 class="widget_title">Informasi Layanan</h4>

                            <form action="#">
                                <div class="form-group">
                                    <input type="email" class="form-control" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100 btn_1"
                                    type="submit">Subscribe</button>
                            </form>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>

@include('footer')
    


</html>

