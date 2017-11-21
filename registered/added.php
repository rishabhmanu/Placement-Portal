<?php
include 'database.php';

  $usn=$_POST['usn'];
  $id=$_POST['key'];
  // echo $usn;
  // echo $id;
  $result = mysqli_query($connect, "UPDATE student SET comp='$id' where USN='$usn';");
     if(mysqli_affected_rows($connect) > 0){
  echo "<p>Student Recruited</p>";
  // echo "<a href=\"\Placement_Portal\Login\index.html\">Go Back</a>";
} else {
  echo "Student NOT Added<br />";
  echo mysqli_error ($connect);
}
 ?>