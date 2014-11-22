<?php
if(isset($_POST['email'])) {
	$name = $_POST['name'];	
	$email = $_POST['email'];
	$rating = $_POST['rating'];
	$text = $_POST['message'];         
}
require_once 'config.php';
$insert="insert into review values (null, '$name', '$email', '$text', '$rating')";	
$result=mysql_query($insert);
if($result === FALSE) {
	die(mysql_error());
}
?>

<?php
	include 'index.php';
?>
