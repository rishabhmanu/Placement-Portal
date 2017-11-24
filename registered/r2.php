<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Placement Portal | Student</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/coin-slider.css" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/droid_sans_400-droid_sans_700.font.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/coin-slider.min.js"></script>
</head>
<body>
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="logo">
        <h1><a href="#">Placement<span>Portal</span> <small>NIE Mysuru</small></a></h1>
      </div>
      <div class="clr"></div>
      <div class="menu_nav">
        <ul>
           <!-- <li><a href="\Placement_portal\portal\index.php"><span>Log Out</span></a></li> -->
          <li class="active"><a href="#"><span>Company/Recruiter</span></a></li>
          <!-- <li><a href="company.php"><span>Companies/Recruiters</span></a></li> -->
          <!-- <li><a href="about.html"><span>About Us</span></a></li> -->
          <!-- <li><a href="contact.html"><span>Contact Us</span></a></li> -->
        </ul>
      </div>
      <div class="clr"></div>
      <div class="slider">
        <div id="coin-slider"> <a href="#"><img src="images/slide1.jpg" width="960" height="335" alt="" /> </a> <a href="#"><img src="images/slide2.jpg" width="960" height="335" alt="" /> </a> <a href="#"><img src="images/slide3.jpg" width="960" height="335" alt="" /> </a> </div>
        <div class="clr"></div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">

<?php 
	include 'database.php';
	$id=$_POST['id'];
	$usn=$_POST['usn'];
	// echo $id;
	// echo $usn;
	$result=mysqli_query($connect, "SELECT * FROM student WHERE USN='$usn';");
	 if (mysqli_num_rows($result) > 0) 
	{
    $result1=mysqli_query($connect, "SELECT * FROM student WHERE USN='$usn' and comp IS NULL;");
      if (mysqli_num_rows($result1) > 0) {
		    $result2=mysqli_query($connect, "UPDATE student SET comp='$id' WHERE USN='$usn';");
		    echo "Success, Student recruited!";
      }
      else{
        echo "Student already has an Offer.";
      }
	}
	else
	{
		echo "USN not found, Try again!";
		echo mysqli_error ($connect);
	}
?>

 </div>
      </div>
      <div class="sidebar">
        <div class="gadget">
          <h2 class="star"><span>Menu</span></h2>
          <div class="clr"></div>
          <ul class="sb_menu">
            <li><a href="\Placement_portal\portal\index.php"><strong>Log Out</strong></a></li>
           </ul>
        </div>
        <div class="gadget">
          <h2 class="star"><span>Contributors</span></h2>
          <div class="clr"></div>
          <ul class="ex_menu">
            <li><a href="#">Rishabh Dev Manu</a><br />
              4NI15CS077</li>
            <li><a href="#">Rohit Kumar</a><br />
              4NI15CS079</li>
            <li><a href="#">Sanchit Snehashish</a><br />
              4NI15CS086</li>
            <li><a href="#">Saurabh Kumar Singh</a><br />
              4NI15CS089</li>
          </ul>
        </div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  </div>
 
  <div class="footer">
    <div class="footer_resize">
      <p class="lf">Copyright &copy; <a href="#">Placement Portal</a>. All Rights Reserved</p>
      <p class="rf">Design by <a target="_blank" href="http://www.dreamtemplate.com/">DreamTemplate</a></p>
      <div style="clear:both;"></div>
    </div>
  </div>
</div>
</BODY>
</HTML>
