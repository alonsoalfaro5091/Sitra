<?php 

require_once '../src/dbcon.php';

$filter = $_POST["filter"] ?? "";
$value = trim($_POST["value"] ?? "");

?>