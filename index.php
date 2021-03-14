<?php
require_once('printCookies.php');
echo "<div><h2>Benvenuto!<h2></div>";

if(isset($_REQUEST['cancella'])) setcookie('visite', '', time()-3600); // cancellazione cookie

else isset($_COOKIE['visite']) ? printCookies() : setcookie("visite", date("Y-m-d-h:i:s "), time()+3600);

?>

<!DOCTYPE html>
<html lang="en">
<head> 
<meta charset="UTF-8"> 
	<style>
		*{ font-family: Arial,Helvetica,sans-serif; }
		div{
			margin-top: 20px;
			background: #FCB204;
			width: 15%;
			color: black;
			border: 2px solid black;
			padding: 5px;
		}
	</style>
</head>

</html>