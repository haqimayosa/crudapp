<?php
session_start();
require 'koneksi.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Edit Data Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  
  <body>
        
    <div class="container mt-5">

        <?php include('message.php') ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Data Siswa
                            <a href="index.php" class="btn btn-danger float-end">Kembali</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if (isset($_GET['id'])) {
                            
                            $id_siswa = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM siswa WHERE id='$id_siswa'";
                            $query_run = mysqli_query($con, $query);

                            if (mysqli_num_rows($query_run) > 0) {
                                
                                $siswa = mysqli_fetch_array($query_run);
                                ?>
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="id_siswa" value="<?= $siswa['id']; ?>" class="form-control">

                                    <div class="mb-3">
                                        <label>Nama Siswa</label>
                                        <input type="text" name="nama" value="<?= $siswa['nama']; ?>" class="form-control">
                                    </div>

                                    <div class="mb-3">
                                        <label>Email</label>
                                        <input type="email" name="email" value="<?= $siswa['email']; ?>" class="form-control">
                                    </div>

                                    <div class="mb-3">
                                        <label>Nomor Handphone</label>
                                        <input type="text" name="no_hp" value="<?= $siswa['no_hp']; ?>" class="form-control">
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
                                        <button type="submit" name="ubah_data_siswa" class="btn btn-primary">
                                            Ubah Data Siswa
                                        </button>
                                    </div>  
                                </form>
                                <?php
                            }
                            else{
                                echo "<h4>Data Siswa Tidak Ditemukan</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>