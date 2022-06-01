<?php 
 require_once('painelcontroler.php');
?>

<DOCTYPE html>

	<head>
		<title>Barbearia Teste</title>
	</head>


	<body>
		<div class="cx2 container">


		<div class="ADM">
          <h2>PAINEL</h2>

		</div>

		<div id="senha">			
			<p id="num">Senha Atual: <?php echo $row['numsenha']; ?></p>
		</div>

		
           <div class="aberto">
                <?php 
                 
                if($rows['aberto'] == 1){
                echo "<p>ABERTO</p>";
                }else{
                   echo "<p>FECHADO </p>";              
                }
                ?>
                </h2>
            </div>

		    <form  method="POST" > 
			<input name="alterar" value="proxima"  type="hidden">
            <button class="butn btn-primary" type="submit">Próxima Senha</button>
		    </input>
			</form>

			<form  method="POST" > 
			<input name="retorna" value="voltar"  type="hidden">
            <button class="butn btn-primary" type="submit">Voltar Senha</button>
		    </input>
			</form>

			
		    <form  method="POST" > 
			<input name="zerasenha" value="zerar"  type="hidden">
            <button class="butn btn-primary" type="submit">Zerar Senha</button>
		    </input>
			</form>

		<form method="POST"> 
			<input type="number" name="novasenha" placeholder="Mudar senha manual">
            <button class="butn btn-primary" type="submit" value="1">Alterar</button>
			</input>
		</form>
	<!--//abrir//-->
		<form  method="POST" > 
			<input name="abrir" value="aberto"  type="hidden">
            <button class="butn btn-primary" type="submit">Abrir barbearia</button>
		    </input>
		</form>

		<form  method="POST" > 
			<input name="fechar" value="fechado"  type="hidden">
            <button class="butn btn-primary" type="submit">Fechar barbearia</button>
		    </input>
		</form>

		<form method="POST"> 
			<input type="text" name="recado" placeholder="Aviso / Recado">
            <button class="butn btn-primary" type="submit" value="1">enviar</button>
			</input>>
		</form>

		<form method="POST">
		   <input name="limpar" type="hidden">
             <button class="butn btn-primary" type="submit" value="none">Limpar avisos</button>
		    </input>
		</form>

		<a href="index.php">
			<button class="butn btn-primary" type="submit">Página inicial</button>
		</a>

	</div>


	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
	
	</body>


<html>