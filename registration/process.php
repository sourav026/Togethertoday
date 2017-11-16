<?php include 'database.php';

$name=$_POST['name'];
$id=$_POST['id'];
$cid=$_POST['cid'];
$age=$_POST['age'];
$password=$_POST['password'];
$weight=$_POST['weight'];
$height=$_POST['height'];
$date=$_POST['date'];
$phone=$_POST['phone'];
$city=$_POST['city'];



mysqli_query($connect, "insert into patient values('$cid','$id','$age','$weight','$height','$date','$name','$phone','$city',date_add('$date',INTERVAL 60 day));");



if(mysqli_affected_rows($connect) > 0){
	echo "<p>Patient added</p>";
}
else{
	echo "patient not added";
	echo mysqli_error ($connect);
}
?>
