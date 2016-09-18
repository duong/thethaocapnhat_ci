<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <style>
body{
	background-image:url(<?php echo base_url(); ?>public/img/bg.png);
}
*{margin:0;padding:0;}
#wrapper{
width:300px;
margin:auto;
}
#login{
	width:265px;
	height:140px;
	border:thin solid #CCC;
	border-radius:8px;
	padding:10px 0 0 35px;
	margin-top:100px;
	background-color: rgba(250,250,250,0.5);
}
#login span {
	color:#999;
}
#login input{
height:30px;
margin:10px 0 0 10px;
}
</style>
    </head>
    <body>
	<div id="wrapper">
        <div id="login">
			<form method="post" action="">
				<table>
					<tr>
						<td><span>Username:</span><input type="text" name="username"></td>
					</tr>
					<tr>
						<td><span>Password: </span><input type="password" name="password"></td>
					</tr>
					<tr>
						<td colspan="2"><input type="submit" value="Login" style="width:80px; margin-left:72px;"></td>
					</tr>
				</table
			></form>
		</div>
        <center><font color="red"></font></center>
	</div>	
    </body>
</html>
