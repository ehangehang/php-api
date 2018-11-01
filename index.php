<html>
<head>
  <title>Data</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

  <div class="container">
    <h2><center>DATA PESERTA</center></h2>
    <table class="tabel_kk4" align="center">
  <tr>
    <th>ID</th>
    <th>Username</th>
    <th>Password</th>
    <th>Level</th>
    <th>Fullname</th>
  <th>Action</th>
  </tr>
  </div>
  <?php
  include('connect.php');// 1. Lakukan include koneksi.php untuk membuat koneksi
  $sql_tampil ="SELECT * FROM tabel_kk4";// 2. Buat perintah SQL untuk menampilkan data
  $peserta=mysqli_query($conn,$sql_tampil);// 3. Jalankan perintah diatas dengan fungsi mysqli_query
  while($baris_data=mysqli_fetch_array($peserta,MYSQLI_ASSOC)){// 4. Lakukan fetch dengan result type MYSQL_ASSOC
   ?> 
    </tr>
      <td><?php echo $baris_data['id']; ?></td>
      <td><?php echo $baris_data['username']; ?></td>
      <td><?php echo $baris_data['password']; ?></td>
      <td><?php echo $baris_data['level']; ?></td>
      <td><?php echo $baris_data['fullname']; ?></td>
      <td>
      <a class="edit" href="edit.php?Id=<?php echo $baris_data['Id']; ?>">Edit</a> |
      <a class="hapus" href="delete.php?Id=<?php echo $baris_data['Id']; ?>">Delete</a>
      </td>
    </tr>
  <?php } ?>
</body>
</html>