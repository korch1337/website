<?php require_once 'engine/init.php'; include 'layout/overall/header.php'; ?>

<h1>Login Page</h1>
<form action="login.php" method="post">
				&nbsp;<i style="font-size:11px">Account number:</i> <br>
			<input type="text" name="username"> <br>
				&nbsp;<i style="font-size:11px">Password:</i> <br>
			<input type="password" name="password">
			<br><br><input type="submit" value="Log in">
			<?php
				/* Form file */
				Token::create();
			?>
		</form>

<?php include 'layout/overall/footer.php'; ?>
