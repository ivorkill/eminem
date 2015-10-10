<?php
$search_string;
$sql = "SELECT * FROM newsarticles WHERE title LIKE '%$search_string%'";
$sql = "SELECT * FROM newsarticles WHERE content LIKE '%$search_string%'";
$search_result = $mysqli->query($sql);
include 'function.php';
?>