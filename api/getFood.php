<?php
include 'connection.php';

$sql = $conn->query("SELECT * FROM food");
$res = array();

if ($sql) {
    while ($row = $sql->fetch_assoc()) {
        $res[] = $row;
    }
    http_response_code(200);
} else {
    http_response_code(404);
}
echo json_encode($res);
?>