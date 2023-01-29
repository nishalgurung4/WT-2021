<?php 

require_once "../../utils/db.php";

$sql = "DELETE FROM students where id=".$_POST['id'];

if ($conn->query($sql) == TRUE) {
	header("location: ../index.php?success=deleted successfully");
} else {
	header("location: ../index.php?error=error occured");
}


