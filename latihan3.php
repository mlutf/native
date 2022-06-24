<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Hello, world!</title>
  </head>
  <body>

    <div class="container position-relative mt-5">
    
        <div>
            <h1>Perpustakaan Guru <br/> </h1>
            <h2>
            SMK Wikrama Bogor
            </h2>
            
        </div>
        <br>
        <h2 class="lead">form buku</h2>
        <form action="" method="post">
        
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Kode Buku</label>
                    <div class="col-sm-8">
                    <input type="text" name="kodebuku" class="form-control">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Judul Buku</label>
                    <div class="col-sm-8">
                    <input type="text" name="judulbuku" class="form-control">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Pengarang</label>
                    <div class="col-sm-8">
                    <input type="text" name="pengarang" class="form-control">
                    </div>
                </div>
                
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Penerbit</label>
                    <div class="col-sm-8">
                    <input type="text" name="penerbit" class="form-control">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Tahun Terbit</label>
                    <div class="col-sm-8">
                    <input type="text" name="tahunterbit" class="form-control">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Penulis</label>
                    <div class="col-sm-8">
                    <input type="text" name="penulis" class="form-control">
                    </div>
                </div>
                <div class="d-grid gap-2 col-6 mx-auto">
                            <button class="btn btn btn-dark" type="submit" name="submit">Submit</button>
                        </div>
                
                <div class="card mt-5 mb-5" >
                <div class="card-body">
                <table cellpadding="8" class="mb-3">
                        <tr>
                            <td>Kode Buku</td>
                            <td>:</td>
                            <td name="kode"><?=isset($_POST['submit']) ? $_POST['kodebuku'] : ''?></td>
                        </tr>
                        <tr>
                            <td>Judul Buku</td>
                            <td>:</td>
                            <td><?=isset($_POST['submit']) ? $_POST['judulbuku'] : ''?></td>
                        </tr>
                        <tr>
                            <td>Pengarang</td>
                            <td>:</td>
                            <td><?=isset($_POST['submit']) ? $_POST['pengarang'] : ''?></td>
                        </tr>
                        <tr>
                            <td>Penerbit</td>
                            <td>:</td>
                            <td><?=isset($_POST['submit']) ? $_POST['penerbit'] : ''?></td>
                        </tr>
                        <tr>
                            <td>Tahun Terbit</td>
                            <td>:</td>
                            <td><?=isset($_POST['submit']) ? $_POST['tahunterbit'] : ''?></td>
                        </tr>
                        <tr>
                            <td>Penulis</td>
                            <td>:</td>
                            <td><?=isset($_POST['submit']) ? $_POST['penulis'] : ''?></td>
                        </tr>
                        
                    </table>
                    <div class="d-grid gap-2 col-6 mx-auto">
                            <button class="btn btn btn-dark" type="submit">OK</button>
                        </div>
                </div>
        
                </div>
            </div>
            
            
        
        </form>
</div>
  </body>
</html>
