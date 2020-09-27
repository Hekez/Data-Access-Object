<?php  

require_once("config.php");

//Carrega um usuario
//$usuario = new Usuario();
//$usuario->loadById(3);
//echo $usuario;

//Carrega todos os usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega usuario pelo login
//$login = Usuario::search("Gabriel");
//echo json_encode($login);

//Carrega usuario pelo login e senha
//$login = new Usuario();
//$login->login("Gabriel","123456");
//echo $login;

//Insert de novo usuario
//$aluno = new Usuario();
//$aluno->setDeslogin("Jorge");
//$aluno->setDessenha("98522");
//$aluno->insert();
//echo $aluno;

//Update usuario
//$usuario = new Usuario();
//$usuario->loadById(7);
//$usuario->update("Jorginho", "xxxxx");

$usuario = new Usuario();
$usuario->loadById(7);
$usuario->delete();

?>