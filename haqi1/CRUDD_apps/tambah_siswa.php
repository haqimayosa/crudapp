<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>CRUD App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    
  <div class="container mt-5">

     <?php include('message.php') ?>

     <div class="row">
        <div class="col-mid-12">
            <div class="card">
                <div class="card-header">
                    <h4>Tambahkan Siswa
                        <a href="index.php" class="btn btn-danger float-end">Kembali</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="code.php" method="POST">

                        <div class="mb-3">
                            <label>Nama Siswa</label>
                            <input type="text" name="nama" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Email Siswa</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Nomor Handphone</label>
                            <input type="text" name="no_hp" class="form-control">
                        </div>

                            <div class="mb-3">
                                        <label>Jurusan</label>
                                        <select name="jurusan" class="form-select" aria-label="Default select example">
                                            <option value="RPL">RPL</option>
                                            <option value="TKJ">TKJ</option>
                                            <option value="MM">MM</option>
                                        </select>
                                    </div>

                        <div class="mb-3">
                            <button type="submit" name="simpan" class="btn btn-primary">Simpan Data</button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
     </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>