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
                   <strong>EDIT DATA WIDGET</strong> - 
                </div>
                <div class="card-body">
                    <a href="/home" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    

                    <form method="post" action="/backend/updatewidget/{{ $widget->id }}" enctype="multipart/form-data">

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
<fieldset disabled>
                        <div class="form-group">
                            <label>Judul Berita</label>
                            <input type="text" name="judul" class="form-control" placeholder="Nama pegawai .." value=" {{ $widget->nama_widget }}">

                          

                        </div>
</fieldset>
                        <div class="form-group">
                            <label>Isi Berita</label>

                            

                     <textarea class="form-control" name="isi_widget" rows="10">{{ $widget->isi_widget }}</textarea>

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