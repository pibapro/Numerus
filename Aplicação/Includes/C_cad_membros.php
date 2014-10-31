<?php

/* ARQUIVO COM A CONFIGURAÇÃO DE ACESSO AO BANCO DE DADOS. DEVERÁ ESTAR
   PRESENTE EM TODAS AS CLASSES QUE REPRESENTAR UMA TABELA NO BANCO DE DADOS.
*/
require_once("Includes/db.php");

class C_cad_membros extends C_config_db {


    // single instance of self shared among all instances
    private static $instance = null;
    
    //This method must be static, and must return an instance of the object if the object
    //does not already exist.
    public static function getInstance() {
      if (!self::$instance instanceof self) {
        self::$instance = new self;
      }
      return self::$instance;
    }

    // The clone and wakeup methods prevents external instantiation of copies of the Singleton class,
    // thus eliminating the possibility of duplicate objects.
    public function __clone() {
      trigger_error('Clone is not allowed.', E_USER_ERROR);
    }
    public function __wakeup() {
      trigger_error('Deserializing is not allowed.', E_USER_ERROR);
    }

    // private constructor
    private function __construct() {
    parent::__construct($this->dbHost, $this->user, $this->pass, $this->dbName);
    if (mysqli_connect_error()) {
        exit('Connect Error (' . mysqli_connect_errno() . ') '
                . mysqli_connect_error());
    }
    parent::set_charset('utf-8');

}
   
    
    //Personalizar daqui pra baixo - Danielson
    public function get_membro_id_by_name($cdusumbr) {

        $cdusumbr = $this->real_escape_string($cdusumbr);

        $membro = $this->query("SELECT idmbr FROM cad_membros WHERE cdusumbr = '"

                . $cdusumbr . "'");
        if ($membro->num_rows > 0){
            $row = $membro->fetch_row();
            return $row[0];
        } else{
            return null;
        }
    }

    public function get_membro_by_membro_id($idmbr) {
        return $this->query("SELECT idmbr, nmmbr, dtnsc FROM cad_membros WHERE idmbr=" . $idmbr);
    }
    
    public function get_membro_by_nome($nmmbr) {
        $nmmbr      = $this->real_escape_string($nmmbr);
        return $this->query("SELECT * FROM cad_membros WHERE nmmbr like '%" . $nmmbr. "%'");
        
    }
    
    public function del_membro_by_id($idmbr) {
        $this->query("delete from cad_membros where idmbr = ". $idmbr);
        
        //Exibição de mensagem de erro
        if ($this->errno !== 0){
            
            echo "Erro ao excluir: [". $this->errno . "] - ". $this->error;        
        
        }else{
            echo "Exclusão realizada com sucesso.";
        }
        
        $this->close(); //retorna true em caso de sucesso ao fechar a conexão.
        
    }
    
    public function create_membro ( $idmbr, $cdusumbr, $dcsenmbr, $nmmbr, $dtnsc, $cdsex, 
                                    $dceml, $nrdddres, $nrtelres, $nrdddcel, $nrtelcel, $nmlog, 
                                    $nrlog, $nmbai, $nmcid, $cduf, $dtcnv, $auusualt)
    {
        
        $idmbr      = $this->real_escape_string($idmbr);
        $cdusumbr   = $this->real_escape_string($cdusumbr);
        $dcsenmbr   = $this->real_escape_string($dcsenmbr);
        $nmmbr      = $this->real_escape_string($nmmbr);
        $dtnsc      = $this->real_escape_string($dtnsc);
        $cdsex      = $this->real_escape_string($cdsex);
        $dceml      = $this->real_escape_string($dceml);
        $nrdddres   = $this->real_escape_string($nrdddres);
        $nrtelres   = $this->real_escape_string($nrtelres);
        $nrdddcel   = $this->real_escape_string($nrdddcel);
        $nrtelcel   = $this->real_escape_string($nrtelcel);
        $nmlog      = $this->real_escape_string($nmlog);
        $nrlog      = $this->real_escape_string($nrlog);
        $nmbai      = $this->real_escape_string($nmbai);
        $nmcid      = $this->real_escape_string($nmcid);
        $cduf       = $this->real_escape_string($cduf);
        $dtcnv      = $this->real_escape_string($dtcnv);
        $auusualt   = $this->real_escape_string($auusualt);
        
        
        $this->query(  strtoupper(   
                          "INSERT INTO cad_membros ("
                        . "`idmbr`,     `cdusumbr`, `dcsenmbr`, `nmmbr`,    `dtnsc`,    `cdsex`, "
                        . "`dceml`,     `nrdddres`, `nrtelres`, `nrdddcel`, `nrtelcel`, "
                        . "`nmlog`,     `nrlog`,    `nmbai`,    `nmcid`,    `cdufs`,     `dtcnv`, "
                        . "`auusualt`,  `auqtdalt`, `audatalt`) "
                        . "VALUES ('" . $idmbr.    "', '" . $cdusumbr. "', '" . $dcsenmbr. "', '" . $nmmbr.    "', '" . $dtnsc.    "', '" . $cdsex.    "', '" . 
                                        $dceml.    "', '" . $nrdddres. "', '" . $nrtelres. "', '" . $nrdddcel. "', '" . $nrtelcel. "', '" . $nmlog.    "', '" . 
                                        $nrlog.    "', '" . $nmbai.    "', '" . $nmcid.    "', '" . $cduf.     "', '" . $dtcnv.    "', '" . 
                                        $auusualt. "', '" . 1 .        "', '" . date("d/m/y H:i:s") ."')"));
        
        //Exibição de mensagem de erro
        if ($this->errno !== 0){
            
            echo "Erro ao incluir: [". $this->errno . "] - ". $this->error;        
        
        }else{
            echo "Inclusão realizada com sucesso.";
        }

        $this->close(); //retorna true em caso de sucesso ao fechar a conexão.
    }
    
    public function autentica_login($cdusumbr, $dcsenmbr) {

        $result = $this->query("SELECT nmmbr FROM `cad_membros` where (dceml = '". $cdusumbr ."') or (cdusumbr = '". $cdusumbr ."') and dcsenmbr = '".$dcsenmbr."'");
        
        if ($result->num_rows > 0){
            return TRUE;
        } else{
            return FALSE;
        }
    }
    
}