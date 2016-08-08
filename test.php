<html>
<body>

<?php
$answer = $_POST["answer"];

if (strcasecmp($answer, "blue") == 0) 
{
	echo "You entered: blue <br>";
	echo "You guessed correctly! Great job!";
}
else
{
	echo "You entered: " . $answer . "<br>";
	echo "You guessed incorrectly. :(";
}

?>
</body>
</html>