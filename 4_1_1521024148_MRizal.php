<!DOCTYPE html>
<html>
<head>
	<title>Studi Kasus 4_1</title>
</head>
<body>

	<?php
	$a = 92;
	if (($a>=0) && ($a<=59)) {
		echo "Cukup";
	} elseif (($a>=60) && ($a<=85)) {
		echo "Baik";
	} elseif (($a>=85) && ($a<=100)) {
		echo "Baik Sekali";
	} else {
		echo "Input Salah";
	}
	?>
</body>
</html>