<?php 

$season = $_POST['seasons'];

$conn = mysqli_connect("127.0.0.1", "root", "", "friendsdb");

$sql = "SELECT * FROM sentiments where seasons = '$season' GROUP BY episodes";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    $episodes = $row['episodes'];

    echo "
    <option class='episodes'>$episodes</option>
    ";
};

?>