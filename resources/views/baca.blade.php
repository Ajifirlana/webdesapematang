 
 @include('template')

<body>

    @include("menu")

<section class="regervation_part section_padding">
        <div class="container">
        <div class="row justify-content-center">
                <div class="col-xl-3">
                    <div class="section_tittle text-center">
                        <h2></h2>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        
                        <article class="blog_item">
                            <div class="blog_item_img">
                    
                                
                                <a href="#" class="blog_item_date">
                                    <h3>{{$halaman->judul}}</h3>
                                   
                                    
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="single-blog.html">
                                    <h2></h2>
                                </a>
                                <p>{!! $halaman->isi !!}</p>
                                
                            </div>
                        </article>

<div class="container">
<nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                           
                                <h1 class="page-item">
                               
                                </h1>
                            
                           
                            </ul>
                        </nav>
</div>
@include('galeri')


       

                        

                        
                    </div>
                </div>


                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        
   @include('kategori')
   @include('recenpost')
                        @include('statistikdesa')


                        @include('aparatur')



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
<body>

</html>
