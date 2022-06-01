<?php

include ('conexao.php');
			
			//SELECT `id`, `email`, `senha` FROM `usuarios` WHERE
			$sql = "SELECT * FROM  senhavez";
			
			$result = $mysqli->query($sql);
			$registros = array();
			$row = $result->fetch_assoc(); 

			$sql = "SELECT * FROM  onoff";
			
			$result = $mysqli->query($sql);
			$registros = array();
			$rows = $result->fetch_assoc();

      $sql = "SELECT * FROM recado";

      $result = $mysqli->query($sql);
      $registros = array();
      $rowk = $result-> fetch_assoc();

      $sql = "SELECT * FROM att";

      $result = $mysqli->query($sql);
      $registros = array();
      $rowx = $result-> fetch_assoc();
		   
?>

<!DOCTYPE html lang=pt-br>
<head>
<title>BarbeariaDaniel</title>
</head>

<body>

    <header id="area-cabeçalho">
        <div id="area-logo"><h1 id="logo">Barbearia<apan class="logo2">Daniel</apan></h1></div>

        <div id="area-menu">
        <a href="https://www.google.com/maps/place/Sal%C3%A3o+Do+Daniel/@-2.9780583,-59.9894086,21z/data=!4m5!3m4!1s0x0:0x26530884da5b9a53!8m2!3d-2.9779891!4d-59.9896523"><img class="icon" src="assets/mapa.png"> Localização</a>
        <a href="https://api.whatsapp.com/send?phone=+559293678889&text=sua%20mensagem"><img class="icon" src="assets/icon2.png"> Contato</a>
        <a href="login.php"><img class="icon" src="assets/icon3.png"> Entrar</a>
        
    </header>

        <div class="">

        <div class="aberto">
                <?php 
                 
                if($rows['aberto'] == 1){
                echo "<h2>🟢 ABERTO 🟢</h2>";
                }else{
                   echo "<h2>🔴 FECHADO 🔴</h2>";              
                }
                ?>
                </h2>
              </div>

          <div class="fundo2">

            <div id="senha">
                Senha Atual
                <p id="num"><?php echo $row['numsenha']; 
                echo "<meta HTTP-EQUIV='refresh' CONTENT='30' "?></p>
            </div>

              <div class="att">
                <h2>ùltima atualização: <?php echo $rowx['hora']; ?></h2>
              </div>
          </div>

          <div class="fundo3">

              <div id="avs">
                    🟡Avisos🟡
                <p id="aviso"><?php echo $rowk['aviso']; ?></p>
              </div>

          </div>

          <footer id="rodape">
            Todos os direitos reservados©2022<br>Desenvolvido por Mattheus Alfaia<br>Versão: 0.0.1
          </footer>

        </div>

      <script src="mainss.js"></script>    
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="indexx.css">  
      <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</body>

</html>