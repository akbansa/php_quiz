<?php
session_start();
if(!isset($_SESSION["uname"]))
{
	header("location:index.php");
}

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Queries</title>
<style>
tr {
        text-align: center;
    }
</style>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/bs/dt-1.10.8,fh-3.0.0,kt-2.0.0,r-1.0.7,sc-1.3.0/datatables.min.css"/>
<link href="/css/bootstrap.min.css" rel="stylesheet">
<link href="/css/agency.css" rel="stylesheet">
</head>
<body>
<h2 class="section-heading text-muted">Queries and questions by visitors</h2>
<form action="logout.php" method="post">
<input type="submit" class="page-scroll btn btn-xl" name="logout" value="Logout">
</form>
<table class="table table-striped table-bordered table-hover" data-page-length='10'>
<thead>
	<tr class="success">
		<th>Sr. No.</th>
                <th>Name</th>
		<th>Email</th>
		<th>Phone</th>
		<th>Query</th>
		<th>TimeStamp</th>
    </tr>
</thead>
		<tbody>
<?php
$conn=mysqli_connect("mysql1.000webhost.com","a6638524_abc","maB1506-");
mysqli_select_db($conn, "a6638524_all");
$comm=" select * from query";
$result=mysqli_query($conn, $comm);

while($rows=mysqli_fetch_assoc($result))
{
	echo "<tr role='row' class='even'><td>".$rows["id"]."</td><td>".$rows["name"]."</td><td>".$rows["email"]."</td><td>".$rows["phone"]."</td><td>".$rows["message"]."</td><td>".$rows["time"]."</td></tr></br>";
	
}
mysqli_close($conn);
?>
        </tbody>
</table>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/r/bs/dt-1.10.8,fh-3.0.0,kt-2.0.0,r-1.0.7,sc-1.3.0/datatables.min.js"></script>
</body>
</html>