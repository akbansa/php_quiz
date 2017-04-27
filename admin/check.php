<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>User Queries</title>
</head>

<?php
session_start();
if(isset($_SESSION["uname"]))
{
	header("location:check.php");
}

?>
<script>
function check()
{
alert ("Invalid Password. Please try again with a different password");
}
</script>



<body>
<?php
$pass=$_POST["pass"];
$uname=$_POST["uname"];
if($pass=="anurag123" && $uname="aman")
{
	
	$_SESSION["uname"]=$uname;
	header("location:query.php");
}
else

{ session_unset();
   session_destroy();
	?>
<script>check();</script>

<?php
include("index.php");
}
?>
</body>
</html>