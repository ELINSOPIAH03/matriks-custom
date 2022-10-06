<?php
    $n = $_POST['bilangan_n'];
    $m = $_POST['bilangan_m'];
    if (isset($_POST['submit'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="arrayhasil.php">
    <?php
        for ($i = 0; $i < $n; $i++) {
            for ($j=0; $j < $m; $j++) { 
                echo "Masukkan nilai array baris : ".$i.",".$j.": <input type='text' name='nilai[".$i."][".$j."]'><br>";
            }
        }
    ?>
    <input type="submit" value="Hasil">
</form>
</body>
</html>
<?php
}
?>