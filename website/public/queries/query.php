<?php 

require_once '../../src/dbcon.php';

$filter = $_POST["filter"] ?? "";
$value = trim($_POST["value"] ?? "");

$sql = match($filter) {
    '1' =>     "SELECT del_id, del_date, del_time, stu_names || ' ' || stu_surnames as stu_fullname, cla_year || '°' || cla_group as cla_name FROM DELAYS NATURAL JOIN STUDENTS NATURAL JOIN CLASSES WHERE stu_id = :value_",
    '2' =>     "SELECT del_id, del_date, del_time, stu_names || ' ' || stu_surnames as stu_fullname, cla_year || '°' || cla_group as cla_name FROM DELAYS NATURAL JOIN STUDENTS NATURAL JOIN CLASSES WHERE cla_id = :value_",
    '3' =>     "SELECT del_id, del_date, del_time, stu_names || ' ' || stu_surnames as stu_fullname, cla_year || '°' || cla_group as cla_name FROM DELAYS NATURAL JOIN STUDENTS NATURAL JOIN CLASSES WHERE del_date = :value_",
    default => "SELECT del_id, del_date, del_time, stu_names || ' ' || stu_surnames as stu_fullname, cla_year || '°' || cla_group as cla_name FROM DELAYS NATURAL JOIN STUDENTS NATURAL JOIN CLASSES"
};

$stmt = $pdo->prepare($sql);

if ($filter === '0') {
	$stmt->execute();
} else {
	$stmt->execute([':value_' => $value]);
}

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

header('Content-Type: application/json');

echo json_encode($results);

?>