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
          <li class="selected"><a href="update.php">Update</a></li>
          <li><a href="info.php">Info</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
      
      <div id="content">
        
        <div  class="form">
        <form id="contactform" action="process.php" method="post"> 
          
          <p class="contact"><label for="name">Name</label></p> 
          <input id="name" name="name" placeholder="First and last name" required="" tabindex="1" type="text"> 
                
          <p class="contact"><label for="cid">Enter your category</label></p> 
          <input type="text" id="cid" name="cid" placeholder="1 for women and 2 for minor" required=""> 

          <p class="contact"><label for="id">Enter your id</label></p> 
          <input type="text" id="id" name="id" required=""> 

          <p class="contact"><label for="age">Enter your age</label></p> 
          <input type="text" id="age" name="age" required=""> 
           
          <p class="contact"><label for="password">Create a password</label></p> 
          <input type="password" id="password" name="password" required="">

          <p class="contact"><label for="weight">Entre your weight</label></p> 
          <input type="text" id="weight" name="weight" required=""> 
          
          <p class="contact"><label for="height">Enter your height</label></p> 
          <input type="text" id="height" name="height" required="">
          
          <p class="contact"><label for="date">Enter date</label></p> 
          <input type="text" id="date" name="date" placeholder="yyyy/mm/dd" required="">
          

          <p class="contact"><label for="city">Enter your city</label></p> 
          <input type="text" id="city" name="city" required="">  
  
          <p class="contact"><label for="phone">Mobile phone</label></p> 
          <input id="phone" name="phone" placeholder="phone number" required="" type="text"> <br>
          
          <input class="buttom" name="submit" id="submit" tabindex="5" value="submit" type="submit">   
   </form> 
</div>     


        
      </div>
    </div>
    <div id="footer">
      <p><a href="index.html">Home</a> | <a href="examples.html">Examples</a> | <a href="page.html">A Page</a> | <a href="another_page.html">Another Page</a> | <a href="contact.html">Contact Us</a></p>
      <p>Copyright &copy; simplestyle_5 | <a href="http://validator.w3.org/check?uri=referer">HTML5</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> | <a href="http://www.html5webtemplates.co.uk">Simple web templates by HTML5</a></p>
    </div>
  </div>
</body>
</html>
