<?php
require_once 'db.php';
$sql = "SELECT * FROM events"; 
$result_event = $conn->query($sql);

$events = [];

if ($result_event->num_rows > 0) {
  while ($row = $result_event->fetch_assoc()) {
    $events[] = $row;
  }
}

return $events;
?>