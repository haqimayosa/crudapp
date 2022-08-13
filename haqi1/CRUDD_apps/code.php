<?php
session_start();
require 'koneksi.php';

if(isset($_POST['hapus_data_siswa']))
{
    $id_siswa = mysqli_real_escape_string($con, $_POST['hapus_data_siswa']);

    $query = "DELETE FROM siswa WHERE id='$id_siswa' ";
    $query1 = "ALTER TABLE siswa DROP id";
    $query2 = "ALTER TABLE siswa ADD id INT(5) NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST";

    $query_run = mysqli_query($con, $query);
    $query_run1 = mysqli_query($con, $query1);
    $query_run2 = mysqli_query($con, $query2);  

    if ($query_run) {
        
        $_SESSION['message'] = "Data Siswa Berhasil Dihapus";
        header("Location: index.php");
        exit(0);
    } 
    else {
        $_SESSION['message'] = "Data Siswa Gagal Dihapus";
        header("Location: index.php");
        exit(0);
    }
}

if(isset($_POST['ubah_data_siswa']))
{
    $id_siswa = mysqli_real_escape_string($con, $_POST['id_siswa']);
    $nama = mysqli_real_escape_string($con, $_POST['nama']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $no_hp = mysqli_real_escape_string($con, $_POST['no_hp']);
    $jurusan = mysqli_real_escape_string($con, $_POST['jurusan']);

    $query = "UPDATE siswa SET nama='$nama', email='$email', no_hp='$no_hp', jurusan='$jurusan' WHERE id='$id_siswa'";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        
        $_SESSION['message'] = "Data Siswa Berhasil Diubah";
        header("Location: index.php");
        exit(0);
    } 
    else {
        $_SESSION['message'] = "Data Siswa Gagal Diubah";
        header("Location: index.php");
        exit(0);
    }
    
}

if(isset($_POST['simpan']))
{
    $nama = mysqli_real_escape_string($con, $_POST['nama']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $no_hp = mysqli_real_escape_string($con, $_POST['no_hp']);
    $jurusan = mysqli_real_escape_string($con, $_POST['jurusan']);

    $query = "INSERT INTO siswa (nama,email,no_hp,jurusan) VALUES
    ('$nama','$email','$no_hp','$jurusan')";

    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        
        $_SESSION['message'] = "Data Siswa Berhasil Disimpan";
        header("Location: tambah_siswa.php");
        exit(0);
    } 
    else {
        $_SESSION['message'] = "Data Siswa Gagal Disimpan";
        header("Location: tambah_siswa.php");
        exit(0);
    }
    
}





?>