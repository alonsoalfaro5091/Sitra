<?php 

require_once '../src/dbcon.php';

$filter = $_POST["filter"] ?? "";
$value = trim($_POST["value"] ?? "");

$sql = "SELECT id, date_time, full_name, grade FROM delays WHERE :filter_ = :value_";
$stmt = $pdo->prepare($sql);
$stmt->execute([
    ':filter_' => $filter,
    ':value_' => $value
])

?>