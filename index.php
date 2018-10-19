<html>
<head>
  <title>Data</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

  <div class="container">
    <h2><center>DATA PESERTA</center></h2>
    <table class="tabel" align="center">
  <tr>
    <th>Id</th>
    <th>Username</th>
    <th>Password</th>
    <th>Level</th>
    <th>Fullname</th>
  </tr>
  </div>
  <?php
  include('connect.php'); //membuat koneksi
  $sql_tampil ="SELECT * FROM tabel"; //perintah SQL untuk menampilkan tabel
  $peserta=mysqli_query($conn,$sql_tampil); //jalankan dengan mySQL Query
  while($baris_data=mysqli_fetch_array($peserta,MYSQLI_ASSOC)){ //lakukan fetch dengan result type MYSQL_ASSOC
    echo'
    </tr>
      <td>'.$baris_data['Id'].'</td>
      <td>'.$baris_data['Username'].'</td>
      <td>'.$baris_data['Password'].'</td>
      <td>'.$baris_data['Level'].'</td>
      <td>'.$baris_data['Fullname'].'</td>
    </tr>';
  }
  ?>
</body>
</html>