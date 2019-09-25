<?php
 
echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';


$user_id = isset($_POST['user_id']) ? $_POST['user_id'] : '';

$pwd = isset($_POST['pwd']) ? $_POST['pwd'] : '';

if($user_id !='' && $pwd !='' ) 
	{
		if($_POST['user_id'] == 'hyunil92' && $_POST['pwd'] == '1111') 
		{
			$token = '10010';
			header('Location: http://128.11.30.147:18004/glink_it_main.php?uid='.$token);
		}
		else
		{
			echo "<script>alert('아이디 또는 비밀번호가 일치하지 않습니다.');</script>";
		}
}

?><!DOCTYPE html>
<html>
<head>
<title>G-LINK</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="/glink_login/style.css" rel="stylesheet" media="screen">
 
 

</head>
<body>
<div class="container" style="width:250px;">
  <form name="login" class="form-signin" method="post" role="form">

	<h2 class="form-signin-heading"> G-link Sign in </h2>

	<input type="text" name="user_id" class="form-control" placeholder="User" required autofocus>
	<input type="password" name="pwd" class="form-control" placeholder="Password" required>
	<div style='margin-top:10px;'><button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button></div>
  </form>
</div>

 
<iframe width="100%" height="" frameborder="0" name="exe_frame" id="exe_frame"></iframe>
<form name='deleteFrm'id='deleteFrm' method='post'>
<input type='hidden' name='action'>
<input type='hidden' name='seqs'>
</form>
</body>
</html>
