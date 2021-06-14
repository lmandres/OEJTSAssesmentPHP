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

print_r($responses);

echo "<br />";
echo $scaleIE . "<br />";
echo $scaleSN . "<br />";
echo $scaleFT . "<br />";
echo $scaleJP . "<br />";
echo "<br />";
echo (($scaleIE - 25) / 10 / 0.9) . "<br />";
echo (($scaleSN - 25) / 10 / 0.9) . "<br />";
echo (($scaleFT - 25) / 10 / 0.9) . "<br />";
echo (($scaleJP - 25) / 10 / 0.9) . "<br />";
echo "<br />";
echo $ptype;

?>
