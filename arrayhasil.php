<?php
    error_reporting(0);
    for ($i =0; $i <= count($_POST['nilai'])+1; $i++) {
        for ($j=0; $j <= count($_POST['nilai'])+1; $j++) { 
            echo $_POST['nilai'][$j][$i]." ";
            }
            echo "<br>";
    }
?>