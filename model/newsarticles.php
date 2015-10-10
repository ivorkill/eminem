<?php
function selectNewsarticles(){
	global $mysqli;
	$result = $mysqli->query("SELECT * FROM newsarticles");
	while ($newsarticles = $result->fetch_assoc()){
		$newsList[] = $newsArticle;
	}
	return $newsList;
}
function getNewsarticles($id){
	global $mysqli;
	$result = $mysqli->query("SELECT * FROM newsarticles WHERE id = " . $id);
	$newsArticle = $result->fetch_assoc();
	return $newsArticle;
}
?>