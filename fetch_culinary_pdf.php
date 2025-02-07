<?php
require_once 'db.php';
$sql = "SELECT * FROM culinary_resources WHERE resource_type = 'pdf'";
$result_resources = $conn->query($sql);

$resource_pdfs = [];

if ($result_resources->num_rows > 0) {
  while ($row = $result_resources->fetch_assoc()) {
    $resource_pdfs[] = $row;
  }
} else {
  echo "No resources found.";
}

return $resource_pdfs;
