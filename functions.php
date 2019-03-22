<?php
require("config.php");

function DBConnect ()
{
	$db = mysqli_connect (DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE) or die (mysqli_connect_error());
	return $db;
}

function DBClose($db)
{
	mysqli_close($db) or die (mysqli_error($db));
}

function DBExecute($sql)
{
	$db = DBConnect();
	$result = mysqli_query($db,$sql);
	DBClose($db);
	return $result;
}

function DBRead()
{
	$sql="SELECT * FROM tasks";
	$result=DBExecute($sql);
	
	while($res=mysqli_fetch_assoc($result))
	{
		$data[]=$res;
	}
	return $data;
}
function DBRead2($username)
{
	$sql="SELECT * FROM users WHERE username=$username";
	$result=DBExecute($sql);
	$row_user=mysqli_fetch_assoc($result);
	$data[] = $row_user;
	return $data;
}
function DBRead3($username)
{
	$sql="SELECT * FROM tasks WHERE username=$username";
	$result=DBExecute($sql);
	$row_user=mysqli_fetch_assoc($result);
	$data[] = $row_user;
	return $data;
}
function DBDelete($username)
{
	$sql ="DELETE from users WHERE username=$username";
	$result = DBExecute($sql);
	return $result;
}