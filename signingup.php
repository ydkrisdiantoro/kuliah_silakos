<!DOCTYPE html>
<html>
<head>
	<title>DAFTAR</title>
	<title>Signing In</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<div class="container-login100">
		<form class="login100-form m-l-10 m-r-10" method="post" action="cek_signup.php">
			
			<div class="m-b-16">
				<h1 align="center">Sign Up</h1>
			</div>
			<div class="wrap-input100 m-b-16">
				<input class="input100" type="text" name="fullname" placeholder="Fullname">
				<span class="focus-input100"></span>
			</div>
			<div class="wrap-input100 m-b-16">
				<input class="input100" type="text" name="address" placeholder="Address">
				<span class="focus-input100"></span>
			</div>
			<div class="wrap-input100 m-b-16">
				<input class="input100" type="email" name="email" placeholder="Email">
				<span class="focus-input100"></span>
			</div>
			<div class="wrap-input100 m-b-16">
				<input class="input100" type="number" name="phone_number" placeholder="Phone Number">
				<span class="focus-input100"></span>
			</div>
			<div class="wrap-input100 m-b-16">
				<input class="input100" type="number" name="guarantor_phone_number" placeholder="Guarantor Phone Number">
				<span class="focus-input100"></span>
			</div>
			<div class="wrap-input100 m-b-16">
				<input class="input100" type="text" name="username" placeholder="Username">
				<span class="focus-input100"></span>
			</div>
			<div class="wrap-input100 m-b-16">
				<input class="input100" type="password" name="password" placeholder="Password">
				<span class="focus-input100"></span>
			</div>
			<div class="wrap-input100 m-b-16">
				<select name="id_wisma" class="wrap-input100" style="padding: 16px">
					<option>Wisma Delima 1</option>
					<option>Wisma Delima 2</option>
					<option>Wisma Kita 1</option>
					<option>Wisma Kita 2</option>
					<option>Wisma Daun 1</option>
					<option>Wisma Daun 2</option>
					<option>Wisma Cute</option>
				</select>
			</div>
			<div class="wrap-input100 m-b-16">
				<select name="id_kamar" class="wrap-input100" style="padding: 16px">
					<option>Kamar 1</option>
					<option>Kamar 2</option>
					<option>Kamar 3</option>
					<option>Kamar 4</option>
					<option>Kamar 5</option>
					<option>Kamar 6</option>
					<option>Kamar 7</option>
				</select>
			</div>
			<table style="margin: 16px" width="100%">
				<tr>
					<td style="font-family: Ubuntu-Bold">Tanggal Masuk</td>
					<td>
						<input placeholder="Tanggal Masuk" style="padding-left: 16px; padding-right:16px" class="wrap-input100" type="date" name="tanggal_masuk">
					</td>
				</tr>
				<tr>
					<td style="font-family: Ubuntu-Bold">Tanggal Keluar</td>
					<td style="color: #000">
						<input placeholder="Tanggal Keluar" style="padding-left: 16px; padding-right:16px" class="wrap-input100" type="date" name="tanggal_keluar">
					</td>
				</tr>
			</table>
			
			<table width="100%" class="m-t-16">
				<tr>
					<td>
						<input name="signup" type="submit" value="Sign up" class="login100-form-btn">
					</td>
					<td width="10%"></td>
					<td>
						<div class="login100-form-btn">
							<a href="index.php" style="color: #ffffff"><b>Back to login page</b></a>
						</div>
					</td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>