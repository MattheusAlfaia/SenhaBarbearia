<?php
include ('conexao.php');
 if(!isset($_SESSION)){
	 session_start();
 }
//proxima senha
 if(isset($_POST['alterar']) && $_POST['alterar'] == 'proxima'){	


	$sql = "SELECT * FROM  senhavez";
			
	$result = $mysqli->query($sql);
	$registros = array();
	$atual = $result->fetch_assoc();

		$proxima = $atual['numsenha'] + 1;

		date_default_timezone_set('America/manaus');
		$hora = date('H:i:s');
		//$alterar = $mysqli->real_escape_string($_POST['alterar']);
		$sql = " UPDATE `senhavez` SET `id`='2',`numsenha`='$proxima' WHERE 1 ";
		$result = $mysqli->query($sql);

		$sql = " UPDATE `att` SET `idatt`='1',`hora`='$hora' WHERE 1 ";
		$result = $mysqli->query($sql);
	//echo "<pre>"; print_r($result); exit;
		echo "Proxima senha!!! hora: $hora";
	}

    //voltar senha

    if(isset($_POST['retorna']) && $_POST['retorna'] == 'voltar'){	


        $sql = "SELECT * FROM  senhavez";
                
        $result = $mysqli->query($sql);
        $registros = array();
        $atual = $result->fetch_assoc();
    
            $volta = $atual['numsenha'] - 1;
    
			date_default_timezone_set('America/manaus');
			$hora = date('H:i:s');

            //$alterar = $mysqli->real_escape_string($_POST['alterar']);
            $sql = " UPDATE `senhavez` SET `id`='2',`numsenha`='$volta' WHERE 1 ";
            $result = $mysqli->query($sql);

			$sql = " UPDATE `att` SET `idatt`='1',`hora`='$hora' WHERE 1 ";
		$result = $mysqli->query($sql);
    
    
            //echo "<pre>"; print_r($result); exit;
            echo "Voltou a senha!!! hora: $hora";
        }

	//zerar senha
	if(isset($_POST['zerasenha']) && $_POST['zerasenha'] == 'zerar'){	


		$sql = "SELECT * FROM  senhavez";
				
		$result = $mysqli->query($sql);
		$registros = array();
		$atual = $result->fetch_assoc();
	
			$zera = $atual['numsenha'] - $atual['numsenha'];

			date_default_timezone_set('America/manaus');
			$hora = date('H:i:s');
	
			//$alterar = $mysqli->real_escape_string($_POST['alterar']);
			$sql = " UPDATE `senhavez` SET `id`='2',`numsenha`='$zera' WHERE 1 ";
			$result = $mysqli->query($sql);

			$sql = " UPDATE `att` SET `idatt`='1',`hora`='$hora' WHERE 1 ";
		$result = $mysqli->query($sql);
	
			//echo "<pre>"; print_r($result); exit;
			echo "senha zerada!!! hora: $hora";
		}

  //abrir a barbearia

      if(isset($_POST['abrir']) && $_POST['abrir'] == 'aberto'){	


            $sql = "SELECT * FROM  onoff";
                    
            $result = $mysqli->query($sql);
            $registros = array();
            $atual = $result->fetch_assoc();

                $valor = $abrir['aberto'] = 1;
        
                //$alterar = $mysqli->real_escape_string($_POST['alterar']);
                $sql = " UPDATE `onoff` SET `id`='1',`aberto`='$valor' WHERE 1 ";
                $result = $mysqli->query($sql);
        
        
                //echo "<pre>"; print_r($result); exit;
                echo "Aberto com sucesso!!!";
            }
  //fechar barbearia

  if(isset($_POST['fechar']) && $_POST['fechar'] == 'fechado'){	


    $sql = "SELECT * FROM  onoff";
            
    $result = $mysqli->query($sql);
    $registros = array();
    $atual = $result->fetch_assoc();

        $valor = $fechar['aberto'] = 0;

        //$alterar = $mysqli->real_escape_string($_POST['alterar']);
        $sql = " UPDATE `onoff` SET `id`='1',`aberto`='$valor' WHERE 1 ";
        $result = $mysqli->query($sql);


        //echo "<pre>"; print_r($result); exit;
        echo "Fechado com sucesso!!!";
  }


//alterar senha manual
if(isset($_POST['novasenha'])){

	if(strlen($_POST['novasenha']) == 0){
		echo "Preencha uma senha";
	}else{
		$nvsenha = $mysqli->real_escape_string($_POST['novasenha']);
		
		date_default_timezone_set('America/manaus');
		$hora = date('H:i:s');

	$sql = " UPDATE `senhavez` SET `id`='2',`numsenha`='$nvsenha' WHERE 1 ";
	$result = $mysqli->query($sql);

	$sql = " UPDATE `att` SET `idatt`='1',`hora`='$hora' WHERE 1 ";
	$result = $mysqli->query($sql);
	echo "Senha salva com sucesso!!! hora: $hora";
	}
}

//Aviso / Recado

if(isset($_POST['recado'])){

	if(strlen($_POST['recado']) == 0){
		echo "Preencha um aviso / recado";
	}else{
		$nvrecado = $mysqli->real_escape_string($_POST['recado']);
		echo "recado postado com sucesso!!!";

	$sql = " UPDATE `recado` SET `id`='2',`aviso`='$nvrecado' WHERE 1 ";
	$result = $mysqli->query($sql);

	}
}

//limpar recado e avisos
if(isset($_POST['limpar'])){

	$nvrecado = $mysqli->real_escape_string($_POST['limpar']);
	echo "recado limpo com sucesso!!!";

	$sql = " UPDATE `recado` SET `id`='2',`aviso`='$nvrecado' WHERE 1 ";
	$result = $mysqli->query($sql);
}




		$sql = "SELECT * FROM  senhavez";
			
		$result = $mysqli->query($sql);
		$registros = array();
		$row = $result->fetch_assoc();

		$sql = "SELECT * FROM  onoff";
			
		$result = $mysqli->query($sql);
		$registros = array();
		$rows = $result->fetch_assoc();

?>