<?php
	
	// General variables
	$age = '';
	$adultAge = 23;
	$name = "Zubair";
	$password = "mango32";
	$fakePassword = 435679;

	// Control Structures
	// If
	if ($age) { ?>
			
			<!-- <html>
				<head>
					<title>My first page</title>
				</head>
				<body>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt facilis a corporis qui, repudiandae perferendis fugit impedit nemo quasi ullam, aut deleniti laboriosam harum cum debitis doloribus dolorum ipsa fuga!</p>
				</body>
			</html> -->
		<?php
	}

	// Using ternary if
	echo $age ? $age : "No age";

	// Else
	// if (strlen($password) >= 8) {
	// 	echo "Password is good";
	// } else {
	// 	echo "Invalid password";
	// };

	$number = 32;

	// Elseif
	// if ($number < 10) {
	// 	echo "Number less than 10";
	// } elseif ($number > 10 && $number < 20) {
	// 	echo "Number between 10 and 20";
	// } elseif ($number > 20 && $number % 3 == 0) {
	// 	echo "Number greater than 20 and is a multiple of 3";
	// } else {
	// 	echo "Number doesn't match any thing";
	// }
	

	// isset(var)
	// if (isset($age)) {
	// 	echo "<!DOCTYPE html>
	// 	<html>
	// 	<head>
	// 		<title>Age is set</title>
	// 	</head>
	// 	<body>
	// 		<p>Lorem jsdvhsdjkvsdjk sdgyusdhgdu sdvsduhvsd</p>
	// 	</body>
	// 	</html>";
	// }
	// is_null(var)

	// if (!is_null($age)) {
	// 	echo "<!DOCTYPE html>
	// 	<html>
	// 	<head>
	// 		<title>Age is not null</title>
	// 	</head>
	// 	<body>
	// 		<p>lorem test jksdgisd gyudguksd ugsdugys</p>
	// 	</body>
	// 	</html>";
	// }

	//!
	// if (!$age) {
	// 	echo "No age set";
	// }

	// Boolean logic
	// And &&
	// true x true = true
	// true x false = false
	// if ($age && $adultAge) {
	// 	echo "Both are set";
	// }

	// Or ||
	// if ($age || $adultAge) {
	// 	echo "<br>oNE IS SET";
	// }

	// Make login form
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ternary test</title>
</head>
<body>
	<h1>Hello <?php echo $password ? "Logged In" : "Login" ?></h1>
</body>
</html>