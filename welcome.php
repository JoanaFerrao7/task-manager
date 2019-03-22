<?php
session_start();

if(isset($_SESSION['un'])){}
else{header:index.html;}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Welcome</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>
<body>
	<table>
	<tr>
		<td>Name</td>
		<td>Description</td>
		<td>Created By</td>
		<td>Created At</td>
		<td>Completed At</td>
	</tr>
	
	<?php

		foreach($_SESSION['un'] as $user):
			$SqlCarrinho = mysqli_query($conect,"SELECT * FROM tasks WHERE username= '$user'");
			echo '<tr>';
				echo '<td>'.$ResAssoc['name'].'</td>';
				echo '<td>'.$ResAssoc['description'].'</td>';
				echo '<td>'.$ResAssoc['username'].'</td>'
				echo '<td>'.$ResAssoc['created_at'].'</td>';
				echo '<td>'.$ResAssoc['completed_at'].'</td>';				
			echo '</tr>';
		endforeach;
	?>	
	
	</table>
</body>
</html>