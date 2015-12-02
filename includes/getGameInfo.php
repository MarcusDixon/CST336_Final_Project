<?php

include 'database.inc.php';

$conn = getDatabaseConnection();
//gets database connection

if (isset($_GET['gameId'])) {
	$sql = "SELECT gameName, gameDescription, trailerLink
    FROM fp_game WHERE gameId = " . $_GET['gameId'];
	$records = getDataBySQL($sql);
	foreach ($records as $record) {
		echo "GameName: " . $record['gameName'] . "<br />";
		echo "GameDescription: " . $record['gameDescription'] . "<br />";
		echo "TrailerLink: " . $record['trailerLink'] . "<br />";
	}
}
?>
