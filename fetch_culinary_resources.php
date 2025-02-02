<?php
require_once 'db.php';
$sql = "SELECT * FROM culinary_resources";
$result_resources = $conn->query($sql);

$culinary_resources = [];

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    echo '<div class="resource-card">';
    echo '<img src="' . $row['thumbnail_path'] . '" alt="' . $row['title'] . '">';
    echo '<h3>' . $row['title'] . '</h3>';
    echo '<a href="' . $row['file_path'] . '" download class="download-btn">Download</a>';
    echo '</div>';
  }
} else {
  echo "No resources found.";
}

return $culinary_resources;
?>