<?php
header('Content-Type: application/json');
$response = array();
if (isset($_GET['sid']))
{

    $con=mysqli_connect("localhost", "root", "", "sja_db");


    $qry = "SELECT * FROM parent WHERE Id = '".$_GET['sid']."' ";

    $result = mysqli_query($con, $qry);  //mysql_query($qry);

    while ($row = mysqli_fetch_array($result))
    {
        array_push($response, $row);

    }

    echo json_encode($response);
}