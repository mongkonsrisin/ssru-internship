<?php
header("Access-Control-Allow-Origin:*");
header('Access-Control-Allow-Methods: GET, POST, OPTIONS, DELETE, PUT');
header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Request-With, X-CLIENT-ID, X-CLIENT-SECRET');
header('Access-Control-Allow-Credentials: true');
require('database.php');
$sql = "SELECT * FROM company WHERE com_region=".$_GET['zone'];
$result1 = mysqli_query($con,$sql);
	while($row = mysqli_fetch_assoc($result1)) {
		$sql = 'SELECT GROUP_CONCAT(stu_fname SEPARATOR ",") AS stu FROM student WHERE stu_companyid='.$row['com_id'];
		$result = mysqli_query($con,$sql);
        $stu = mysqli_fetch_assoc($result);
		$row['stu_names'] = $stu['stu'];
		$data[] = $row;
	}
echo json_encode($data);
?>
