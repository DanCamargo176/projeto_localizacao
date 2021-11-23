<?php
// Conexão com o banco de dados
include_once 'conexao.php';

// Se o usuário clicou no botão cadastrar efetua as ações	
	$botao=$_POST['Cadastrar'];
	if($botao=="Cadastrar")
	{		
    
    // Recupera os dados dos campos
	//Dados Pessoais
	$nome=$_POST['nome_completo'];
    $data_nascimento=$_POST['dt_nasc'];
    $endereco=$_POST['endereco'];
    $celular=$_POST['celular'];
    $rg=$_POST['rg'];
    $cpf=$_POST['cpf'];
    $profissao=$_POST['profissao'];
    $email=$_POST['email'];
    $obs=$_POST['obs'];

			//Query inserção de dados
			$sql = "INSERT INTO tb_voluntarios (nome, data_nasc, endereco, rg, cpf, profissao, celular, email, obs) VALUES (?, ?, ?, ?, ?, ?, ?, ?,?)";
			//Prepara a conexao com o banco incluindo a query de insercao acima.
			$stmt= $conn->prepare($sql);
			//executa a query de insercao apos realizar com sucesso a conexao com o banco de dados sql, baseando-se nos parametros passados anteriormente.
			$stmt->execute([$nome, $data_nascimento, $endereco, $rg, $cpf, $profissao, $celular, $email, $obs]);
			//Redireciona para pagina tela_ocmes.php se conseguir gravar os dados no banco de dados.
			echo "<script> alert ('Dados Gravados com Sucesso!'); </script>";
			echo "<script> window.location.href='index.html'</script>";
              
            // Se os dados forem inseridos com sucesso
        }
    
        // Se houver mensagens de erro, exibe-as
        if (count($error) != 0) {
            foreach ($error as $erro) {
                echo $erro . "<br />";
            }
        }
    

?>