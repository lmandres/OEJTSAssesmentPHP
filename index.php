<?php

session_start();
$_SESSION["responses"] = array();

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

	<form method="GET" action="assess.php">
	<input name="question" type="hidden" value="0">

	<table style="margin:0 auto; max-width:700px;">
	<tr>
	<td valign="top" style="font-size:90%;">

	<p>This is an interactive version of the <b>Open Extended Jungian Type Scales 1.2</b>, an alternative to the Myers-Briggs Type Indicator.</p>
	<p><b>Introduction:</b>  Carl Jung (1875-1961) was Swiss psychiatrist who proposed a theory of psychological types. His theory was taken and extended by Katharine Briggs and her daughter, Isabel Myers, personality enthusiasts who had studied his work extensively. They developed the Myers-Briggs Type Indicator which classified people into 16 different types on the basis of four dichotomies: Introversion-Extroversion, Sensing-Intuition, Thinking-Feeling, and Judging-Perceiving. The first three were adapted from Jung and the last developed by Myers-Briggs. So, for example, a person could be Extroverted-Sensing-Feeling-Perceiving (ESFP) or Introverted-iNtuiting-Thinking-Judging (INTJ). The Myers-Briggs types are the most popular pop-psych system. The Open Extended Jungian Type Scales was developed as an open source alternative to the Myers-Briggs Type Indicator. A <a href="http://openpsychometrics.org/tests/OEJTS/comparison/">statistical comparison</a> of the OEJTS with three other on-line MBTI alternatives found that the OEJTS was the most accurate.</p>
	<p><b>Participation:</b> Your use of this assessment should be for educational or entertainment purposes only. This is not psychological advice of any kind.</p>
	<input type="submit" value="Start" />
	<br/><br/>
	<b>References:</b>
	<li>Eric Jorgenson (2014). "<a href="http://openpsychometrics.org/tests/OEJTS/development/">Development of the Open Extended Jungian Type Scales</a>".</li>
	<li>James H. Reynierse (2012). "<a href="http://www.capt.org/research/article/JPT_Vol72_01_0312.pdf">Toward an Empirically Sound and Radically Revised Type Theory</a>". The Journal of Psychological Type 72(1).</li>
	<li>Open-Source Psychometrics Project (retrieved: 2021-06-13). "<a href="http://openpsychometrics.org">http://openpsychometrics.org</a>".</li>
	<br/><br/><br/>




	</td>
	</tr>
	</table>
	</form>

	</body>

	</head>

</html>
