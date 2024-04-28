<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     for($i=1;$i<=6;$i++){
        for($j=1;$j<=6;$j++){
            $c=$i*$j;
            echo "$c \t";
        }
        echo "<br>";

     }
    ?>
</body>
</html>
