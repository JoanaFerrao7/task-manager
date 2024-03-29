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

<style>
body{
	font-family: 'Montserrat', sans-serif;
}	

table{
	width:80%;
	margin-left:10%;
	margin-right:10%;
	margin-top:30px;
	border-collapse:separate;
    border:solid #403866 1px;
    border-radius:6px;
    -moz-border-radius:6px;
	background:#f9f9f9;
	color:#403866;
	
}

td.main{
	font-size:20px;
	width:18%;
	padding: 5px 5px 5px 10px;
}
td.actions{
	font-size:18px;
	width:5%;
	padding: 5px 5px 5px 10px;
}
</style>
<?php
	//Este ficheiro, APÓS LOGIN (autenticação) com sucesso; apresentará uma página de boas-vindas
	include ('session.php');
?>
<html>

	<head>
		<title> Welcome!</title>
		<meta charset = "UTF-8">
	</head>

	<body>
		<div align = "right"; style = " font-size:12px;"><h2>
		<p> Welcome (a) <?php echo ' '.$username.'<br>'; ?>
		<a href = "logout.php"> Log Out (<i> out </i>) </a></p></h2>
		</div>
		
		<?php $tasks = DBRead2()?>
		<h1> List of Tasks</h1>
		<table width="100%" border="1">
			<tr> 
			<td align=center>
			Name
			</td>
			<td align=center>
			Description
			</td>
			<td align=center>
			Created By
			</td>
			<td align=center>
			Created At
			</td>
			<td align=center>
			Completed At
			</td>
			<td align=center>
			Edit Task
			</td>
			<td align=center>
			Delete Task
			</td>
			<?php foreach($task as $cl)
			{?>
			<tr> 
			<td align=center><?php echo ($cl['name']) ?></td>
			<td align=center><?php echo ($cl['description']) ?></td>
			<td align=center><?php echo ($cl['username']) ?></td>
	        <td align=center><?php echo ($cl['created_at']) ?></td>
			<td align=center><?php echo ($cl['completed_at']) ?></td>
			<td><a href="alterar.php?id=<?=$cl['id_task']?>">&#8634;</a></td>
			<td><a href="eliminar.php?id=<?=$cl['id_task']?>" onclick="return confirm('Tem a certeza que pretende eliminar o registo?')">x</a></td>
			</tr>
			<?php } ?>
		</table>
		<br>
		<a href="registar.html"> <input type="button" name="" value="Registar carro"></a>
	</body>

</html>