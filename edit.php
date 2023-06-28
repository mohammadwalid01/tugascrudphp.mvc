<?php
include 'koneksi.php';

  if (isset($_GET['id'])) {
    $id = ($_GET["id"]);

    $query = "SELECT * FROM pendidikan_asrama WHERE id='$id'";
    $result = mysqli_query($koneksi, $query);
    if(!$result){
      die ("Query Error: ".mysqli_errno($koneksi).
         " - ".mysqli_error($koneksi));
    }
    $data = mysqli_fetch_assoc($result);
       if (!count($data)) {
          echo "<script>alert('Data tidak ditemukan pada database');window.location='index.php';</script>";
       }
  } else {
    echo "<script>alert('Masukkan data id.');window.location='index.php';</script>";
  }         
  ?>
<!DOCTYPE html>
<html>
  <head>
    <title>DATA PENDIDIKAN </title>
    <style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: salmon;
      }
    button {
          background-color: salmon;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
          border: 0px;
          margin-top: 20px;
    }
    label {
      margin-top: 10px;
      float: left;
      text-align: left;
      width: 100%;
    }
    input {
      padding: 6px;
      width: 100%;
      box-sizing: border-box;
      background: #f8f8f8;
      border: 2px solid #ccc;
      outline-color: salmon;
    }
    div {
      width: 100%;
      height: auto;
    }
    .base {
      width: 400px;
      height: auto;
      padding: 20px;
      margin-left: auto;
      margin-right: auto;
      background: #ededed;
    }
    </style>
  </head>
  <body>
      <center>
        <h1>Edit  <?php echo $data['nama_kitab']; ?></h1>
      <center>
      <form method="POST" action="proses_edit.php" enctype="multipart/form-data" >
      <section class="base">
        <input name="id" value="<?php echo $data['id']; ?>"  hidden />
        <div>
          <label>nama_kitab</label>
          <input type="text" name="nama_kitab" value="<?php echo $data['nama_kitab']; ?>" autofocus="" required="" />
        </div>
        <div>
          <label>nama_muallim</label>
         <input type="text" name="nama_muallim" value="<?php echo $data['nama_muallim']; ?>" />
        </div>
        <div>
          <label>tanggal_pelajaran</label>
         <input type="date" name="tanggal_pelajaran" required=""value="<?php echo $data['tanggal_pelajaran']; ?>" />
        </div>
        <div>
          <label>jam_pelajaran</label>
         <input type="time" name="jam_pelajaran" required=""value="<?php echo $data['jam_pelajaran']; ?>" />
        </div>
        
        <div>
            <div>
              <label>kelas</label>
             <input type="text" name="kelas" required="" value="<?php echo $data['kelas']; ?>"/>
            </div>
         <button type="submit">Simpan Perubahan</button>
        </div>
        </section>
      </form>
  </body>
</html>