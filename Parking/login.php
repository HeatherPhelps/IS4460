<!DOCTYPE html>
<html>
<head>
	<title>Parking Space Manager - Login</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
		}
		header {
			background-color: #333;
			color: #fff;
			padding: 10px;
			text-align: center;
		}
		h1 {
			margin: 0;
		}
		form {
			border: 1px solid #ccc;
			padding: 20px;
			margin: 50px auto;
			max-width: 400px;
		}
		label {
			display: block;
			margin-bottom: 10px;
		}
		input[type="text"], input[type="password"], input[type="submit"] {
			padding: 10px;
			margin-bottom: 20px;
			width: 100%;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}
		input[type="submit"] {
			background-color: #333;
			color: #fff;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}
	</style>
</head>
<body>
	<header>
		<h1>Parking Space Manager</h1>
	</header>
	<nav>
		<ul>
			<li><a href="index.html">Home</a></li>
			<li><a href="parkingspaces.html">Parking Spaces</a></li>
			<li><a href="login.html">Login</a></li>
		</ul>
	</nav>
	<main>
		<h2>Login</h2>
		<form onsubmit="event.preventDefault(); login();">
			<label for="username">Username</label>
			<input type="text" id="username" name="username" required>
			<label for="password">Password</label>
			<input type="password" id="password" name="password" required>
			<input type="submit" value="Login">
		</form>
	</main>
	<script>
		function login() {
			// Get FROMMM input values
			var username = document.getElementById("username").value;
			var password = document.getElementById("password").value;
			
			// Check if input values match the login credentials
			if (username === "admin" && password === "password") {
				// Redirect to the homepage
				window.location.href = "index.html";
			} else {
				// Show an error message
				alert("Incorrect username or password. Please try again.");
			}
		}
	</script>
</body>
</html>