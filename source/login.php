<?php 
	session_start();
	if(isset($_POST['role'])){
		$_SESSION['role'] = $_POST['role'];
	}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="login.css">
</head>
<body id="body-login">

    <section class="login-section">
        <h1 class="section-title">Chào mừng bạn đến với Job Hunter!</h1>
        <div class="forms">
			<div class="form-wrapper is-active">
				<button type="button" class="switcher switcher-login">
				Login
				<span class="underline"></span>
				</button>
				<form class="form form-login" method='post' target='_blank'>
				<fieldset>
					<legend>Please, enter your email and password for login.</legend>
					<div class="input-block">
					<label for="login-email">E-mail</label>
					<input id="login-email" type="email" name="login-email" required>
					</div>
					<div class="input-block">
					<label for="login-password">Password</label>
					<input id="login-password" type="password" name="login-password" required>
					</div>
				</fieldset>
					<a id="forget-password" href="#">Forget your password?</a>
					
				<button type="submit" class="btn-login">Login</button>
				
				<?php 
				require_once('connection.php');
				if(isset($_POST["login-email"])){
					$stmt = $dbCon->prepare('SELECT * FROM account WHERE ACC_NAME=? and ACC_PASS = ?');
					$stmt->execute(array($_POST['login-email'],$_POST['login-password']));
					$row = $stmt->fetch(PDO::FETCH_ASSOC);
					if($row){
						$_SESSION['login'] = $row['ACC_ID'];
						if($row['ACC_ROLE']==1){
							// echo 'amada';
							
							header('location: company.php');
						} else {
							header('location: client.php');
						}
					} else {
						echo "<script>";
						echo 'alert("Tai khoan khong ton tai hoac sai mat khau")';
						echo "</script>";
					}
				}
				?>
				</form>
			</div>

			<div class="form-wrapper">
				<button type="button" class="switcher switcher-signup">
					Sign Up
					<span class="underline"></spa>
				</button>
				<form class="form form-signup" method='post'>
					<fieldset>
						<legend>Please, enter your email, password and password confirmation for sign up.</legend>
						<div class="input-block">
						<label for="signup-email">E-mail</label>
						<input id="signup-email" type="email" name="signup-email" required>
						</div>
						<div class="input-block">
						<label for="signup-password">Password</label>
						<input id="signup-password" type="password" name="signup-password" required>
						</div>
						<div class="input-block">
						<label for="signup-password-confirm">Confirm password</label>
						<input id="signup-password-confirm" type="password" name="signup-password-confirm" required>
						</div>
					</fieldset>
					<button type="submit" class="btn-signup">Sign Up</button>
					<?php 
						require_once('connection.php');
						if(isset($_POST['signup-email'])){
							$stmt = $dbCon->prepare('SELECT * FROM account WHERE ACC_NAME=?');
							$stmt->execute(array($_POST['signup-email']));
							$row = $stmt->fetch(PDO::FETCH_ASSOC);
							if( $row)
							{
								echo "<script>";
								echo 'alert("Email da duoc dang ky")';
								echo "</script>";

							}
							else {
								if(trim($_POST["signup-password"]) != trim($_POST["signup-password-confirm"])){
									echo "<script>";
									echo 'alert("Mat khau khong trung khop")';
									echo "</script>";
								}else {
									$stmt = $dbCon->prepare('INSERT INTO account(ACC_NAME,ACC_PASS,ACC_ROLE) values(?,?,?)');
									$stmt-> execute(array($_POST['signup-email'],$_POST["signup-password"],$_SESSION['role']));
									$stmt2 = $dbCon->prepare('SELECT * FROM account WHERE ACC_NAME=? and ACC_PASS = ?');
									$stmt2->execute(array($_POST['signup-email'],$_POST["signup-password"]));
									$row2 = $stmt2->fetch(PDO::FETCH_ASSOC);

									if($_SESSION['role']==1){
										
										$stmt3 = $dbCon->prepare('INSERT INTO company(COM_EMAIL,ACC_ID) values(?,?)');
										$stmt3-> execute(array($row2['ACC_NAME'],$row2['ACC_ID']));
										header('location: login.php');
									} else {
										$stmt3 = $dbCon->prepare('INSERT INTO client(USER_EMAIL,ACC_ID) values(?,?)');
										$stmt3-> execute(array($row2['ACC_NAME'],$row2['ACC_ID']));
										header('location: login.php');
									}
								}
							}
						}
					?>
				</form>
			</div>
        </div>
      </section>    
	
</body>

<script src="login.js">
</script>
</html>