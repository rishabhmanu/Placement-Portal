<?php include 'database.php';

$id=$_POST['u'];
$result = mysqli_query($connect, "select * from company where id = '$id';");


?>
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
  <?php
      if (mysqli_num_rows($result) > 0) {
   while($row = mysqli_fetch_assoc($result)) {
    echo "<center>id: " .$cid=$row["id"]. " name :" .$name=$row["name"]. "</center>";
    $co_s=$row["co_s"];
   }  ?>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          <h2><span>Hello </span><?php echo "$name"; ?></h2>
          <div class="clr"></div>
          <p>Now recruit students by directly entering their USNs.</p>
          <!--  -->
          <p> No. of students sitting for the placement process: <?php echo $co_s; ?>
            <!-- <ul> -->
              <!-- <li>Get noticed by the recruiters</li> -->
              <!-- <li>Get each and every statistics</li> -->
              <!-- <li>Get to know your recruiter</li> -->
              <!-- <li>Rate your skills</li> -->
              <!-- <li>Comparative analysis</li> -->
            <!-- </ul> -->
            <!-- </p> -->
          
            <form action="r1.php" method="post">
              <input type="hidden" name="id" value=<?php echo $id;?> /> 
            <button type="submit" name="submit"> Recruit Students </button>
            <!-- <li><a href="recruit.php?id=<?php //echo "$cid";?>"><strong>Recruit</strong></a></li> -->
            <p><strong><h2>Statistics</strong></h2></p>
            <ul class="sb_menu">
            <li><a href="\Placement_Portal\statistics\skills_graph.php"><strong>Skill based Distribution of Students(Programming Languages)</strong></a></li>
            <li><a href="\Placement_Portal\statistics\conc_graph.php"><strong>Skill based Distribution of students(Concepts)</strong></a></li>
            <li><a href="\Placement_Portal\statistics\branch_total.php"><strong>Department Distribution of students</strong></a></li>
            <li><a href="\Placement_Portal\statistics\pun.php"><strong>Current stats of Ongoing Placements</strong></a></li>
            <li><a href="\Placement_Portal\statistics\n2.php"><strong>Gender based Distribution of students</strong></a></li>
            
            
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
else {
  echo "<center><h2>Not Found!</h2>";
   echo "<ul class=\"sb_menu\">
            <li><a href=\"\Placement_Portal\Company_Login\index.php\"><strong>Login using a valid ID</strong></a></li></center> ";
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