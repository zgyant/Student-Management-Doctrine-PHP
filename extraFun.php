<?php

function privOut($id)
{
    $servername = "localhost";
$username = "root";
$password = "";
$conn = new mysqli($servername, $username, $password,'collegeapp');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
   $sql = 'SELECT * FROM privilage where id='.$id;
    $result = $conn->query($sql);
    if (!$result) {
        die(mysqli_error($conn));
    }
    if (mysqli_num_rows($result) > 0) {
        while ($row = $result->fetch_assoc()) {
            $pid= $row['pid'];
            $addPri=$row['adddetail'];
            $upPri=$row['updatedetail'];
            $delPri=$row['deletedetail'];
            return array($addPri,$upPri,$delPri);


        };
    }

}
