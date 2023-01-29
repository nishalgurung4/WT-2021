<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form</title>
	<style type="text/css">
		.form-group {
			margin-top: 3px;
		}
	</style>
</head>
<body>
<form method="POST" action="../action/save.php" enctype="multipart/form-data">
	<div class="form-group">
		<label for="name">Name</label>
		<input type="text" id="name" placeholder="Nishal Gurung" name="name">
	</div>
	<div class="form-group">
		<label for="email">Email</label>
		<input type="email" id="email" placeholder="nishal.gurung4@gmail.com" name="email">
	</div>
	<div class="form-group">
		<label for="password">Password</label>
		<input type="password" id="password" placeholder="********" name="password">
	</div>
	<div class="form-group">
		<label for="dob">D.O.B.</label>
		<input type="date" id="dob" name="dob">
	</div>
	<div class="form-group">
		<label for="favorite-color">Favorite Color</label>
		<input type="color" id="favorite-color" name="color">
	</div>
	<div class="form-group">
		<label for="weight">Weight (kg)</label>
		<input type="number" id="weight" name="weight">
	</div>
	<div class="form-group">
		<label>Gender</label>
		<div>
			<label for="male">Male</label>
			<input type="radio" id="male" name="gender" value="male">
			<label for="female">Female</label>
			<input type="radio" id="female" name="gender" value="female">
			<label for="other">Other</label>
			<input type="radio" id="other" name="gender" value="other">
		</div>
	</div>

	<div class="form-group">
		<label>Hobbies</label>
		<input type="checkbox" id="traveling" name="hobbies[]" value="traveling" />
		<label for="traveling">Traveling</label>
		<input type="checkbox" id="dancing" value="dancing" name="hobbies[]" /><label for="dancing">Dancing</label>
		<input type="checkbox" id="singing" value="singing" name="hobbies[]" />
		<label for="singing">Singing</label>
	</div>

	<div class="form-group">
		<label for="nationality">Nationality</label>
		<select id="nationality" name="nationality">
			<option value="NP">Nepal</option>
			<option value="IN">India</option>
			<option value="CH">China</option>
			<option value="UK">United Kingdom</option>
		</select>
	</div>

	<div class="form-group">
		<label for="profile">Profile</label>
		<input type="file" id="profile" accept="image/png,image/jpeg" name="profile" />
	</div>
	<div class="form-group">
		<input type="submit" value="Create" />
		<input type="reset" value="Cancel" />
	</div>
</form>
</body>
</html>