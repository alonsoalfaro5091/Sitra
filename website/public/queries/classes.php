<?php 

require_once '../../src/dbcon.php';

$sql = "SELECT cla_id, cla_year, cla_group FROM CLASSES ORDER BY cla_id";

$stmt = $pdo->prepare($sql);
$stmt->execute();

$classes = $stmt->fetchAll(PDO::FETCH_ASSOC);

header('Content-Type: application/json');

echo json_encode($classes);
?>