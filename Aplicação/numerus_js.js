/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


    function validasenha() {
//        if(document.form.senha.value!==document.form.confirmasenha.value)
//        { alert ("As Senhas digitadas não combinam. Tente novamente."); return false;}
//        return true;
        
        if(document.form_cad_membro.InputNovSenha.value !== document.form_cad_membro.InputConfSenha.value)
        { 
            alert ("As Senhas digitadas não combinam. Tente novamente."); 

            return false;
        }
        return true;
    }
  

function refresh(){
    window.location.reload();
}