

<body>
   
    @include("menu")




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
                    
                                <img src="../uploads/{{$b->image}}"  class="card-img rounded-0" >
                                <a href="#" class="blog_item_date">
                                    <h3>{{ str_limit ($b->created_at, 10) }}</h3>
                                   
                                    
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="single-blog.html">
                                    <h2>{{ str_limit ($b->judul, 30) }}</h2>
                                </a>
                                <p>{{ str_limit ($b->isi, 500) }}</p>
                                <ul class="blog-info-link">
                                    <li><a href="#"><i class="far fa-user"></i> Travel, Lifestyle</a></li>
                                    <li><a href="#"><i class="far fa-comments"></i> Selengkapnya</a></li>
                                </ul>
                            </div>
                        </article>
@endforeach
<div class="container">
<nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                           
                                <li class="page-item">
                                    <a href="#" class="page-link">  {!! $berita->render() !!}</a>
                                </li>
                            
                           
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
                        <aside class="single_sidebar_widget tag_cloud_widget">
                            <h4 class="widget_title">Statistik Desa</h4>
                            <ul class="list">
                                <li>
                                    <a href="#">MAINTENANCE</a>
                                </li>
                                
                            </ul>
                        </aside>

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


    <footer class="footer-area">
        <div class="footer section_padding">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-6 col-md-4 col-sm-6 single-footer-widget">
                        <a href="#" class="footer_logo"> <img src="img/ability_img.png" width="100px" alt="#"> </a>
                        <p>Desa Pematang Lima Suku</p>
                        <p>Jl. Muara Bungo-Jambi, Sukaramai, Muara Tembesi, Kabupaten Batang Hari, Jambi 36653</p>
                        <div class="social_logo">
                        <p>e-Mail : pematang@gmail.com</p>
                        </div>
                        <div class="social_logo">
                            <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"> <i class="ti-twitter"></i> </a>
                            <a href="#"><i class="ti-instagram"></i></a>
                            <a href="#"><i class="ti-skype"></i></a>
                        </div>
                    </div>
             
             
                    <div class="col-xl-2 col-sm-6 col-md-6 single-footer-widget">
                        <h4>Temukan Kami di:</h4>
                        <div class="social_icon">
                                <ul>
                                    <li><a href="#"> <i class="ti-facebook"></i>facebook </a></li>
                                    <li><a href="#"> <i class="ti-twitter-alt"></i> twitter</a></li>
                                    <li><a href="#"> <i class="ti-instagram"></i> </a>instagram</li>
                                    <li><a href="#"> <i class="ti-skype"></i> Skype</a></li>
                                </ul>
                            </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-md-6 single-footer-widget">
                        <h4>Peta Desa Pematang Lima Suku</h4>
                        <p><div class="d-none d-sm-block mb-5 pb-4">
        <div id="map" style="height: 180px;"></div>
        <script>
          function initMap() {
            var uluru = {
              lat: -25.363,
              lng: 131.044
            };
            var grayStyles = [{
                featureType: "all",
                stylers: [{
                    saturation: -90
                  },
                  {
                    lightness: 50
                  }
                ]
              },
              {
                elementType: 'labels.text.fill',
                stylers: [{
                  color: '#ccdee9'
                }]
              }
            ];
            var map = new google.maps.Map(document.getElementById('map'), {
              center: {
                lat: -31.197,
                lng: 150.744
              },
              zoom: 9,
              styles: grayStyles,
              scrollwheel: false
            });
          }
        </script>
        <script
          src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&callback=initMap">
        </script>

      </div></p>
                       
                    </div>
                </div>
            </div>
        </div>

        <div class="copyright_part">
            <div class="container">
                <div class="row align-items-center">
                    <p class="footer-text m-0 col-lg-8 col-md-12"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">AJE</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
                    <div class="col-lg-4 col-md-12 text-center text-lg-right footer-social">
                        <a href="#"><i class="ti-facebook"></i></a>
                        <a href="#"> <i class="ti-twitter"></i> </a>
                        <a href="#"><i class="ti-instagram"></i></a>
                        <a href="#"><i class="ti-skype"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>


</html>
