<?php

header('Content-Type: application/json');
$response = array();
if (isset($_GET['sid']))
{
    $query = $this->db->where('Id', $_GET['sid']);
    $query = $this->db->get('parent');
    $response = $query->result_array();
    echo json_encode($response);
}
?>
