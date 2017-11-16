<?php include 'database.php';

$docname=$_POST['docname'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$docid=$_POST['docid'];
$hosid=$_POST['hosid'];
$speciality=$_POST['speciality'];



mysqli_query($connect, "insert into doctors values('$hosid','$docname','$gender','$docid','$mobile','$email','$speciality');");

if(mysqli_affected_rows($connect) > 0){
	echo "<p>Doctor added</p>";
}
else{
	echo "Doctor not added";
	echo mysqli_error ($connect);
}
?>
