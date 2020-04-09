

                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Aparatur Desa</h3>
                            @foreach($aparatur as $a )
                            <div class="media post_item">
                                <img src="../uploads/{{$a->image}}" width="100px" height="100px">
                                <div class="media-body">
                                    <a href="#">
                                        <h5>{{ str_limit ($a->nama, 30) }}</h5>
                                        <h3>{{ str_limit ($a->jabatan, 30) }}</h3>
                                    </a>
                                </div>
                                
                            </div>
                            @endforeach
                     
                     @if(count($aparatur)==0)
<div class="col-md-12">
<center>Belum Ada Photo/Gambar!</center>
</div>
@endif
                          
 
                        </aside>