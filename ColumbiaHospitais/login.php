<?php
	
	//conexão
	$con=mysqli_connect("localhost","root","");
	mysqli_select_db($con,"columbia");
	
	//Variaveis
	$user=$_POST["l_email"];
	$senha=$_POST["l_senha"];
	
	//Chamadas
	$sql="SELECT * FROM tb_usuarios WHERE email='$user' AND senha='$senha'";
	$res=mysqli_query($con,$sql);
	$linha=mysqli_affected_rows($con);
	
	if($linha > 0){
		$num=rand(100000,900000);
		setcookie("numLogin",$num); //login
		header("Location:usuario/home.php?num1=$num");
	}else{
		echo "ERRO no Login<br>";
		echo "Aguarde...";
		echo "<META HTTP-EQUIV=Refresh CONTENT='2.5; URL=index.php'>";
	}
	
	
	mysqli_close($con);	
	
?>

<title>Columbia Hospitais - Seu jeito facil de agendar suas consultas!</title>
