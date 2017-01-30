<?php
    if(isset($_COOKIE["numLogin"])){
	$n1=$_GET["num1"];
	$n2=$_COOKIE["numLogin"];
            if($n1 != $n2){		
                echo "<META HTTP-EQUIV=Refresh CONTENT='0.1; URL=../index.php'>";
		exit;
            }
    }else{	
        echo "<META HTTP-EQUIV=Refresh CONTENT='0.1; URL=../index.php'>";
	exit;
    }

    //conexão
    $con=mysqli_connect("localhost","root","");
    mysqli_select_db($con,"columbia");
	
    mysqli_close($con);
?>