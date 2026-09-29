<?php 

require_once '../../src/dbcon.php';

$filter = $_POST["filter"] ?? "";
$value = trim($_POST["value"] ?? "");

$sql = match($filter) {
    '1' =>     "SELECT del_id, del_date, del_time, stu_name || ' ' || stu_surnames, cla_id FROM DELAYS NATURAL JOIN STUDENT WHERE stu_id = :value_",
    '2' =>     "SELECT del_id, del_date, del_time, stu_name || ' ' || stu_surnames, cla_id FROM DELAYS NATURAL JOIN STUDENT WHERE cla_id = :value_",
    '3' =>     "SELECT del_id, del_date, del_time, stu_name || ' ' || stu_surnames, cla_id FROM DELAYS NATURAL JOIN STUDENT WHERE del_date = :value_",
    default => "SELECT del_id, del_date, del_time, stu_name || ' ' || stu_surnames, cla_id FROM DELAYS NATURAL JOIN STUDENT"
};

$stmt = $pdo->prepare($sql);
$stmt->execute([':value_' => $value]);

?>