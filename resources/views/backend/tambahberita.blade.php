<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Tambah Data</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                   <strong>TAMBAH DATA</strong> - 
                </div>
                <div class="card-body">
                    <a href="/home" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    

                    <form action="/backend/tambahberitastore" method="POST" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{ csrf_token() }}">

                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                        <div class="form-group">
                            <label>Judul Berita</label>
                            <input type="text" name="judul" class="form-control" placeholder="Nama Judul ..">

                        </div>

                        <div class="form-group">
    <label for="exampleFormControlTextarea1">Isi Berita</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="isi" rows="3"></textarea>
  </div>

                        <div class="form-group">
                            <label>Tanggal Posting</label>

                            <input type="date" name="created_at" class="form-control" row="5" placeholder="Isi Berita ..">

                        

                        </div>

                     
                        <div class="form-group">
							<label>Gambar</label>
							<input type="file" name="image" class="form-control">

						</div>

						
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </body>
</html>