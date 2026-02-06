<!DOCTYPE html>
<html>
<head>
<title>Resume Builder</title>
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<h2>Create Your Resume</h2>

<form action="preview.php" method="post">
<input type="text" name="name" placeholder="Full Name" required>
<input type="text" name="mobile" placeholder="Mobile">
<input type="email" name="email" placeholder="Email">
<textarea name="education" placeholder="Education"></textarea>
<textarea name="skills" placeholder="Skills"></textarea>
<textarea name="experience" placeholder="Experience"></textarea>

<button type="submit">Preview Resume</button>
</form>

</body>
</html>