<?php
echo "Welke operatie wil je uitvoeren? (+, -, %)\r\n";
$operatie = readline();
echo "Eerste getal?\r\n";
$eerste = readline();
echo "Tweede getal?\r\n";
$tweede = readline();
if (!is_numeric($eerste)) {
	echo $eerste." is niet een valide nummer\r\n";
	exit();
}
if (!is_numeric($tweede)) {
	echo $tweede." is niet een valide nummer\r\n";
	exit();
}
if ($operatie == "+") {
	echo $eerste+$tweede;
} elseif ($operatie == "-") {
	echo $eerste-$tweede;
} elseif ($operatie == "%") {
	echo $eerste%$tweede;
} else {
	exit("Operatie niet valide");
}
?>