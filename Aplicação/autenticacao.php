<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

unset($_SESSION);
// session_start inicia a sessão 
 session_start(); 
// as variáveis login e senha recebem os dados digitados na página anterior 
$login = $_POST['login']; 
$senha = $_POST['senha'];

require_once("Includes/C_cad_membros.php");

if (C_cad_membros::getInstance()->autentica_login($login, $senha)){

    $_SESSION['login'] = $login;
    $_SESSION['senha'] = $senha;
    
    header ("location: menu_numerus.php");
}else{
    unset ($_SESSION['login']);
    unset ($_SESSION['senha']);
    header('location:index.php');
}