<html>

<h1>ATUALIZAR DADOS</h1>

</html>

<?php

if (isset($_POST['BTEnvia'])) {
 
 //Variaveis de POST, Alterar somente se necessário 
 //====================================================
 $codigo = $_POST['Código'];
 $nome = $_POST['Nome do Animal'];
 $raca = $_POST['Raça']; 
 $sexo= $_POST['Sexo'];
 $date= $_POST['Data de Vacinação'];
 //====================================================
 $email_conteudo = "Código = $codigo \n";
 $email_conteudo .= "Nome do Animal = $nome \n";
 $email_conteudo .= "Raça = $raca \n"; 
 $email_conteudo .= "Sexo = $sexo \n";
 $email_conteudo .= "Data de Vacinação = $dt_vac \n";  
 //==================================================== 
 if (mail ($email_destinatario, nl2br($email_conteudo), $email_headers)){ 
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
 Data de vacinação:<br /> 
 <input type="date" size="35" name="dt_vac"> 
 </p>   
 <p>
          <input type="submit" name="BTEnvia" value="Enviar"> 
   <input type="reset" name="BTApaga" value="Apagar">
        </p>