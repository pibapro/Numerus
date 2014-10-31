<?php

/* 
 * ESTA CLASSE É RESPONSAVEL POR CONTER AS CONFIGURAÇÕES PARA ACESSAR O
 * BANCO DE DADOS, ALEM DE HERDAR TODAS AS CARACTERÍSTICAS DA CLASSE mysqli
 * (mysqli É NATIVA DO PHP) QUE SERÃO UTILIZADAS DURANTE AS INTERAÇÕES COM O
 * BANCO DE DADOS.
 */

//COMANDO PARA DEFINIR O FUSO HORÁRIO
date_default_timezone_set("Brazil/East");




class C_config_db extends mysqli {
    // Variaveis para configuração de acesso ao banco
    public $user = "u915704413_root";             //usuário do banco
    public $pass = "";                 //senha do banco
    public $dbName = "u915704413_giom";        //nome do banco
    public $dbHost = "127.0.0.1";      //endereço do banco
}