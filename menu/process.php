<!DOCTYPE HTML>
<html>

<head>
  <title></title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.php"><span class="logo_colour"></span></a></h1>
          <h2></h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="index.php">Due date</a></li>
          <li><a href="schedule.php">Schedule</a></li>
          <li><a href="history.php">History</a></li>
          <li  class="selected"><a href="update.php">Update</a></li>
          <li><a href="info.php">Info</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
      
      <div id="content">
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
  echo "<p>Patient updated</p>";
}
else{
  echo "patient not updated";
  echo mysqli_error ($connect);
}
?>
        


        
      </div>
    </div>
    <div id="footer">
      <p><a href="index.html">Home</a> | <a href="examples.html">Examples</a> | <a href="page.html">A Page</a> | <a href="another_page.html">Another Page</a> | <a href="contact.html">Contact Us</a></p>
      <p>Copyright &copy; simplestyle_5 | <a href="http://validator.w3.org/check?uri=referer">HTML5</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> | <a href="http://www.html5webtemplates.co.uk">Simple web templates by HTML5</a></p>
    </div>
  </div>
</body>
</html>
