<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/* 
 * SEÇÃO PARA INCLUSÃO DE ARQUIVOS EXTERNOS
 */

require_once("Includes/C_cad_membros.php");

        $idmbr          = NULL;
        
        $cdusumbr       = $_POST["InputUsuario"];
        $dcsenmbr       = $_POST["InputNovSenha"];
        $nmmbr       	= $_POST["InputNomeCompleto"];
        $dtnsc          = $_POST["InputNascimento"];
        $cdsex          = $_POST["InputSexo"];
        $dceml          = $_POST["InputEmail"];
        $nrdddres       = $_POST["InputDDDTelefoneRes"];
        $nrtelres       = $_POST["InputTelefoneRes"];
        $nrdddcel       = $_POST["InputDDDTelefoneCel"];
        $nrtelcel       = $_POST["InputTelefoneCel"];
        
        $nmlog          = $_POST["InputEndereco"];
        $nrlog          = $_POST["InputNumEndereco"];
        $nmbai          = $_POST["InputBairro"];
        $nmcid          = $_POST["InputCidade"];
        $cduf           = $_POST["InputEstado"];
        $dtcnv          = null;//$_POST[""];
        
        $auusualt       = "adm";
        


        
            C_cad_membros::getInstance()->create_membro($idmbr, $cdusumbr, $dcsenmbr, $nmmbr, $dtnsc, $cdsex, 
                                        $dceml, $nrdddres, $nrtelres, $nrdddcel, $nrtelcel, $nmlog, 
                                        $nrlog, $nmbai, $nmcid, $cduf, $dtcnv, $auusualt);
        
        
