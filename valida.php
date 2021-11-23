<?php
require ("conexao.php");


		if(isset($_POST['usuario']) && isset($_POST['senha']) && $conn !=null){
			$query = $conn->prepare("SELECT * FROM usuarios WHERE usuario = ? AND senha = ?");
			$query->execute(array($_POST['usuario'], $_POST['senha']));
				if($query->rowCount()){
					$user = $query->fetchAll(PDO::FETCH_ASSOC);
					session_start();
					$_SESSION['usuario'] = $_POST['usuario'];
					 
					
					echo "<script> alert ('Bem Vindo(a) ".$_SESSION['usuario']."!' ); </script>";
					echo "<script> window.location = 'index_adm.php'</script>";
					
					
				}
				else{
					echo "<script> alert ('Usuário/Senha Incorretos!' ); </script>";
					echo "<script> window.location = 'login.html'</script>";

					}
		}else{
			echo "<script> alert ('Usuário/Senha Incorretos!' ); </script>";
			echo "<script> window.location = 'login.html'</script>";
		}

?>