<?php

/* 
 * SEÇÃO PARA INCLUSÃO DE ARQUIVOS EXTERNOS
 */

require_once("Includes/C_cad_membros.php");


//=============================================================================





$identificador_mbr = C_cad_membros::getInstance()->get_membro_id_by_name("usuario");


echo "'$identificador_mbr' <br><br>";


$result = C_cad_membros::getInstance()->get_membro_by_membro_id(37);

while($row = mysqli_fetch_array($result)){
    
    echo "'$row[0]' <br>";
    echo "'$row[1]' <br>";
    echo "'$row[2]' <br>";

};    
    
    
    
        $idmbr      = 37;
        $cdusumbr   = "gjhgkgkhgkhgkjhgkjhgkjhgkjhgkjhgkjhgkjhgkjhgkjghvanessa";
        $dcsenmbr   = "van123";
        $nmmbr      = "vanessa de araujo";
        $dtnsc      = "1986-12-15";
        $cdsex      = "M";
        $dceml      = "arateixa@123.abc";
        $nrdddres   = "11";
        $nrtelres   = "36142702";
        $nrdddcel   = "21";
        $nrtelcel   = "994363458";
        $nmlog      = "jose lins rego";
        $nrlog      = 2529;
        $nmbai      = "boacu";
        $nmcid      = "sao goncalo";
        $cduf       = "RJD";
        $dtcnv      = "1995-01-01";
        $auusualt   = "adm";
    
    
//        C_cad_membros::getInstance()->create_membro($idmbr, $cdusumbr, $dcsenmbr, $nmmbr, $dtnsc, $cdsex, 
//                                    $dceml, $nrdddres, $nrtelres, $nrdddcel, $nrtelcel, $nmlog, 
//                                    $nrlog, $nmbai, $nmcid, $cduf, $dtcnv, $auusualt);

        
          //C_cad_membros::getInstance()->del_membro_by_id(37);
        
//        $query = "delete cad_membros where idmbr = ". $idmbr ;
//        
//        echo $query;
        
    $qyery =      "INSERT INTO cad_membros ("
                . "`idmbr`,     `cdusumbr`, `dcsenmbr`, `nmmbr`,    `dtnsc`,    `cdsex`, "
                . "`dceml`,     `nrdddres`, `nrtelres`, `nrdddcel`, `nrtelcel`, "
                . "`nmlog`,     `nrlog`,    `nmbai`,    `nmcid`,    `cduf`,     `dtcnv`, "
                . "`auusualt`,  `auqtdalt`, `audatalt`) "
                . "VALUES ('" . $idmbr. "', '" . $cdusumbr. "', '" . $dcsenmbr. "', '" . $nmmbr.    "', '" . $dtnsc.    "', '" . $cdsex.    "', '" . 
                                $dceml. "', '" . $nrdddres. "', '" . $nrtelres. "', '" . $nrdddcel. "', '" . $nrtelcel. "', '" . $nmlog.    "', '" . 
                                $nrlog. "', '" . $nmbai.    "', '" . $nmcid.    "', '" . $cduf.     "', '" . $dtcnv.    "', '" . $auusualt. "', '" .  
                                1 . "', '". date("d/m/y H:i:s") ."')";
    
    echo "<br><br>Pronto--> "."$qyery";
    
