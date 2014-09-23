<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Harjutus 7</title>
<style type="text/css">
	.info > tbody > tr > td {
		border: 1px solid red;
		font-size: 20px;
	}
</style>
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

<h2>Foreach loop</h2>
<ol>
 <?php
 	$companies = array ("Euronics", "New Yorker", "Nordic Hotels", "Eagle Vision", "Microsoft"); 
 	foreach ($companies as $company) {
 		echo "<li>" . $company . "</li>";
 	}
 ?>
 </ol>


<table class="info">
 <?php
    $contact = array(
        "first_name" => "Ingrid",
        "last_name" => "Kelder",
        "e-mail" => "ingrid.kelder@khk.ee",
        "age" => 20
    );

    foreach ($contact as $attribute => $value ) {
        echo "<tr>" . "<td>{$attribute}:</td> <td>{$value}</td><br>" . "</tr>";
    }
?>
</table>
</body>
</html>