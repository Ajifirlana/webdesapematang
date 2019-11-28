<header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="{{'/'}}"> <img src="img/ability_img.png" width="50px" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-center"
                            id="navbarSupportedContent">


                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{'/'}}">Beranda</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Profil
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="services.html">Sejarah Desa</a>
                                        <a class="dropdown-item" href="dep.html">Profil Wilayah Desa</a>
                                        <a class="dropdown-item" href="elements.html">Profil Potensi Desa</a>
                                        <a class="dropdown-item" href="elements.html">Visi & Misi</a>
                                        <a class="dropdown-item" href="elements.html">Pemerintah Desa</a>
                                        <a class="dropdown-item" href="elements.html">Bumn Desa</a>
                                        <a class="dropdown-item" href="elements.html">Redaksi</a>
                                        <a class="dropdown-item" href="elements.html">Kontak Kami</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Lembaga
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="services.html">BPD</a>
                                        <a class="dropdown-item" href="dep.html">LPMD</a>
                                        <a class="dropdown-item" href="elements.html">PKK</a>
                                        <a class="dropdown-item" href="elements.html">Karang Taruna</a>
                                        <a class="dropdown-item" href="elements.html">Gapoktan</a>
                                    </div>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Data Umum
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="services.html">Kesehatan</a>
                                        <a class="dropdown-item" href="dep.html">Pendidikan</a>
                                        <a class="dropdown-item" href="elements.html">Keagamaan</a>
                                        <a class="dropdown-item" href="elements.html">Kantibmas</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_1"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Pelayanan
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                                        <a class="dropdown-item" href="blog.html">Pengantar El-KTP</a>
                                        <a class="dropdown-item" href="single-blog.html">Pengantar SKCK</a>
                                    </div>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_1"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Kategori
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                                        <a class="dropdown-item" href="blog.html">Berita Desa</a>
                                        <a class="dropdown-item" href="single-blog.html">Agenda Desa</a>
                                        <a class="dropdown-item" href="single-blog.html">Produk Desa</a>
                                        <a class="dropdown-item" href="single-blog.html">Anggaran Desa</a>
                                        <a class="dropdown-item" href="single-blog.html">Peraturan Desa</a>
                                        <a class="dropdown-item" href="single-blog.html">Pengumuman</a>
                                        <a class="dropdown-item" href="single-blog.html">Tulisan Warga</a>
                                    </div>
                                </li>
<li class="nav-item dropdown">
                                <form action="/cari" method="GET">
        
    
                                        <input type="text" name="cari" class="form-control" method="GET" placeholder='Search Keyword' value="{{ old('cari') }}">
                                    
                                        </form>
                                        </li>
                                    
                               <ul class="navbar-nav align-items-center">
                    @if (Auth::guest())
                        <li><a class="btn" href="/auth/login">Login</a></li>
            
                    @else
                        <li class="nav-item dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="/auth/logout">Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
                            </ul>
                        </div>
                      

                    </nav>


                </div>
            </div>
        </div>
    </header>