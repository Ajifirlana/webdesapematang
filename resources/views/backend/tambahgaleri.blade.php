
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <script src="/admintemplate/dashboard/libs/webfont/1.6.16/webfont.js"></script>
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
                    

                    <form action="/backend/tambahgaleristore" method="POST" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{ csrf_token() }}">

                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                        <div class="form-group">
                            <label>Caption</label>
                            <input type="text" name="caption" class="form-control" placeholder="Nama caption ..">

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