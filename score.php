<?php

session_start();

if (
	isset($_GET["question"]) &&
	isset($_GET["qresponse"]) &&
	isset($_SESSION["responses"])
) {

	$question = 0;
	$response = 0;

	settype($question, "integer");
	settype($response, "integer");

	$question = (int)$_GET["question"];
	$question--;

	$response = (int)$_GET["qresponse"];

	if (
		((0 <= $question) && ($question <= 31)) &&
       		((1 <= $response) && ($response <= 5))
	) {
		$_SESSION["responses"][$question] = $response;
	}
}

?>
