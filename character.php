<?php
  $conn = mysqli_connect("127.0.0.1", "root", "", "friendsdb");
  $sql = "SELECT * FROM sentiments where seasons != 'Season' GROUP BY characters";
  $result = $conn->query($sql);
  while ($row = $result->fetch_assoc()) {
    $character = $row['characters'];

    echo "
    <option class='character'>$character</option>
    ";
  };
?>