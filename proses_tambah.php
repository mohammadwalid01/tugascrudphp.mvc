<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

$nama_kitab   = $_POST['nama_kitab'];
$nama_muallim     = $_POST['nama_muallim'];
$tanggal_pelajaran    = $_POST['tanggal_pelajaran'];
$jam_pelajaran   = $_POST['jam_pelajaran'];
$kelas = $_POST['kelas'];



 $query = "INSERT INTO pendidikan_asrama (nama_kitab, nama_muallim, tanggal_pelajaran, jam_pelajaran, kelas) VALUES ('$nama_kitab', '$nama_muallim', '$tanggal_pelajaran', '$jam_pelajaran', '$kelas')";
                  $result = mysqli_query($koneksi, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    echo "<script>alert('Data berhasil ditambah.');window.location='index.php';</script>";
                  }


 
