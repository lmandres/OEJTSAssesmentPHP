<?php

include "score.php";

$responses = $_SESSION["responses"];

$scaleIE = (
	30 -
	$responses[2] -
	$responses[6] -
	$responses[10] +
	$responses[14] -
	$responses[18] +
	$responses[22] +
	$responses[26] -
	$responses[30]
);

$scaleSN = (
	12 +
	$responses[3] +
	$responses[7] +
	$responses[11] +
	$responses[15] +
	$responses[19] -
	$responses[23] -
	$responses[27] +
	$responses[31]
);

$scaleFT = (
	30 -
	$responses[1] +
	$responses[5] +
	$responses[9] -
	$responses[13] -
	$responses[17] +
	$responses[21] -
	$responses[25] -
	$responses[29]
);

$scaleJP = (
	18 +
	$responses[0] +
	$responses[4] -
	$responses[8] +
	$responses[12] -
	$responses[16] +
	$responses[20] -
	$responses[24] +
	$responses[28]
);

$ptype = "";

if ($scaleIE > 24) {
	$ptype .= "E";
} else {
	$ptype .= "I";
}

if ($scaleSN > 24) {
	$ptype .= "N";
} else {
	$ptype .= "S";
}

if ($scaleFT > 24) {
	$ptype .= "T";
} else {
	$ptype .= "F";
}

if ($scaleJP > 24) {
	$ptype .= "P";
} else {
	$ptype .= "J";
}

if (
	isset($_SESSION["redirect"]) &&
	$_SESSION["redirect"] != ""
) {
	$redirecturl = $_SESSION["redirect"] . "&personalitytype=" . $ptype;
	session_destroy();
	header("Location: " . $redirecturl);
	exit();
}

session_destroy();

$scoreIE = 3 + (($scaleIE - 24) / 8);
$scoreSN = 3 + (($scaleSN - 24) / 8);
$scoreFT = 3 + (($scaleFT - 24) / 8);
$scoreJP = 3 + (($scaleJP - 24) / 8);

?>


<!DOCTYPE html>

	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Myers-Briggs/Jung Test: Open Extended Jungian Type Scales</title>
	<link rel="stylesheet" href="blue-style.css" type="text/css" id="" media="print, projection, screen" />
	<link href="http://fonts.googleapis.com/css?family=Arvo" rel="stylesheet" type="text/css">
	 <meta name="description" content="Free personality testing measuring Myers-Briggs or Jungian types, 3-6 minutes.">
	<style type="text/css">
	td, th, div
	{
		font-family: "Arvo", serif;
	}
	</style>
	</head>
	<body style="margin: 0;padding: 0;">

	<h1>Your personality type is <?= $ptype ?>.</h1>

	<p>
		You can get further results on your
		personality type by clicking the link
		below.<br />
		<br />
		Note: You will be redirected to an external website.
	</p>

	<p><a href="https://openpsychometrics.org/tests/OEJTS/results.php?r=<?= $scoreIE ?>,<?= $scoreSN ?>,<?= $scoreFT ?>,<?= $scoreJP ?>">Take me to the Open-Source Psychometrics Project.</a></p>

	</body>

	</html>
