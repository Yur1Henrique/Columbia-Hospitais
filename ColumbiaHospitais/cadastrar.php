<?php
	//conexão
	$con=mysqli_connect("localhost","root","");
	mysqli_select_db($con,"columbia");
	
	//variaveis declaraveis
	$vnome = $_POST["r_nome"];
	$vemail = $_POST["r_email"];
	$vcpf = $_POST["r_cpf"];
	$vrg = $_POST["r_rg"];
	$vconvenio = $_POST["r_convenio"];
	$vdia = $_POST["r_dia"];
	$vmes = $_POST["r_mes"];
	$vano = $_POST["r_ano"];
	$vsenha = $_POST["r_senha"];
	$vsexo = $_POST["r_sexo"];
	$vdata = "$vano"."-"."$vmes"."-"."$vdia";
	
	//chamadas
	
	$sql = "INSERT INTO tb_usuarios (nome,email,cpf,rg,convenio,dt_nascimento,senha,sexo,permissao) VALUES('$vnome','$vemail','$vcpf','$vrg',$vconvenio,'$vdata','$vsenha','$vsexo','2')";
	$res = mysqli_query($con,$sql);
	$linhas = mysqli_affected_rows($con);
	
	if($linhas == 1){
		echo "Você foi registrado com sucesso!<br><br>Por favor aguarde...";
		echo "<META HTTP-EQUIV=Refresh CONTENT='5; URL=usuario/home.php'>";
	}else{
		echo "Falha no registro<br><br>Por favor verifique se seus dados estão corresto!";
		echo "<META HTTP-EQUIV=Refresh CONTENT='5; URL=index.php'>";
	}
	
	
	mysqli_close($con);	
?>
