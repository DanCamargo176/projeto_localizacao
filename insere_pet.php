<?php
// Conexão com o banco de dados
include_once 'conexao.php';

// Se o usuário clicou no botão cadastrar efetua as ações	
	$botao=$_POST['Cadastrar'];
	if($botao=="Cadastrar")
	{		
    
    // Recupera os dados dos campos
	//Dados Tutor
	$nome_tutor=$_POST['nome_tutor'];
	$dt_nasc_tutor=$_POST['dt_nasc_tutor'];
	$endereco_tutor=$_POST['endereco_tutor'];
	$telefone_tutor=$_POST['telefone_tutor'];

    //Dados PET
	$nome_pet=$_POST['nome_pet'];
	$raca_pet=$_POST['raca_pet'];
	$sexo_pet=$_POST['sexo_pet'];
	$apelido_pet=$_POST['apelido_pet'];
	$ultima_localizacao_pet=$_POST['ultima_localizacao_pet'];
	$bairro_pet=$_POST['bairro_pet'];
	$cidade_pet=$_POST['cidade_pet'];
	$obs=$_POST['obs'];
	$foto = $_FILES["arquivo"];
    
    // Se a foto estiver sido selecionada
    if (!empty($foto["name"])) {
        
        // Largura máxima em pixels
        $largura = 1024;
        // Altura máxima em pixels
        $altura = 2048;
        // Tamanho máximo do arquivo em bytes
        $tamanho = 100000;

        $error = array();

        // Verifica se o arquivo é uma imagem
        if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $foto["type"])){
            $error[1] = "Isso não é uma imagem.";
            } 
    
        // Pega as dimensões da imagem
        $dimensoes = getimagesize($foto["tmp_name"]);
    
        // Verifica se a largura da imagem é maior que a largura permitida
        if($dimensoes[0] > $largura) {
            $error[2] = "A largura da imagem não deve ultrapassar ".$largura." pixels";
        }

        // Verifica se a altura da imagem é maior que a altura permitida
        if($dimensoes[1] > $altura) {
            $error[3] = "Altura da imagem não deve ultrapassar ".$altura." pixels";
        }
        
        // Verifica se o tamanho da imagem é maior que o tamanho permitido
        if($foto["size"] > $tamanho) {
                $error[4] = "A imagem deve ter no máximo ".$tamanho." bytes";
        }

        // Se não houver nenhum erro
        if (count($error) == 0) {
        
            // Pega extensão da imagem
            preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $foto["name"], $ext);

            // Gera um nome único para a imagem
            $nome_imagem = md5(uniqid(time())) . "." . $ext[1];

            // Caminho de onde ficará a imagem
            $caminho_imagem = "fotos/" . $nome_imagem;

            // Faz o upload da imagem para seu respectivo caminho
            move_uploaded_file($foto["tmp_name"], $caminho_imagem);
			
			//Query inserção de dados
			$sql = "INSERT INTO tb_desaparecidos (nome_tutor, dt_nasc_tutor, endereco_tutor, telefone_tutor, nome_pet, raca_pet, sexo_pet, apelido_pet, ultima_localizacao_pet, bairro_pet, cidade_pet, obs, foto) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
			//Prepara a conexao com o banco incluindo a query de insercao acima.
			$stmt= $conn->prepare($sql);
			//executa a query de insercao apos realizar com sucesso a conexao com o banco de dados sql, baseando-se nos parametros passados anteriormente.
			$stmt->execute([$nome_tutor, $dt_nasc_tutor, $endereco_tutor, $telefone_tutor, $nome_pet, $raca_pet, $sexo_pet, $apelido_pet, $ultima_localizacao_pet,  $bairro_pet, $cidade_pet, $obs, $nome_imagem]);
			//Redireciona para pagina index_adm.php se conseguir gravar os dados no banco de dados.
			echo "<script> alert ('Queixa de desaparecimento gravado com Sucesso!'); </script>";
			echo "<script> window.location.href='index.html'</script>";
              
            // Se os dados forem inseridos com sucesso
        }
    
        // Se houver mensagens de erro, exibe-as
        if (count($error) != 0) {
            foreach ($error as $erro) {
                echo $erro . "<br />";
            }
        }
    }
}
?>