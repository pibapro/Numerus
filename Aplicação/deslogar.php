<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//INICIALIZA A SESSÃO 
session_start(); 

//DESTRÓI AS SESSOES
unset($_SESSION["login"]); 
unset($_SESSION["senha"]);
session_destroy(); 

//REDIRECIONA PARA A TELA DE LOGIN 
Header("Location: index.php"); 