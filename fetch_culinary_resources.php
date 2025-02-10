<?php
require_once 'db.php';
$sql = "SELECT * FROM resources";
$result_resources = $conn->query($sql);

$culinary_resources = [];

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $culinary_resources[] = $row;
  }
} else {
  echo "No resources found.";
}

return $culinary_resources;
?>