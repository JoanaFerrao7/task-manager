<?php
	//Code to do the login
	require("functions.php");
	session_start();
	
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		//username and password from the form (form)
		
		$myusername = $_POST['username'];
		$mypassword = $_POST['pass'];
		
		$sql = "SELECT name FROM users WHERE username = '$myusername' and pass = '$mypassword' ";
		$result = DBExecute($sql);
		
		$count = mysqli_num_rows ($result);
		mysqli_free_result($result);
		
		
		
		if($count == 1)
		{
			$_SESSION['login_user'] = $myusername;
			
			header("location: welcome.php");
		}
		else
		{
			echo "
                <script type='text/javascript'>
                    alert('Senha ou utilizador errados!');
                    window.location = 'index.html';
                </script>";
		}
	}
	mysqli_close($db);
	
?>