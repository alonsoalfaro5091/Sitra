<?php

require_once '../../src/dbcon.php';

$stuId = $_POST['stu-id'] ?? '';

$query = 'INSERT INTO DELAYS (stu_id) VALUES (:stu_id)';

$stmt = $pdo->prepare($query);

$stmt->execute([':stu_id' => $stuId]);

header("Location: ../delays.php")

?>