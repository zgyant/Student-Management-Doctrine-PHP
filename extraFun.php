<?php
class extraFun
{
function privOut($id)
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $conn = new mysqli($servername, $username, $password, 'collegeapp');

// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = 'SELECT * FROM privilage where id=' . $id;
    $result = $conn->query($sql);
    if (!$result) {
        die(mysqli_error($conn));
    }
    if (mysqli_num_rows($result) > 0) {
		//retrieving previleges from the database
        while ($row = $result->fetch_assoc()) {
            $pid = $row['pid'];
            $addPri = $row['adddetail'];
            $upPri = $row['updatedetail'];
            $delPri = $row['deletedetail'];
            return array($addPri, $upPri, $delPri);
        };
    }
}

	function toExcel() {
		//file format
        header("Content-Type: text/csv");
		//file name can be changes according to the need
        header("Content-Disposition: attachment; filename=student_detail.csv");
        header("Expires: 0"); // Proxies
        $out = fopen('php://output', 'w');
		//database connection
        $conn = new mysqli('localhost', 'root', '', 'collegeapp'); //change according to need
        $sql = 'SELECT * FROM `student_detail`';
        $result = $conn->query($sql);
        while ($row = mysqli_fetch_assoc($result)) {
            fputcsv($out, $row, ',', '"');
        }
        fclose($out);
}
}
if (isset($_GET['action'])) 
{
	    if ($_GET['action'] == 'toExcel') 
		{
			extraFun::toExcel();
		}
}

