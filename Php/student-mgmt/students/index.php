<?php 
require_once "../utils/db.php";

$sql = "SELECT * FROM students";

$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Students</title>
	<style type="text/css">
		.alert {
			padding: 5px;
			width: 200px;
			height: 50px;
			margin: 0 auto;
			position: relative;
		}

		.alert-danger {
			border:  2px solid red;

		}

		.alert-success {
			border: 2px solid green;
		}
		.close {
			position: absolute;
			top: 2px;
			right: 2px;
		}

	</style>
</head>
<body>
	<?php if(isset($_GET['success'])) { ?>
	<div class="alert alert-success">
		<div class="close">X</div>
		<?= $_GET['success'] ?>
	</div>
	<?php } elseif (isset($_GET['error'])) { ?>
		<div class="alert alert-danger">
		<div class="close">X</div>
			<?= $_GET['error'] ?>
	</div>
	<?php } ?>
<h2>List of students</h2>
<table border="1">
	<thead>
		<tr>
			<th>ID</th>
			<th>Profile</th>
			<th>Name</th>
			<th>Email</th>
			<th>Date of Birth</th>
			<th>Favorite Color</th>
			<th>Weight (KG)</th>
			<th>Gender</th>
			<th>Hobbies</th>
			<th>Nationality</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
	<?php
	if ($result->num_rows > 0) {
		while($student = $result->fetch_assoc())
		{
	?>
			<tr>
				<td><?= $student['id'] ?></td>
				<td><img src="" alt="profile"></td>
				<td><?= $student['name'] ?></td>
				<td><?= $student['email'] ?></td>
				<td><?= $student['dob'] ?></td>
				<td><?= $student['favorite_color'] ?></td>
				<td><?= $student['weight'] ?></td>
				<td><?= $student['gender'] ?></td>
				<td><?= $student['hobbies'] ?></td>
				<td><?= $student['nationality'] ?></td>
				<td>
					<a href="<?= './edit/?id='.$student['id'] ?>">Edit</a>
					<a href="#" data-id="<?= $student['id'] ?>" class='delete'>Delete</a>
					
				</td>
			</tr>
		<?php }
	} else { ?>
		<tr>
			<td colspan="11"> No record found!</td>
		</tr>

	<?php } ?>
	</tbody>
</table>

<script type="text/javascript">
	const deleteEl = document.querySelectorAll(".delete");
	for(el of deleteEl) {
		el.addEventListener("click", deleteStudent);
	}
	function deleteStudent(event)
	{
		const id = event.target.getAttribute('data-id');
		let formEl = document.createElement("form");
		formEl.setAttribute("method", "POST");
		formEl.setAttribute("action", "./action/delete.php");
		let idEl = document.createElement("input");
		idEl.setAttribute("type", "hidden");
		idEl.setAttribute("name", "id");
		idEl.setAttribute("value", id);
		formEl.appendChild(idEl);
		document.body.appendChild(formEl);
		formEl.submit();
	}
</script>
</body>
</html>