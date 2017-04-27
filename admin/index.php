<?php
session_start();
if(isset($_SESSION["uname"]))
{
	header("location:query.php");
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link href="/css/bootstrap.min.css" rel="stylesheet">
<link href="/css/agency.css" rel="stylesheet">
<link href="/css/search.css" rel="stylesheet">
</head>
<body>
<center>
<h1 class="section-heading text-muted">Admin Panel</strong></h1>
<div class="form-group">
<form action="check.php" method="post" enctype="multipart/form-data">
<input type="text" class="page-scroll search" name="uname" placeholder="Username" autofocus required><br><br>
<input type="password" class="page-scroll search" name="pass" placeholder="Password" autofocus required><br><br>
<input type="submit" class="page-scroll btn btn-xl" value="Login">
</form>
<div>
</center>
<script src="js/bootstrap.min.js"></script>
</body>
</html>