<!DOCTYPE html>
<html>
<head>
	<title>Signing In</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>

	<div class="container-login100">
		<form class="login100-form m-l-10 m-r-10" method="post" action="cek_login.php">
		    <table width="device-width" align="center">
        <tr>
            <td align="center">
                <img align="center" src="logo.png" width="50%">
            </td>
        </tr>
    </table>
			<div class="wrap-input100 m-b-16">
				<input class="input100" type="text" name="username" placeholder="Username">
				<span class="focus-input100"></span>
			</div>

			<div class="wrap-input100">
				<input class="input100" type="password" name="password" placeholder="Password">
				<span class="focus-input100"></span>
			</div>

			<div class="text-right p-t-13 p-b-23">
				<span class="txt1">
				Forgot
				</span>
				<a href="forget.php">
				Username or Password?
				</a>
			</div>

			<table width="100%">
				<tr>
					<td>
						<input type="submit" value="Sign in" name="signin" class="login100-form-btn">
					</td>
					<td width="10%"></td>
					<td>
						<div class="login100-form-btn">
							<a href="signingup.php" style="color: #ffffff"><b>Sign up</b></a>
						</div>
					</td>
				</tr>
			</table>
		</form>
	</div>
</body>

</html>