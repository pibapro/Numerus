<?php
session_start(); 
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true)) { 
    unset($_SESSION['login']); 
    unset($_SESSION['senha']); 
    header('location:index.php'); 
    } 
    $logado = $_SESSION['login'];


require_once("Includes/C_numerus.php");



$sis_info = C_numerus::getInstance()->get_info_sistema();    

$nome_sis    = $sis_info[0];
$versao_sis  = $sis_info[1];
$titulo_sis  = $sis_info[2];

$title   =  $nome_sis." - ".$titulo_sis." - ".$versao_sis

?>
<!DOCTYPE html>
<html>

<head>
  <!--<meta charset="latin1">-->
  <meta http-equiv="content-type" content="text/html;charset=latin1" />
  <title><?php echo"$title"; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
  <link href="projetogenesis.css" rel="stylesheet">
  <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
  <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="numerus_js.js"></script>

</head>

<body>
  <div class="container">
    <div class="row">
        <div class="col-md-12">
        
            <div class="panel panel-default">
                <div class="panel-body text-right">
                    <?php 
                    echo" Bem vindo <strong>$logado</strong>. ["."<a href='deslogar.php'>Sair</a>]";
                    ?>
                </div>
            </div>
            
        </div>
      
    </div>
    <div class="row">
      <div class="col-md-3">
        <div class="list-group">
          <a href="#CadastroMembros" data-toggle="tab" class="list-group-item" onclick="refresh()">
            Cadastro de membros
          </a>
          <a href="#DadosCorrespondencias" data-toggle="tab" class="list-group-item">Cadastro de classes</a>
          <a href="#" class="list-group-item">Cadastro de ministérios</a>
          <a href="#" class="list-group-item">Porta ac consectetur ac</a>
          <a href="#" class="list-group-item">Vestibulum at eros</a>
        </div>
      </div>
        
        
        <div class="col-md-9">
            <div class="tab-content">
                <div class="tab-pane active" id="CadastroMembros" style="border-style:solid;">
                    
                    <div class="panel panel-default">
                        <div class="panel-heading text-center "><h2>Cadastro de Membros</h2></div>
                        <div class="panel-body">
                            <form class="form-inline" role="form" action="#" method="post" name="form_localiza_membro">
                                  <div class="form-group">
                                    <label for="InputNomeCompleto">Nome:</label>
                                    <input class="form-control  genesis-field-nome" id="InputNomeCompleto" name="InputNomeCompleto" placeholder="Digite um nome para procurar membro. " type="text" maxlength="128"
                                    data-toggle="tooltip" data-placement="bottom" title="Informe o nome que deseja buscar.">
                                    <button type="submit" class="btn btn-primary">Buscar</button>
                                    <div class="btn btn-default" onclick="refresh()">Limpar busca</div>
                                  </div>
                            </form>
                        </div>
                    </div>

                    <?php 
                    
                    
                                     if   (isset($_POST["InputNomeCompleto"])){
                                         include "exibe_membro.php";
                                     }else{
                                         include "cadastro_1.php"; 
                                     }
                                            
                    
                    
                    
                    
                    
                    ?>                

                  </div>

                <div class="tab-pane" id="DadosCorrespondencias" style="border-style:solid;">
                  <h3>
                    cadastro de classes.
                  </h3>
                </div>


            </div>
        </div>
      </div>
    </div>
    
    <div class="row">
      
    </div>


  </div>
















</body>

</html>