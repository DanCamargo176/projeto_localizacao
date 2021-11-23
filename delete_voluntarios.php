<?php

include 'conexao.php';

$cod = $_GET['id']; // Recebendo o valor enviado pelo link


$stmt = $conn->prepare("DELETE FROM tb_voluntarios WHERE id = ?");
$stmt->bindParam(1, $cod);
$stmt->execute();
$deleted = $stmt->rowCount();

if($deleted){
echo "<script> alert('Registro excluído com sucesso!')</script>";
echo "<script>window.location.href='tela_voluntarios.php'</script>";

}else{
		echo "<script> alert('Falha ao deletar. Contate o Administrador do Sistema!')</script>";
		echo "<script>window.location.href='tela_voluntarios.php'</script>";	
}; /*Fim do ELSE*/
?>
