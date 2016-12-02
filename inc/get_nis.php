<?php
session_start();
include '../../dbc_ppmjogja.php';
//$db = new mysqli('localhost', 'root', '', 'ppmjogja');

$searchTerm = $_GET['name'];
//get matched data from skills table
$query = $con->query("SELECT * FROM data_santri WHERE nama = '".$searchTerm."'");
//var_dump($query->fetch_assoc()); die();
while ($row = $query->fetch_assoc()) {
    $data[] = $row['nis'];
}
//var_dump();
//return json data
echo json_encode($data);
?>