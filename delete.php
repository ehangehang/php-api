<?php
include 'connect.php';
$Id = $_GET['id'];

$sql_delete=("DELETE FROM tabel_kk4 WHERE id='$id' ");

mysqli_query($conn,$sql_delete)or die(mysqli_error($conn));

echo '<script>
alert("Data Berhasil Dihapus");
location="index.php?"
</script>';

?>
