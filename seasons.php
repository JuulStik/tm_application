<?php
  $conn = mysqli_connect("127.0.0.1", "root", "", "friendsdb");
  $sql = "SELECT * FROM sentiments where seasons != 'Season' GROUP BY seasons";
  $result = $conn->query($sql);
  while ($row = $result->fetch_assoc()) {
    $seasons = $row['seasons'];
    // $episode = $row['COL 2'];


    echo "
    <option class='season'>$seasons</option>
    ";
  };
?>