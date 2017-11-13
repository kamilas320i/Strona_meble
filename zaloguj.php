<?php

session_start();

require_once  "connect.php";
  
$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);

if($polaczenie->connect_errno!=0)
{
	echo "Error: " . $polaczenie->connect_errno;
}
else
{
	$Email = $_POST['email'];
	$haslo = $_POST['haslo'];
	
	$sql =  "SELECT * FROM klijenci WHERE Email='$Email' AND haslo='$haslo'";
	
	if($rezultat = @$polaczenie->query($sql))
	{
		$ile_users = $rezultat->num_rows;
			if($ile_users>0)
				{
					$wiersz = $rezultat->fetch_assoc();
					 $_SESSION['user'] = $wiersz['Nazwa_urzytkownika'];
					 
					 
					 $rezultat->close();
					 echo "witaj";
//					 header('Location: index.php#wspolpraca');
				}	
			else
				{
					echo "nie witaj";
				}
	}
	
	$polaczenie -> close();
}



?>