<?php
require_once 'db.php';
$sql = "SELECT * FROM culinary_trends"; 
$result_trend = $conn->query($sql);

$culinary_trends = [];

if ($result_trend->num_rows > 0) {
  while ($row = $result_trend->fetch_assoc()) {
    $culinary_trends[] = $row;
  }
}

return $culinary_trends;
?>