<!DOCTYPE html>
<html>
<head>
	<title>Sign Up to SanberBook</title>
</head>
<body>
	<h1>Buat Account Baru!</h1>
	<h3>Sign Up Form</h3>
    <form action="/welcome" method="POST">
        @csrf
		<label for="fname">First name:</label><br><br>
		<input type="text" id="fname" name="fname"><br><br>
		<label for="lname">Last name:</label><br><br>
		<input type="text" id="lname" name="lname"><br><br>
		
		<label for="gender">Gender:</label><br><br>
		<input type="radio" id="male" name="gender" value="male">
		<label for="male">Male</label><br>
		<input type="radio" id="female" name="gender" value="female">
		<label for="female">Female</label><br>
		<input type="radio" id="other" name="gender" value="other">
		<label for="other">Other</label><br><br>

		<label for="nationality">Nationality:</label><br><br>
		<select id="nationality" name="nationality">
			<option value="indonesian">Indonesian</option>
			<option value="singaporean">Singaporean</option>
			<option value="malaysian">Malaysian</option>
			<option value="australian">Australian</option>
		</select><br><br>

		<label for="language">Language Spoken:<label><br><br>
		<input type="checkbox" id="lang1" name="lang1" value="Bahasa Indonesia">
		<label for="lang1">Bahasa Indonesia</label><br>
		<input type="checkbox" id="lang2" name="lang2" value="English">
		<label for="lang2">English</label><br>
		<input type="checkbox" id="lang3" name="lang3" value="Other">
		<label for="lang3">Other</label><br><br>

		<label for="bio">Bio:</label><br><br>
		<textarea name="bio" rows="10" cols="30"></textarea><br>
	</form>
	<input type="submit" value="Sign Up"><br><br>
</body>
</html>