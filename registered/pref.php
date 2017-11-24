<?php include 'database.php';

$key=$_POST['key'];
$ans=$_POST['pref'];
// echo $key;
if($ans=='Yes')
{
$result = mysqli_query($connect, "UPDATE company SET co_s = co_s+1 where id='$key';");
echo "Your preference updated at company id: " .$key;
}
else
{
	echo "Thanks for your response!";
}

?>