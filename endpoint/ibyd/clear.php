<?php 
$data = array('status' => 'success', 'description' => 'Konto debug usunięte');

header('Content-Type: application/json');
echo json_encode($data);
?>