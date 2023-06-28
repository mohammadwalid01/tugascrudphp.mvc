<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title>PENDIDIKAN</title>
    <style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: salmon;
      }
    table {
      border: solid 1px #DDEEEE;
      border-collapse: collapse;
      border-spacing: 0;
      width: 70%;
      margin: 10px auto 10px auto;
    }
    table thead th {
        background-color: #DDEFEF;
        border: solid 1px #DDEEEE;
        color: #336B6B;
        padding: 10px;
        text-align: left;
        text-shadow: 1px 1px 1px #fff;
        text-decoration: none;
    }
    table tbody td {
        border: solid 1px #DDEEEE;
        color: #333;
        padding: 10px;
        text-shadow: 1px 1px 1px #fff;
    }
    a {
          background-color: salmon;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
    }
    </style>
  </head>
  <body>
    <center><h1>Data PENDIDIKAN</h1><center>
    <center><a href="tambah.php">+ &nbsp; Tambah Pendidikan</a><center>
    <br/>
    <table>
      <thead>
        <tr>
          <th>no</th>
          <th>nama_kitab</th>
          <th>nama_muallim</th>
          <th>tanggal_pelajaran</th>
          <th>jam_pelajaran</th>
          <th>kelas</th>
          <th>KET</th>
        </tr>
    </thead>
    <tbody>
      <?php
      $query = "SELECT * FROM pendidikan_asrama ORDER BY id ASC";
      $result = mysqli_query($koneksi, $query);
      if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
      }
      $no = 1;
      while($row = mysqli_fetch_assoc($result))
      {
      ?>
       <tr>
          <td><?php echo $no; ?></td>
          <td><?php echo $row['nama_kitab']; ?></td>
          <td><?php echo $row['nama_muallim']; ?>...</td>
          <td><?php echo $row['tanggal_pelajaran']; ?></td>
          <td><?php echo $row['jam_pelajaran']; ?></td>
          <td><?php echo $row['kelas']; ?></td>
          <td>
              <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a> |
              <a href="proses_hapus.php?id=<?php echo $row['id']; ?>" onclick="return confirm('ongkuen e hapusseh?')">Hapus</a>
          </td>
      </tr>
         
      <?php
        $no++; 
      }
      ?>
    </tbody>
    </table>
  </body>
</html>