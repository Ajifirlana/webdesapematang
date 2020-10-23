<aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Top Berita</h3>
                            @foreach($berita as $b)
                            <div class="media post_item">
                                <img src="../uploads/{{$b->image}}" width="100px" height="100px">
                                <div class="media-body">
                                    <a href="/baca_selengkapnya/{{ $b->uuid }}">
                                        <h5>{{ str_limit ($b->judul, 30) }}</h5>
                                    </a>
                                        <h3>{{ str_limit ($b->isi, 30) }}</h3>
                                    
                                </div>
                                
                            </div>
                            @endforeach

                  
            
                        </aside>