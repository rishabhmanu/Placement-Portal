<?php include 'database.php';


$comp_name=$_POST['comp_name'];
$ctc=$_POST['ctc'];
$comp_email=$_POST['comp_email'];
$profile=$_POST['profile'];
$comp_bio=$_POST['comp_bio'];
$cutoff=$_POST['cutoff'];
$place=$_POST['place'];
//Execute the query
 mysqli_query($connect, "INSERT INTO company(name, CTC, email, profile, bio, cutoff, place) VALUES('$comp_name','$ctc','$comp_email','$profile','$comp_bio', '$cutoff', '$place');");

	if(mysqli_affected_rows($connect) > 0){
	echo "<p>Organisation Added</p>";
	$result=mysqli_query($connect, "SELECT id FROM company where name='$comp_name' and profile='$profile';");  
            while($row = mysqli_fetch_array($result))  
                {  
                 echo "Your ID is: " .$row["id"];  
                }  
	echo "<br><a href=\"\Placement_Portal\Company_Login\index.php\">Login</a>";
} else {
	echo "Organisation NOT Added<br />";
	echo mysqli_error ($connect);
}

?>