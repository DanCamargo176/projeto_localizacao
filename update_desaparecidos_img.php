<?php
session_start();
include_once('conexao.php');
// Cria Conexao BD SQL 
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
// CHECA A CONEXAO COM O BANCO DE DADOS
if (!$conn) {
  die("Falha de Conexão: " . mysqli_connect_error());
}

			
$id = $_POST['cod'];
$nome_pet = $_POST['nome_pet'];
$raca_pet = $_POST['raca_pet'];
$sexo_pet = $_POST['sexo_pet'];
$ultima_localizacao_pet = $_POST['ultima_localizacao_pet'];
$bairro_pet = $_POST['bairro_pet'];
$cidade_pet = $_POST['cidade_pet'];
$nome_tutor = $_POST['nome_tutor'];
$dt_nasc_tutor = $_POST['dt_nasc_tutor'];
$endereco_tutor = $_POST['endereco_tutor'];
$telefone_tutor = $_POST['telefone_tutor'];
$obs = $_POST['obs'];
$foto = $_FILES['foto'];


if(isset($_FILES['foto']['tmp_name']) and $_FILES['foto']['tmp_name'] != ""){
   // Faz o upload da imagem e os dados salva no banco     
            // Pega extensão da imagem
            preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $foto['name'], $ext);

            // Gera um nome único para a imagem
            $nome_imagem = md5(uniqid(time())) . "." . $ext[1];

            // Caminho de onde ficará a imagem
            $caminho_imagem = "fotos/" . $nome_imagem;

            // Faz o upload da imagem para seu respectivo caminho
            move_uploaded_file($foto["tmp_name"], $caminho_imagem);
			
			//Query inserção de dados
			$sql = "UPDATE tb_desaparecidos SET nome_pet ='$nome_pet', raca_pet ='$raca_pet', sexo_pet ='$sexo_pet', ultima_localizacao_pet ='$ultima_localizacao_pet', bairro_pet ='$bairro_pet', cidade_pet ='$cidade_pet', nome_tutor ='$nome_tutor', dt_nasc_tutor ='$dt_nasc_tutor', foto ='$nome_imagem', obs ='$obs', endereco_tutor ='$endereco_tutor', telefone_tutor ='$telefone_tutor' WHERE cod='$id'";
			//Prepara a conexao com o banco incluindo a query de insercao acima e executa a query de insercao apos realizar com sucesso a conexao com o banco de dados sql, baseando-se nos parametros passados anteriormente.
			if (mysqli_query($conn, $sql)){
			echo "<script> alert ('Dados e Imagens Atualizados com Sucesso!'); </script>";}
			else {
			echo "Erro ao Atualizar Dados e Foto";
			}
			//Redireciona para pagina index_adm.php se conseguir gravar os dados no banco de dados.
			echo "<script> window.location.href='tela_pets_abandonados.php'</script>";
}else{
	$sql = "UPDATE tb_desaparecidos SET nome_pet ='$nome_pet', raca_pet ='$raca_pet', sexo_pet ='$sexo_pet', ultima_localizacao_pet ='$ultima_localizacao_pet', bairro_pet ='$bairro_pet', cidade_pet ='$cidade_pet', nome_tutor ='$nome_tutor', dt_nasc_tutor ='$dt_nasc_tutor', obs ='$obs', endereco_tutor ='$endereco_tutor', telefone_tutor ='$telefone_tutor' WHERE cod='$id'";
	if (mysqli_query($conn, $sql)){
			echo "<script> alert ('Atualização de Dados Bem Sucedida!!'); </script>";}
			else {
			echo "Erro ao Atualizar os Dados!";
			}
			//Redireciona para pagina index_adm.php se conseguir gravar os dados no banco de dados.
			echo "<script> window.location.href='tela_pets_abandonados.php'</script>";
   // Salva apenas o dados no banco;
   // Neste caso aqui é opcional passar o nome da foto.
   // Já que ela já vai estar salva na sua tabela então pode remover o campo com o nome
   // E remover essa coluna do seu sql
   echo "<script> alert ('Somente dados atualizados!'); </script>";
}
?>