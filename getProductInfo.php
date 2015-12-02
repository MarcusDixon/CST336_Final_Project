<?php

include 'includes/database.inc.php';

$conn = getDatabaseConnection();
//gets database connection

if (isset($_GET['productId'])) {
	$sql = "SELECT gameName, gameDescription, trailerLink
    FROM fp_game WHERE gameId = " . $_GET['gameId'];
	$records = getDataBySQL($sql);
	foreach ($records as $record) {
		echo "gameName: " . $record['gameName'] . "<br />";
		echo "gameDescription: " . $record['gameDescription'] . "<br />";
		echo "trailerLink: " . $record['trailerLink'] . "<br />";
	}
}
?>
