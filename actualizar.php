<?php

// informa o banco de dados que queremos usar
require_once('conexao.php');

// inserir os valores que estao presente nos arquivos de cadastro

$id=$_POST['codigo'];

$nome = $_POST["txt_nome"];
$usuario = $_POST["txt_usuario"];
$senha = $_POST["txt_senha"];
$email = $_POST["txt_email"];
$sexo = $_POST["txt_sexo"];
$nivel = $_POST["txt_nivel"];
$escolar = $_POST["txt_escolar"];
$descricao = $_POST["txt_descricao"];


// $descricao = $_POST["Descricao"];
// insere os valors no banco de dados

$sql_actualizar = mysqli_query($ligar, "UPDATE tb_usuarios SET nome='$nome', usuario='$usuario', senha='$senha', email='$email', sexo='$sexo', nivel='$nivel',escolaridade='$escolar', descricao='$descricao' WHERE id='$id'");

// descricao se o cadastro foi feito com secesso
if ($sql_actualizar == true){
    // caso o cadastro tenha cido bem sucedido
    echo "<script>
        alert('Usuário actualizado com sucesso!');
        window.location.href='index_usu.php';
    </script>";
}else{
//  caso nao tenha realizado o cadastro
    echo "<script>
        alert('Falha na edição do registro!');
        window.location.href='plincipal.php';
    </script>";

}


?>