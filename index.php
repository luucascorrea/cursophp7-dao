<?php

require_once("config.php");

//$sql = new Sql();
//$usuarios = $sql->select("SELECT * FROM tb_usuario");

//$root = new Usuario();
//$root->loadById(3);

//echo $root;

//echo json_encode($usuarios)

//Carrega lista de usuários

//$lista = Usuario::getList();

//echo json_encode($lista);



//Carrega uma lista de usuario buscando pelo login

//$search =Usuario::search("jo");
//echo json_encode($search);


//Carrega um usuário usando login e senha

//$usuario = new Usuario();
//$usuario->login("root","123");

//echo $usuario;
//criando um novo usuario
//$aluno = new Usuario("aluno","@alun0");


//$aluno->insert();

//echo $aluno;

//alterar um usuário
/*
$usuario = new Usuario();

$usuario->LoadById(6);
$usuario->update("Professo","mestre");

echo $usuario;
*/

$usuario = new Usuario();
$usuario->loadById(7);
$usuario->delete();

echo $usuario;

?>