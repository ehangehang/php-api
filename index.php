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
  </tr>
  </div>
  <?php
  include('connect.php'); //membuat koneksi
  $sql_tampil ="SELECT * FROM tabel_kk4"; //perintah SQL untuk menampilkan tabel
  $peserta=mysqli_query($conn,$sql_tampil); //jalankan dengan mySQL Query
  while($baris_data=mysqli_fetch_array($peserta,MYSQLI_ASSOC)){ //lakukan fetch dengan result type MYSQL_ASSOC
    echo'
    </tr>
      <td>'.$baris_data['id'].'</td>
      <td>'.$baris_data['username'].'</td>
      <td>'.$baris_data['password'].'</td>
      <td>'.$baris_data['level'].'</td>
      <td>'.$baris_data['fullname'].'</td>
    </tr>';
  }
  ?>
</body>
</html>