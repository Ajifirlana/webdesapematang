 <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="section_tittle text-center">
                        <h2>Galeri Foto</h2>
                        <p>Face replenish sea good winged bearing years air divide wasHave night male also</p>
                    </div>
                </div>
            </div>
            <div class="row">
            @foreach($galeri as $g )
                <div class="col-sm-6 col-lg-3">
                
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="../uploads/{{$g->image}}" alt="doctor">

                        </div>
                        <div class="single_text">
                        
                            <div class="single_blog_text">
                                <h3>{{ str_limit ($g->caption, 30) }}</h3>
                                <p>Heart specialist</p>
                            </div>
                        
                        </div>
                    </div>
                    
                </div>
                @endforeach
               
              
              
            </div>
        </div>