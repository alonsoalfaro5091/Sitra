<?php 

require_once '../../src/dbcon.php';

$sql = "SELECT stu_id, stu_names, stu_surnames FROM STUDENTS ORDER BY stu_id";

$stmt = $pdo->prepare($sql);
$stmt->execute();

$classes = $stmt->fetchAll(PDO::FETCH_ASSOC);

header('Content-Type: application/json');

echo json_encode($classes);
?>