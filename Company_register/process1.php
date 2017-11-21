<?php include 'database.php';


$comp_name=$_POST['comp_name'];
$ctc=$_POST['ctc'];
$comp_email=$_POST['comp_email'];
$profile=$_POST['profile'];
$comp_bio=$_POST['comp_bio'];

//Execute the query
 mysqli_query($connect, "INSERT INTO company(name, CTC, email, profile, bio) VALUES('$comp_name','$ctc','$comp_email','$profile','$comp_bio');");

	if(mysqli_affected_rows($connect) > 0){
	echo "<p>Organisation Added</p>";
	echo "<a href=\"\Placement_Portal\Login\index.html\">Login</a>";
} else {
	echo "Organisation NOT Added<br />";
	echo mysqli_error ($connect);
}

?>