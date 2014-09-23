<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Harjutus 7</title>
</head>
<body>
<h2>While loop</h2>
<?php
    $count = 10;

    while ($count <= 100) {
        echo $count . ", ";
        $count += 1;
    }
?> <br><br>
<?php
    $count = 100;

    while ($count <= 1000) {
        echo $count . ", ";
        $count += 100;
    }
?>
</body>
</html>