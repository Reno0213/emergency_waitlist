<?php
require 'db.php';

$name = $_POST['name'];
$severity = $_POST['severity'];

$name = "Karthikan Suntharesan";
$severity = "2";

$sql = 'INSERT INTO patients (name, severity) VALUES (?, ?)';
$stmt = $pdo->prepare($sql);
$stmt->execute([$name, $code, $severity]);

header('Location: index.html');
