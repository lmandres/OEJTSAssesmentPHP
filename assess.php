<?php

include "score.php";

$question = 0;
settype($question, "integer");

$oejts_json = <<< OEJTS
[["makes lists", "relies on memory"], ["sceptical", "wants to believe"], ["bored by time alone", "needs time alone"], ["accepts things as they are", "unsatisfied with the ways things are"], ["keeps a clean room", "just puts stuff where ever"], ["thinks \"robotic\" is an insult", "strives to have a mechanical mind"], ["energetic", "mellow"], ["prefer to take multiple choice test", "prefer essay answers"], ["chaotic", "organized"], ["easily hurt", "thick-skinned"], ["works best in groups", "works best alone"], ["focused on the present", "focused on the future"], ["plans far ahead", "plans at the last minute"], ["wants people's respect", "wants their love"], ["gets worn out by parties", "gets fired up by parties"], ["fits in", "stands out"], ["keeps options open", "commits"], ["wants to be good at fixing things", "wants to be good at fixing people"], ["talks more", "listens more"], ["when describing an event, will tell people what happened", "when describing an event, will tell people what it meant"], ["gets work done right away", "procrastinates"], ["follows the heart", "follows the head"], ["stays at home", "goes out on the town"], ["wants the big picture", "wants the details"], ["improvises", "prepares"], ["bases morality on justice", "bases morality on compassion"], ["finds it difficult to yell very loudly", "yelling to others when they are far away comes naturally"], ["theoretical", "empirical"], ["works hard", "plays hard"], ["uncomfortable with emotions", "values emotions"], ["likes to perform in front of other people", "avoids public speaking"], ["likes to know \"who?\", \"what?\", \"when?\"", "likes to know \"why?\""]]
OEJTS;

$prompts = json_decode($oejts_json);
$promptCount = count($prompts);
$posturl = "assess.php";

if (isset($_GET["question"])) {
	if ((0 <= $question) && ($question <= $promptCount-1)) {
		$question = (int)$_GET["question"];
		if ($question == $promptCount-1) {
			$posturl = "finalscore.php";
		}
	} else {
		$question = 0;
	}
}

?>

<!DOCTYPE html>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Open Extended Jungian Type Scales</title>

<head>
<body>

<form method="GET" action="<?= $posturl ?>">

<table style="margin: auto auto;" cellspacing="0">

</tr><tr><td></td></tr>
<tr style="background-color:#E0E0BC">
<td align="right"><?= $prompts[$question][0] ?></td>
<td><input type="radio" id="Q1V1" name="qresponse" value="1" /></td>
<td><input type="radio" id="Q1V2" name="qresponse" value="2" /></td>
<td><input type="radio" id="Q1V3" name="qresponse" value="3" /></td>
<td><input type="radio" id="Q1V4" name="qresponse" value="4" /></td>
<td><input type="radio" id="Q1V5" name="qresponse" value="5" /></td>
<td align="left"><?= $prompts[$question][1] ?></td>
</tr><tr><td></td></tr>

<tr>
<td style="text-align: center;" colspan="7"><br/><input type="submit" value="Submit" /><br/><br/><br/><br/></td>
</tr>

<input type="hidden" value="<?= $question+1 ?>" name="question">

</table>
</form>

</body>

</html>
