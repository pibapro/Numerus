<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once("Includes/db.php");




class C_numerus extends C_config_db{
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


    public function get_info_sistema() {

        $result = $this->query("SELECT * FROM `numerus`");
        
        if ($result->num_rows > 0){
            $row = $result->fetch_row();
            return $row;
        } else
            return null;
    }

}
