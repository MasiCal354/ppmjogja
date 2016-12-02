<?php
session_start();
include 'dbc_ppmjogja.php';
//$db = new mysqli('localhost', 'root', '', 'ppmjogja');

$searchTerm = $_GET['term'];
//get matched data from skills table
$query = $con->query("SELECT * FROM data_santri WHERE nama LIKE '%".$searchTerm."%' ORDER BY nama ASC");
//var_dump($query->fetch_assoc()); die();
while ($row = $query->fetch_assoc()) {
    $data[] = $row['nama'];
}
//return json data
echo json_encode($data);
?>