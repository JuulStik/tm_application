<?php

$season = $_POST["seasons"];
$episode = $_POST['episodes'];
$episode = str_replace("'", '', $episode);
$episode = str_replace("’", '', $episode);
$src = "word_cloud_images/$season/$season,$episode.png";

echo "<img class='image' src='$src'>";
?>