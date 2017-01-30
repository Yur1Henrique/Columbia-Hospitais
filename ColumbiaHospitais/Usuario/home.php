<?php include "verificaLogin.inc"; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <!-- Icone que aparece no navegador -->
        <link rel="shortcut icon" href="../icone.png" type="image/x-png">
        <!-- Chamando o css -->
        <link rel="stylesheet" type="text/css" href="../css/home.css">
        <!-- Link da fonte Patua -->
        <link href="https://fonts.googleapis.com/css?family=Patua+One" rel="stylesheet">
        <title>Bem vindo ao FreeConsultas - Powered Columbia Hospitais</title>
        
        
    </head>
    <body>
        <div class="search">
            <div class="search_bar">
		<div class="search_content">
				<ul>
                                    <img src="../img/home.png" width="60" height="60">
                                        <li class="item_home"><?php echo "<a href='home.php?num1=$n1'>Pagina<br>Inicial</a>"?></li>
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
        
        <div class="logo_txt" >
            <img class="logo_columbia" src="../icone.png" width="50" height="50">
            <a class="txt_columbia">Columbia Hospitais</a>
        </div>
        
        <figure class="jvScreen epc bd bdsd">
            <!--<span class="trs next"></span>
            <span class="trs prev"></span>-->
            <?php 
                $img1="http://www.clinicafaces.com.br/fotos/fachada.jpg";
                $leg1="Fachada da Clinica";
                $img2="http://www.clinicasanjuan.com.br/images/clinica1.jpg";
                $leg2="Sala de espera";
                $img3="http://www.cosasdearquitectos.com/wp-content/uploads/c2.jpg";
                $leg3="Sala dos Clinicos Gerais";
                $img4="http://claudiabrassaroto.com.br/wp-content/uploads/2012/08/Clinica-Medica-2.jpg";
                $leg4="Sala dos Clinicos Especialistas";
                $larg="937";
                $alt="354";
            ?>
            <div id="slider">
                <a href="#" class="trs"><?php echo"<img src='$img1' alt='$leg1' width='$larg' height='$alt'/>" ?></a>
                <a href="#" class="trs"><?php echo"<img src='$img2' alt='$leg2' width='$larg' height='$alt'/>" ?></a>
                <a href="#" class="trs"><?php echo"<img src='$img3' alt='$leg3' width='$larg' height='$alt'/>" ?></a>
                <a href="#" class="trs"><?php echo"<img src='$img4' alt='$leg4' width='$larg' height='$alt'/>" ?></a>
            </div>
            <figcaption class=""></figcaption>
	</figure>	
        
        
        <!--<div class="screen epc bd bdsd">
            <div class=""></div>
            
            
        </div>-->
        <div style="height: 1000px;"></div>
    </body>
</html>


<!-- Script que roda o Slide -->
<script type="text/javascript">
		function setaImagem(){
			var settings = {
				primeiraImg: function(){
					elemento = document.querySelector("#slider a:first-child");
					elemento.classList.add("ativo");
					this.legenda(elemento);
				},

				slide: function(){
					elemento = document.querySelector(".ativo");

					if(elemento.nextElementSibling){
						elemento.nextElementSibling.classList.add("ativo");
						settings.legenda(elemento.nextElementSibling);
						elemento.classList.remove("ativo");
					}else{
						elemento.classList.remove("ativo");
						settings.primeiraImg();
					}

				},

				proximo: function(){
					clearInterval(intervalo);
					elemento = document.querySelector(".ativo");
					
					if(elemento.nextElementSibling){
						elemento.nextElementSibling.classList.add("ativo");
						settings.legenda(elemento.nextElementSibling);
						elemento.classList.remove("ativo");
					}else{
						elemento.classList.remove("ativo");
						settings.primeiraImg();
					}
					intervalo = setInterval(settings.slide,4000);
				},

				anterior: function(){
					clearInterval(intervalo);
					elemento = document.querySelector(".ativo");
					
					if(elemento.previousElementSibling){
						elemento.previousElementSibling.classList.add("ativo");
						settings.legenda(elemento.previousElementSibling);
						elemento.classList.remove("ativo");
					}else{
						elemento.classList.remove("ativo");						
						elemento = document.querySelector("a:last-child");
						elemento.classList.add("ativo");
						this.legenda(elemento);
					}
					intervalo = setInterval(settings.slide,4000);
				},

				legenda: function(obj){
					var legenda = obj.querySelector("img").getAttribute("alt");
					document.querySelector("figcaption").innerHTML = legenda;
				}

			}


			//chama o slide
			settings.primeiraImg();

			//chama a legenda
			settings.legenda(elemento);

			//chama o slide à um determinado tempo
			var intervalo = setInterval(settings.slide,4000);
			document.querySelector(".next").addEventListener("click",settings.proximo,false);
			document.querySelector(".prev").addEventListener("click",settings.anterior,false);

		}

		window.addEventListener("load",setaImagem,false);
</script>