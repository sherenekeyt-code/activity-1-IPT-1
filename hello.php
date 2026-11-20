<?php
// hello.php - returns data as JSON, not HTML

header('Content-Type: application/json');

$response = [
    'message' => 'Hello from the server!',
    'student' => 'shrinekate',
    'course' => 'IPT 2',
    'time' => date('Y-m-d H:i:s')
];

echo json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
?>
