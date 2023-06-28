<?php
include 'koneksi.php';

  $id = $_POST['id'];
  $nama_kitab   = $_POST['nama_kitab'];
  $nama_muallim     = $_POST['nama_muallim'];
  $tanggal_pelajaran    = $_POST['tanggal_pelajaran'];
  $jam_pelajaran   = $_POST['jam_pelajaran'];
  $kelas = $_POST['kelas'];

      $query  = "UPDATE pendidikan_asrama SET nama_kitab = '$nama_kitab', nama_muallim = '$nama_muallim', tanggal_pelajaran = '$tanggal_pelajaran', jam_pelajaran= '$jam_pelajaran', kelas = $kelas";
      $query .= "WHERE id = '$id'";
      $result = mysqli_query($koneksi, $query);
      if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
      } else {
          echo "<script>alert('Data berhasil diubah.');window.location='index.php';</script>";
      }
    

 
