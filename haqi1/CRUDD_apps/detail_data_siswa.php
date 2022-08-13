<?php
   require 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Data Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            Detail Data Siswa
                            <a href="index.php" class="btn btn-danger float-end">Kembali</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <?php
                             if(isset($_GET['id'])){
                                    $id_siswa = mysqli_real_escape_string($con, $_GET['id']);
                                $query = "SELECT * FROM siswa WHERE id='$id_siswa' ";
                                $query_run = mysqli_query($con, $query);

                                if(mysqli_num_rows($query_run) > 0 ){
                                    $siswa = mysqli_fetch_array($query_run);
                                    ?>
                                       <div class="mb-3">
                                        <label>Nama Siswa</label>
                                        <p  class="form-control">
                                            <?= $siswa['nama']; ?>
                                        </p>
                                       </div>
                                       <div class="mb-3">
                                        <label>Email Siswa</label>
                                        <p  class="form-control">
                                            <?= $siswa['email']; ?>
                                        </p>
                                       </div>
                                       <div class="mb-3">
                                        <label>Nomer Handphone</label>
                                        <p  class="form-control">
                                            <?= $siswa['no_hp']; ?>
                                        </p>
                                       </div>
                                       <div class="mb-3">
                                        <label>Jurusan</label>
                                        <p  class="form-control">
                                            <?= $siswa['jurusan']; ?>
                                        </p>
                                       </div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>