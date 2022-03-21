<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pajak</title>
</head>
<body>
    <fieldset>
        <legend>Nilai PPnMB</legend>
<h3> Cari dulu nilai PPnMB</h3>
<form method="post">
TARIF PPnMB = <input type="text" name="a"placeholder= "MASUKKAN ANGKA TANPA MENGGUNAKAN PERSEN" value="<?php echo $_POST["a"] ?>" required><br>
HARGA BARANG = <input type="text" name="b"  placeholder= "MASUKKAN ANGKA" value="<?php echo $_POST["b"] ?>" required><br>
<?php
if(isset ($_POST["submit"]) && isset($_POST["a"]) && isset($_POST["b"])){
$a=$_POST["a"];
$b=$_POST["b"];
$perkalian1= $b*($a/100);
echo "NILAI PPnMB = $perkalian1";
}
?>
<br>
<input type="submit" name="submit" value="Hasil">
</form>
</fieldset>
</body>
</html>