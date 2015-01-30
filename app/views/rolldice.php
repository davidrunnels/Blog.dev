<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Roll Dice</title>
</head>
<body>
<p><h2>The dice roll was <?= $roll ?>.</h2></p>
<p><h2>You guessed <?= $number ?>.</h2></p>

<? if ($roll == $number): ?>
	<p><h1>You guessed the number!</h1></p>
<? endif; ?>
	
</body>
</html>