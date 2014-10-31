<?php

require_once("Includes/C_cad_membros.php");


$result = C_cad_membros::getInstance()->get_membro_by_nome("DAN");

echo "<pre>";
print_r($result );
echo "</pre> <hr>";


$finfo = $result->fetch_fields();

echo "<pre>";
    foreach ($finfo as $val) {
        printf("Name:     %s\n", $val->name);
        printf("Table:    %s\n", $val->table);
        printf("max. Len: %d\n", $val->max_length);
        printf("Flags:    %d\n", $val->flags);
        printf("Type:     %d\n\n", $val->type);
    }
echo "</pre> <hr>";

while($row = $result->fetch_array(MYSQLI_ASSOC))
{

echo "<pre>";
print_r($row);
echo "</pre>";

}








?>


