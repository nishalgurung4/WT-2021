<?php 

require_once "../../utils/db.php";
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$password = password_hash($_POST['password'] ?? '', PASSWORD_DEFAULT);
$dob = $_POST['dob'] ?? '';
$favorite_color = $_POST['color'] ?? '';
$weight = $_POST['weight'] ?? '';
$gender = $_POST['gender'] ?? '';
$hobbies = implode(",", $_POST['hobbies'] ?? []);
$nationality = $_POST['nationality'] ?? 'NP';
//password needs to be encrypted
$sql = "Update students SET name='$name', email='$email', password='$passowrd', dob='$dob', favorite_color='$favorite_color', weight='$weight', gender='$gender', hobbies='$hobbies', nationality='$nationality' where id=".$_POST['id'];

if ($conn->query($sql) == TRUE) {
	header("location: ../index.php?success=updated successfully");
} else {
	header("location: ../index.php?error=error occured");
}

