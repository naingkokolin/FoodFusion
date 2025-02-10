<?php
require_once 'db.php';
$sql = "SELECT * FROM resources WHERE file_type = 'video' AND resource_type = 'culinary';";
$result_resources = $conn->query($sql);

$resource_videos = [];

if ($result_resources->num_rows > 0) {
  while ($row = $result_resources->fetch_assoc()) {
    $resource_videos[] = $row;
  }
} else {
  echo "No resources found.";
}

return $resource_videos;
