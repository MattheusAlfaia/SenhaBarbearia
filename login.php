<?php
include ('conexao.php');

if(isset($_POST['email']) || isset($_POST['senha'])){

		if(strlen($_POST['email']) == 0){
			echo "!!!Preencha seu e-mail";
		} else if(strlen($_POST['senha']) == 0) {
			echo "!!!Preencha sua senha";
		} else{
			$email = $mysqli->real_escape_string($_POST['email']);
			$senha = $mysqli->real_escape_string($_POST['senha']);
			
			//SELECT `id`, `email`, `senha` FROM `usuarios` WHERE
			
			$sql_code = " SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha' ";
			$sql_query = $mysqli->query($sql_code) or die("Falha ao executar codigo sql" .  $mysqli->error);

			$quantidade = $sql_query->num_rows;

			if($quantidade == 1){
				$usuario = $sql_query->fetch_assoc();

				if(!isset($_SESSION)){
					session_start();
				}
   
				$_SESSION['id'] = $usuario['id'];

				header("Location: painel.php");

			} else{
				echo "Email ou senha incorretos";
			}
		}

	}
?>
<!DOCTYPE html lang=pt-br>
<head>
<title>Barbearia Login</title>
</head>

<body>

<div class="box-login">
  
  <div class="title">
    <h1>Entrar no Painel</h1>
  </div>
  
    <form action="" method="POST">
      
        <div class="itens">
          <label>Usuário</label>
          <input type="text" name="email" placeholder="E-mail">
        </div>
      
        <div class="itens">
          <label>Senha</label>
          <input type="password" name="senha" placeholder="*********">
        </div>
      
        <div class="itens">
          <button class="submit">Entrar</button>
        </div>
      
  </form>
</div>
          
<link rel="stylesheet" type="text/css" href="ologin.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>

</html>