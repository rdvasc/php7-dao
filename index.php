<?php 

require_once("config.php");

/*
$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
*/

/*
//carrega um usuário
$user = new Usuario();
$user->loadbyId(1);
echo $user;
*/

/*
//carrega lista de Usuarios
$lista = Usuario::getList();
echo json_encode($lista);
*/

/*
$lista = Usuario::search("se");
echo json_encode($lista);
*/

/*
$usuario = new Usuario();
$usuario->login("user","12345");
echo $usuario;
*/
/*
$aluno = new Usuario();
$aluno->setDeslogin("aluno");
$aluno->setDessenha("54321");
$aluno->insert();
echo $aluno;
*/

/*
//insersão de aluno
$aluno = new Usuario("Roberto","582410");
$aluno->insert();
echo $aluno;
*/
/*
$usuario = new Usuario();
$usuario->loadById(5);
echo $usuario;

echo "<br/>";
$usuario->update("Roberto","241058");
echo $usuario;
*/

$usuario = new Usuario();
$usuario->loadById(4);
$usuario->delete();
echo $usuario;

 ?>