<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Tampil Data</title>
    </head>
    <body>
  <div class="container">
            <div class="card mt-3">
                <div class="card-header text-center">
                   <strong>TAMPIL DATA GALERI</strong>
                </div>
                <div class="card-body">
                    <a href="/backend/galeri" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    <table class="table">
  <thead>
    <tr>
      <th scope="col">{{ $galeri->caption }}</th>
     
      
    </tr>
  </thead>
</table>

        
                </div>
            </div>
        </div>
        </body>
        </html>
    

        