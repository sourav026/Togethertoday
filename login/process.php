<?php include 'database.php';

$name=$_POST[''];
$id=$_POST['id'];



mysqli_query($connect, "insert into patient values('$cid','$id','$age','$password','$weight','$height','$date','$name','$phone','$city');");

if(mysqli_affected_rows($connect) > 0){
	echo "<p>Patient added</p>";
}
else{
	echo "patient not added";
	echo mysqli_error ($connect);
}
?>
