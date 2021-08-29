<?php

if (isset($_POST['BTEnvia'])) {
 
 //Variaveis de POST, Alterar somente se necessário 
 //====================================================
 $codigo = $_POST['Código'];
 $nome = $_POST['Nome do Animal'];
 $raca = $_POST['Raça']; 
 $sexo= $_POST['Sexo'];
 //====================================================
 $email_conteudo = "Código = $codigo \n";
 $email_conteudo .= "Nome do Animal = $nome \n";
 $email_conteudo .= "Raça = $raca \n"; 
 $email_conteudo .= "Sexo = $sexo \n"; 
 //==================================================== 
 if (mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers)){ 
 echo "</b> enviado com sucesso!</b>"; 
 } 
 else{ 
 echo "</b>Falha no envio de dados!</b>"; } 
 //====================================================
} 
?>
 
 <form action="<? $PHP_SELF; ?>" method="POST"> 
 <p> 
 Código:<br /> 
 <input type="number" size="30" name="Código"> 
 </p>   
 <p> 
 Nome do Animal:<br /> 
 <input type="text" size="30" name="Nome do Animal"> 
 </p>   
 <p> 
 Raça:<br /> 
 <input type="text" size="35" name="Raça"> 
 </p>   
 <p> 
 Sexo:<br /> 
 <input type="text" size="35" name="Sexo"> 
 </p>   
 <p>
          <input type="submit" name="BTEnvia" value="Enviar"> 
   <input type="reset" name="BTApaga" value="Apagar">
        </p>