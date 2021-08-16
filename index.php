<?php

require_once("config.php");

// $sql = new Sql();
// $usuarios = $sql->select("SELECT * FROM tb_usuarios");
// echo json_encode($usuarios);

//---------------------------------------------

//Carrega um usuário

// $root = new Usuario();
// $root->loadById(3);
// echo $root;

//---------------------------------------------

//Carrega uma lista

// $lista = Usuario::getList();
// echo json_encode($lista);

//---------------------------------------------

//Carrega uma lista de usuários buscando pelo login

$search = Usuario::search("sa");
echo json_encode($search);

//---------------------------------------------

// Carregar um usuário usando o login e a senha 

// $usuario = new Usuario();
// $usuario->login("Thiago", "123456789");
// echo $usuario;

//---------------------------------------------

//Inserir novo usuário

//Inserir usuário usando construct

// $newuser = new Usuario("Samila", "435341234");

//Metodo de inserir o usuario sem o modo construct

// $newuser->setDeslogin("Samila");
// $newuser->setDessenha("654342");

// $newuser->insert();
// echo $newuser;

//---------------------------------------------

//Atualizar alguma informação do usuário

// $usuario = new Usuario();
// $usuario->loadById(3);
// $usuario->update("professor", "!@#$%&");
// echo $usuario;

//---------------------------------------------

//Deletar um usuário

// $usuario = new Usuario();
// $usuario->loadById(7);
// $usuario->delete();
// echo $usuario;
?>