<?php 
include 'lib/koneksi.php'; 
include 'lib/fungsi.php';

$base = new fungsi;
$url = $base->base_url();
$s=$_GET['s']; 
session_start();
if(!$_SESSION['admin']){
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="robots" content="noindex, nofollow" />
<title>Login Odontogram</title>
<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>css/login.css" />
<script type="text/javascript" src="<?php echo $url; ?>lib/jquery.js"></script>
<script>
$(document).ready(function() {

$('#error').show();
$(window).load(function(){
$('#error').fadeOut(3000);
});
});
</script>
</head>
<body>
<div id="wrapper">
	<div id="wrap-login"> <!-- form buat login -->
		<form method="POST" action="<?php echo $url; ?>do_login.php" class="form-login" >
			<span>Username</span>
			<input type="text" name="username" class="required" />
			<span>Password</span>
			<input type="password" name="password" class="required" />
			<input type="submit" name="submit" value="Login" />
		</form>
	</div>
</div>
</body>
</html>
<?php
} else {
header('location:index.php?page=main');
} ?>