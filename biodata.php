<!DOCTYPE HTML>  
<html>
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>
<body style="text-align: center" >  

<?php
// define variables and set to empty values
$nama = $jeniskelamin = $agama = $alamat = $tempatlahir = $tanggallahir = $hobby = $citacita = $usia = $asalsekolah = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nama = test_input($_POST["nama"]);
  $jeniskelamin = test_input($_POST["gender"]);
  $agama = test_input($_POST["agama"]);
  $alamat = test_input($_POST["alamat"]);
  $tempatlahir = test_input($_POST["tempatlahir"]);
  $tanggallahir = test_input($_POST["tanggallahir"]);
  $hobby = test_input($_POST["hobby"]);
  $citacita = test_input($_POST["citacita"]);
  $usia = test_input($_POST["usia"]);
  $asalsekolah = test_input($_POST["asalsekolah"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<div class="form1">
<h2>PHP Form Validation Example</h2>
<p><form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"></p>
  Nama: <input type="text" name="nama">
  <br><br>
  Jenis Kelamin: <select name="gender" class="form-control">
<option></option>
<option value="L">Laki-laki</option>
<option value="P">Perempuan</option>
</select>
  <br><br>
  Agama: <select name="agama" class="form-control">
  <option></option>
<option value="I">Islam</option>
<option value="KR">Kristen</option>
<option value="KA">katolik</option>
<option value="H">Hindu</option>
<option value="B">Budhha</option>
<option value="KH">Kong Hucu</option>
</select>
  <br><br>
  Alamat: 
  <textarea name="alamat" rows="5" cols="40"></textarea>
  <br><br>
  Tempat Lahir: <input type="text" name="tempatlahir">
  <br><br>
  Tanggal Lahir: <input type="date" name="tanggallahir">
  <br><br>
  Hobby : <input type="text" name="hobby">
  <br><br>
  Cita-Cita : <input type="text" name="citacita">
  <br><br>
  Usia : <input type="text" name="usia">
  <br><br>
  Asal sekolah : <input type="text" name="asalsekolah">
  <br><br>
  <input type="submit" name="submit" value="Submit" class="btn btn-light">  
</form>
</div>

<?php
echo "<h2>Your Input:</h2>";
echo $nama;
echo "<br>";
echo $jeniskelamin;
echo "<br>";
echo $agama;
echo "<br>";
echo $alamat;
echo "<br>";
echo $tempatlahir;
echo "<br>";
echo $tanggallahir;
echo "<br>";
echo $hobby;
echo "<br>";
echo $citacita;
echo "<br>";
echo $usia;
echo "<br>";
echo $asalsekolah;
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>