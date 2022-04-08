<?php 
if (empty($_POST['seasons']) or empty($_POST['episodes']) or empty($_POST['characters'])) {
    $sentiment = 'not found';
    echo "<div class='display'>$sentiment</div>";
} else {
    $season = $_POST['seasons'];
    $episode = addslashes($_POST['episodes']);
    $characters = $_POST['characters'];
    // $episode = mysql_real_escape_string($episode);

    $conn = mysqli_connect("127.0.0.1", "root", "", "friendsdb");

    $sql = "SELECT * FROM sentiments where seasons = '$season' and episodes = '$episode' and characters = '$characters' and seasons != 'Season'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 0) {
        echo "<div class='display'>not found</div>";
      } else {
        while ($row = $result->fetch_assoc()) {
            $emotion = $row['emotion'];
            $sentiment = $row['sentiment'];
            $episode = stripslashes($episode);
            echo "<div class='display'>The emotion in $season $episode of $characters is $emotion with a sentiment value of $sentiment</div>";
        };
      };
    
};
?>
