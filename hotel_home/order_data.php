<?php
if(isset($_POST['email1'])) {        
	$type = $_POST['type'];
	$check_in = $_POST['check_in'];
	$check_out = $_POST['check_out'];
	$rooms = $_POST['rooms'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email1 = $_POST['email1'];
	$comments = $_POST['comments'];
}
require_once 'config.php';

$sql="SELECT COUNT(*) FROM rooms WHERE type='$type' AND status='vacant'";
$result=mysql_query($sql);
if($result === FALSE) {
	die(mysql_error());
}
if (mysql_num_rows($result) > 0) {			
	while ($row = mysql_fetch_array($result)) {
		$room_number = $row['COUNT(*)'];
		echo $room_number;
	}
}
if($rooms<=$room_number){
	$insert="insert into reserve values (null, '$fname', '$lname', '$email1', '$rooms', '$comments')";	
	$result=mysql_query($insert);
	if($result === FALSE) {
		die(mysql_error());
	}
	$update="update rooms SET check_in='$check_in', check_out='$check_out', status='booked' WHERE type='$type' AND status='vacant' ORDER BY room_no 
ASC LIMIT $rooms";

	$result=mysql_query($update);
	if($result === FALSE) {
		die(mysql_error());
	}
}
else{
	echo '<script language="javascript">';
	echo 'alert("Not Enough Room Available!!")';
	echo '</script>';
}

?>

<?PHP include'index.php';?>