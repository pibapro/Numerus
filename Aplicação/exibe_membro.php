<?php
require_once("Includes/C_cad_membros.php");
?>
        <button class="btn btn-primary" data-toggle="modal" data-target="#Result_Busca_Membro"
        style="position:relative; top:8px;">Login</button>
    
    
	<div class="modal fade" id="Result_Busca_Membro" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-sm"">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="mySmallModalLabel">Login</h4>
				</div>
				<div class="modal-body">
					<form class="form-signin" role="form">
						<h2 class="form-signin-heading" align="center" style="font-family:'Bauhaus 93';">PodNew</h2>
							<input type="email" class="form-control" placeholder="Email" required="" autofocus="">
							<input type="password" class="form-control" placeholder="Senha" required="">
							<label class="checkbox">
							<input type="checkbox" value="remember-me">Mantenha-me conectado
							</label>
						<button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
        </div>


<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */




$result = C_cad_membros::getInstance()->get_membro_by_nome($_POST["InputNomeCompleto"]);
//$result = C_cad_membros::getInstance()->get_membro_by_membro_id(4);


//CAMPOS QUE APARECERÃO
$campos_selecionados = array('idmbr','nmmbr','dtnsc');



//CABEÇALHO
echo "<div class='tab-content table-responsive'>";
echo "<table class='table table-hover'>\n";


$finfo = $result->fetch_fields();


echo "<div class='tab-content table-responsive'>";
echo "<table class='table table-hover'>\n";

echo "<thead>\n<tr>\n";

foreach ($finfo as $coluna){

   if (in_array($coluna->name,$campos_selecionados )){

      echo "\t<th> $coluna->name </th>\n";
   
   }
}

echo "</tr>\n</thead>\n";

echo "<tbody>\n";


foreach ($finfo as $coluna){

   if (in_array($coluna->name,$campos_selecionados )){

          /* fetch object array */
          while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
             echo "<tr>";
             echo "<td> $row[idmbr] </td>";
             echo "<td> $row[nmmbr] </td>";
             echo "<td> $row[dtnsc] </td>";
             echo "</tr>";

             
/*echo "<pre>";
print_r($coluna);
echo "</pre>";*/

             //$aux = $coluna->name;

             //echo "$row[$aux] <br>";
          }



   }
}
			