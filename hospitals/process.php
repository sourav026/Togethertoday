<?php include 'database.php';

$name=$_POST['name'];
$contact=$_POST['contact'];
$city=$_POST['city'];



mysqli_query($connect, "insert into hospital (hospital_name,contact,city) values('$name','$contact','$city');");

if(mysqli_affected_rows($connect) > 0){
	echo "<p>hospital added</p>";
}
else{
	echo "hospital not added";
	echo mysqli_error ($connect);
}
?>
