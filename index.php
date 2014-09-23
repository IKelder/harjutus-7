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

<h3>Conditional statements in while loop</h3>
<?php
    $count = 1;

    while ($count <= 10) {
    	if ($count == 3) {
    		echo "kolm" . ", ";
    	} elseif ($count == 7) {
    		echo "seitse" . ", ";
    	} else {
    		echo $count . ", ";
    	}

    	$count += 1;
    }
?>

<h2>For loop</h2>
<?php 
for ($count=1; $count<=20; $count+= 1) {
 if ($count % 2 == 0) {
   echo "Number $count on paarisarv." . "<br>";
  }
  else {
   echo "Number $count on paaritu arv." . "<br>";
  }

} 
?>
</body>
</html>