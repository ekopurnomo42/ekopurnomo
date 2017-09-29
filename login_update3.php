<?php include "db.php"; ?>
<?php include "functions.php"; ?>

<?php

if(isset($_POST['submit'])){
	$id			=$_POST['id'];
	$username	=$_POST['username'];
	$password	=$_POST['password'];
	
	$query = "UPDATE users
			  SET username = '$username',
				  password = '$password'
			  WHERE id = $id";
	$result = mysqli_query($koneksi, $query);
	
	if(!$result){
		die("Query failed.");
	}
}

?>

<!DOCTYPE html>