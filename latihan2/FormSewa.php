<?php
$genre = array("Fiksi", "Non-Fiksi", "Karya Ilmiah", "Majalah");
$bulan = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

// Function to validate user input (optional)
function validateInput($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $title = validateInput($_POST["title"]);
  $genre = $_POST["genre"];
  $date = $_POST["date"];
  $month = $_POST["month"];
  $year = $_POST["year"];
  $time = $_POST["time"];

  echo "Judul Buku: " . $title . "<br>";
  echo "Kategori Buku: " . $genre . "<br>";
  echo "Tanggal Pinjam: " . $date . " " . $month . " " . $year . "<br>";
  echo "Lama Pinjam: " . $time . " hari<br>";
} else {
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Penyewaan Buku</title>
</head>
<body>
  <h1>Form Penyewaan Buku</h1>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    Judul Buku: <input type="text" name="title" required><br>
    Kategori Buku: 
    <select name="genre" required>
      <option value="" selected>Pilih kategori:</option>
      <?php
        foreach($genre as $gnr){
          echo "<option value='$gnr'>$gnr</option>";
        }
      ?>
    </select><br>
    Tanggal Pinjam: 
    <select name="date" required>
      <option value="" selected>Pilih tanggal:</option>
      <?php
        for($d=1;$d<=31;$d++){
          echo "<option value='$d'>$d</option>";
        }
      ?>
    </select>
    <select name="month" required>
      <option value="" selected>Pilih bulan:</option>
      <?php
        foreach($bulan as $mon){
          echo "<option value='$mon'>$mon</option>";
        }
      ?>
    </select>
    <select name="year" required>
      <option value="" selected>Pilih tahun:</option>
      <?php
        for($y=2023;$y<=2025;$y++){
          echo "<option value='$y'>$y</option>";
        }
      ?>
    </select><br>
    Lama Pinjam: <input type="number" name="time" min="1" required> hari<br>
    <input type="submit" name="btnSubmit" value="Simpan">
    <input type="reset" name="reset" value="Batal"><br>
  </form>
</body>
</html>
<?php
}
?>