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
            <div class="card mt-3">
                <div class="card-header text-center">
                   <strong>TAMPIL DATA BERITA</strong> - 
                </div>
                <div class="card-body">
                    <a href="/home" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Judul Berita</th>
      <th scope="col">Isi Berita</th>
      
    </tr>
  </thead>
  <tbody>
  
    <tr>
      <th scope="row">{{ $berita->judul }}</th>
      <th scope="row">{{ $berita->isi }}</th>

      
    </tr>
    
  </tbody>
</table>

        
                </div>
            </div>
        </div>
        </body>
        </html>
    

        