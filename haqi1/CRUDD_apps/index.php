<?php
    session_start();
    require 'koneksi.php';

?>

<?php include('includes/header.php') ?>

    <div class="container mt-4">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-mid-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Detail Siswa
                            <a href="tambah_siswa.php" class="btn btn-primary float-end">Tambah Data</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered ">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama Siswa</th>
                                    <th>Email</th>
                                    <th>Nomor Telepon</th>
                                    <th>Jurusan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                    $query = "SELECT * FROM siswa";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $siswa)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $siswa['id'] ?></td>
                                                <td><?= $siswa['nama'] ?></td>
                                                <td><?= $siswa['email'] ?></td>
                                                <td><?= $siswa['no_hp'] ?></td>
                                                <td><?= $siswa['jurusan'] ?></td>
                                                <td>
                                                    <a href="detail_data_siswa.php?id=<?= $siswa['id']; ?>" class="btn btn-info btn-sm">Detail</a>
                                                    <a href="edit_data_siswa.php?id=<?= $siswa['id']; ?>" class="btn btn-success btn-sm">Ubah Data</a>
                                                    <form action="code.php" method="POST" class="d-inline">
                                                        <button type="submit" name="hapus_data_siswa" value="<?=$siswa['id'];?>" class="btn btn-danger btn-sm">Hapus Data</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else{
                                        echo "<h5> Belum Ada Data Siswa </h5>";;
                                    }
                                
                                    ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> 

<?php include('includes/footer.php')?>