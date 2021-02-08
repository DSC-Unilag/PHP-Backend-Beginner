<?php
	
	// Some variables
	$students = ["Myself", "Saheed", "You", "Us"];
	$number = count($students);

	// While
	// while ($students) {
	// 	echo $students[count($students) - 1];

	// 	array_pop($students);
	// }

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Hello, world!</h1>
    <ul>
    	<?php
    		$x = [
    			"I love you",
    			"I don't like rice",
    			"lorem dsdsdhdh"
    		];
    		while(count($x) > 31)  {
    			$current = $x[0];
    			echo "<li>" . $current . "</li>";
    			array_shift($x);
    		}
    	?>
    </ul>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>
</html>

<?php

	// Do while
	do {
		echo $x[0];
	} while (!$x);

?>