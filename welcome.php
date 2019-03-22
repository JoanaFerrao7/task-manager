<?php
include('session.php');
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
		foreach($myusername as $user):
			$sql = mysqli_query($conect,"SELECT * FROM tasks WHERE username= '$user'");
			echo '<tr>';
				echo '<td>'.$user['name'].'</td>';
				echo '<td>'.$user['description'].'</td>';
				echo '<td>'.$user['username'].'</td>';
				echo '<td>'.$user['created_at'].'</td>';
				echo '<td>'.$user['completed_at'].'</td>';				
			echo '</tr>';
		endforeach;
	?>	
	
	</table>
</body>
</html>