<?php

/* 
 * ESTA CLASSE � RESPONSAVEL POR CONTER AS CONFIGURA��ES PARA ACESSAR O
 * BANCO DE DADOS, ALEM DE HERDAR TODAS AS CARACTER�STICAS DA CLASSE mysqli
 * (mysqli � NATIVA DO PHP) QUE SER�O UTILIZADAS DURANTE AS INTERA��ES COM O
 * BANCO DE DADOS.
 */

//COMANDO PARA DEFINIR O FUSO HOR�RIO
date_default_timezone_set("Brazil/East");




class C_config_db extends mysqli {
    // Variaveis para configura��o de acesso ao banco
    public $user = "u915704413_root";             //usu�rio do banco
    public $pass = "";                 //senha do banco
    public $dbName = "u915704413_giom";        //nome do banco
    public $dbHost = "127.0.0.1";      //endere�o do banco
}