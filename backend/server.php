<?php
$dbhost = "localhost:3306";
$dbuser = "root";
$dbpass = "";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass);

mysqli_query($conn, "set names 'utf8'");
$db = mysqli_select_db($conn, "onlineCAT");

$text = $_GET['text'];
$arr = array();
$k = 0;

$select = "SELECT * FROM `trans_memory`";
$list = mysqli_query($conn, $select);
while ($row = mysqli_fetch_array($list, MYSQLI_ASSOC)){
	if (similar_text($row['source_part'], $text, $percent) > 70){
		$arr[$k][0] = $row['source_part'];
		$arr[$k][1] = $row['correspond_trans'];
		$arr[$k][2] = $percent;
	}
}
echo json_encode($arr);
?>