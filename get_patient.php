<?php
require 'db.php';

$sql = 'SELECT * FROM patients WHERE status = 'waiting' ORDER BY severity DESC, arrival_time ASC';
$stmt = $pdo->query($sql);
$patients = $stmt->fetchAll();

echo json_encode($patients);
