<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Edit Data</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                   <strong>EDIT DATA BERITA</strong> - 
                </div>
                <div class="card-body">
                    <a href="/home" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    

                    <form method="post" action="/backend/updateberita/{{ $berita->id }}" enctype="multipart/form-data">

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label>Judul Berita</label>
                            <input type="text" name="judul" class="form-control" placeholder="Nama pegawai .." value=" {{ $berita->judul }}">

                          

                        </div>

                        <div class="form-group">
                            <label>Isi Berita</label>

                            <input type="textarea" name="isi" class="form-control" row="5" placeholder="Isi Berita .." value=" {{ $berita->isi }}">

                     

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