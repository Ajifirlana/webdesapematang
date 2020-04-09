 <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="section_tittle text-center">
                        <h2>Galeri Foto</h2>
                        
                    </div>
                </div>
            </div>
            <div class="row">
            @foreach($galeri as $g )
                <div class="col-sm-6 col-lg-3">
                
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="../uploads/{{$g->image}}" width="100px" height="100px">

                        </div>
                        <div class="single_text">
                        
                            <div class="single_blog_text">
                                <h3>{{ str_limit ($g->caption, 100) }}</h3>
                                <p>{{ str_limit ($g->caption, 100) }}</p>
                            </div>
                        
                        </div>
                    </div>
                    
                </div>
                @endforeach
             
              
              
            </div>
        </div>
        