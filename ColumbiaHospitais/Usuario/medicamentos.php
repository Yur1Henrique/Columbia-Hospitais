<?php include "verificaLogin.inc"; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <!-- Icone que aparece no navegador -->
        <link rel="shortcut icon" href="../icone.png" type="image/x-png">
        <!-- Chamando o css -->
        <link rel="stylesheet" type="text/css" href="../css/home.css">
        <title>Drograria Columbia - Powered Columbia Hospitais</title>
        
    </head>
    <body>
        <div class="search">
            <div class="search_bar">
		<div class="search_content">
				<ul>
                                    <img src="../img/marcar-consulta_test.png" width="60" height="60">
                                        <li class="item_medical"><?php echo "<a href='marcar_consulta.php?num1=$n1'>Marcar<br>Consulta</a>"?></li>
                                    <img src="../img/minhas-consultas_test.png" width="60" height="60">
                                        <li class="item_laboratory"><?php echo "<a href='consultas.php?num1=$n1'>Meus<br>Exames</a>"?></li>
                                    <img src="../img/hospitais_test.png" width="60" height="60">
                                        <li class="item_hospital"><?php echo "<a href='clinicas.php?num1=$n1'>Clínicas &amp; Hospitais</a>"?></li>
                                    <img src="../img/medicamentos_test.png" width="60" height="60">
                                        <li class="item_medicines" style="border-right: none;"><?php echo "<a href='medicamentos.php?num1=$n1'>Medicamentos</a>"?></li>
                                    <img src="../img/logoff.png" width="60" height="60">
					<li class="item_logoff"><a href="../logoff.php">LogOFF</a></li>
				</ul>
		</div>
            </div>
        </div>
	
	</body>
</html>