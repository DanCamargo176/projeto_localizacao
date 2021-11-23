<?php
session_start();
include_once('conexao.php');
// Cria Conexao BD SQL 
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
// CHECA A CONEXAO COM O BANCO DE DADOS
if (!$conn) {
  die("Falha de Conexão: " . mysqli_connect_error());
}

			
$id = $_POST['id'];
$nome = $_POST['nome'];
$data_nasc = $_POST['data_nasc'];
$endereco = $_POST['endereco'];
$rg = $_POST['rg'];
$cpf = $_POST['cpf'];
$celular = $_POST['celular'];
$email = $_POST['email'];
$profissao = $_POST['profissao'];
$obs = $_POST['obs'];


	$sql = "UPDATE tb_voluntarios SET nome ='$nome', data_nasc ='$data_nasc', endereco ='$endereco', rg ='$rg', cpf ='$cpf', profissao ='$profissao', celular ='$celular', email ='$email', obs ='$obs',  WHERE id='$id'";
	if (mysqli_query($conn, $sql)){
			echo "<script> alert ('Atualização de Dados Bem Sucedida!!'); </script>";}
			else {
			echo "Erro ao Atualizar os Dados!";
			}
			//Redireciona para pagina index_adm.php se conseguir gravar os dados no banco de dados.
			echo "<script> window.location.href='tela_voluntarios.php'</script>";
   // Salva apenas o dados no banco;
   // Neste caso aqui é opcional passar o nome da foto.
   // Já que ela já vai estar salva na sua tabela então pode remover o campo com o nome
   // E remover essa coluna do seu sql
   echo "<script> alert ('Somente dados atualizados!'); </script>";

?>