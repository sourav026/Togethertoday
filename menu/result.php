<!DOCTYPE HTML>
<html>

<head>
  <title>result</title>
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
          <li ><a href="index.php">Due date</a></li>
          <li ><a href="schedule.php">Schedule</a></li>
          <li class="selected"><a href="history.php">History</a></li>
          <li><a href="update.php">Update</a></li>
          <li><a href="info.php">Info</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
      
      <div id="content">


  <?php

  $pid=$_POST['pid'];
  $name=$_POST['name'];

$servername = "localhost";
$username = "root";
$password = "sk123";
$dbname = "project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM history where pid='$pid'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>PID</th><th>date</th><th>type</th><th>hospital id</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["pid"]."</td><td>".$row["date"]."</td><td>".$row["type"]. "</td><td>" .$row["hospital_id"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
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
