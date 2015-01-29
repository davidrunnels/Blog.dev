<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Roll Dice</title>
</head>
<body>
<p><h1>The dice roll was <?= $roll ?>.</h1></p>
<p><h1>You guessed <?= $number ?>.</h1></p>
<?php if ($roll == $number): ?>
	<p><h1>You guessed the number!</h1></p>
<?php endif; ?>
	
</body>
</html>