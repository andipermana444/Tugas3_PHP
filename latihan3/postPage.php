<?php

$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['password'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$date = date_create($tanggal_lahir);
$program_studi = $_POST['program_studi'];
$alamat = $_POST['alamat'];
$handphone = $_POST['handphone'];
$jenis_kelamin = $_POST['jenis_kelamin'];

echo "<h1>Data anda sebagai berikut:</h1>";
echo "<p> Nama: $nama</p>";
echo "<p>E-mail: $email</p>";
echo "<p>Password: $password</p>";
echo "<p>Tanggal Lahir:</p>" . date_format($date, "Y/M/d");
echo "<p>Program Studi: $program_studi</p>";
echo "<p>Alamat: $alamat</p>";
echo "<p>Handphone: $handphone</p>";
echo "<p>Jenis Kelamin: $jenis_kelamin</p>";
echo '<meta http-equiv="Refresh" content="4; URL=SignUp.php">';
?>
<script>
alert("Sign Up Berhasil!");
</script>

