<?php include 'database.php';

$id=$_POST['u'];

$result = mysqli_query($connect, "select * from student where USN = '$id';");


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
table, th, td {
    border: 0.05px solid black;
    border-collapse: collapse;
}
</style>
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
          <li class="active"><a href="student.php"><span>Student Corner</span></a></li>
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
          if (mysqli_num_rows($result) > 0) {
   while($row = mysqli_fetch_assoc($result)) {
    echo "id: " .$sid=$row["USN"]. "name :" .$name=$row["Name"];
   }  ?>
          <h2><span>Hello </span><?php echo "$name"; ?></h2>
          <div class="clr"></div>
          <p>Register yourself on the placement portal for hassle-free placement experience this placement season.</p>
          <p><strong>Companies Visiting(According to Eligiblity)</strong></p>
          <p> Set your preference, if you are sitting for the placement process (once done can't be changed) </p>
            <?php 
              $result1 = mysqli_query($connect, "select * from company, academics where academics.usn = '$id' and company.cutoff <= academics.cgpa;");
               if (mysqli_num_rows($result1) > 0) {
                echo "<table><tr><td><b>ID</b></td><td><b>Name</b></td><td><b>CTC(in lakhs)</b></td><td><b>Profile</b></td><td><b>Cutoff</b></td><td><b>Interested</b></td></tr>";
                   while($row1 = mysqli_fetch_assoc($result1)) {
                        echo "<tr><td>" .$row1["id"]. "</td><td>" .$row1["name"]. "</td><td>" .$ctc=$row1["CTC"]. "</td><td>" .$row1["profile"]. "</td><td>" .$row1["cutoff"]. "</td><td>  <form method=\"post\" action=\"pref.php\">
 
 
 
 <select id=\"pref\" name=\"pref\"> <option>--Preference--</option><option value=\"No\"> No </option>
 <option value=\"Yes\"> Yes </option>"; ?>  
  
  </select> <input type="hidden" name="key" value=" <?php echo $row1["id"]; ?> "> </input> 
  <button type=\"submit\" name=\"submit\">Submit</button>
  </form>
   <?php
                      }
                        echo "</table>";
                      }
                      else {
                        echo "Sorry You are not satisfying the eligiblity criteria for any organisation right now.";
                      }

            ?>
            <!-- <ul> -->
              <!-- <li>Get noticed by the recruiters</li> -->
              <!-- <li>Get each and every statistics</li> -->
              <!-- <li>Get to know your recruiter</li> -->
              <!-- <li>Rate your skills</li> -->
              <!-- <li>Comparative analysis</li> -->
            <!-- </ul> -->
            </p>
            <p> <h2> Statistics </h2> </p>
          <ul class="sb_menu">
            <li><a href="\Placement_Portal\statistics\bar.php"><strong>Companies Visiting</strong></a></li>
            <li><a href="\Placement_Portal\statistics\ctc.php"><strong>CTC wise distribution</strong></a></li>
            <li><a href="\Placement_Portal\statistics\dept.php"><strong>Distribution of Placed students(Branch-wise)</strong></a></li>
            <li><a href="\Placement_Portal\statistics\placed.php"><strong>Distribution of Placed students(Company-wise)</strong></a></li>
            <li><a href="\Placement_Portal\statistics\pun.php"><strong>Current Placement Stats</strong></a></li>
           
            
          </ul>
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
  <?php
}
else{
  echo " <h2>User Not Found!</h2>";
  echo "<ul class=\"sb_menu\">
            <li><a href=\"\Placement_Portal\Student_Login\index.php\"><strong>Login with a valid usn</strong></a></li> ";

   }

    ?>
  <div class="footer">
    <div class="footer_resize">
      <p class="lf">Copyright &copy; <a href="#">Placement Portal</a>. All Rights Reserved</p>
      <p class="rf">Design by <a target="_blank" href="http://www.dreamtemplate.com/">DreamTemplate</a></p>
      <div style="clear:both;"></div>
    </div>
  </div>
</div>
</body>
</html>
