<html>

<h1>EXCLUIR DADOS</h1>

</html>
<?php

if (isset($_POST['BTEnvia'])) {
 
 //Variaveis de POST, Alterar somente se necessário 
 //====================================================
 $codigo = $_POST['Código'];
 $nome = $_POST['Nome do Animal'];

 //====================================================
 $email_conteudo = "Código = $codigo \n";
 $email_conteudo .= "Nome do Animal = $nome \n";
 //==================================================== 

 //====================================================
} 
?>
 
 <form action="<? $PHP_SELF; ?>" method="POST"> 
 <p> 
 Digite o Código:<br /> 
 <input type="number" size="30" name="Código"> 
 </p>   

<p>Ou Tente excluir digitando o nome do animal</p>

 <p> 
 Nome do Animal:<br /> 
 <input type="text" size="30" name="Nome do Animal"> 
 </p>   

 <p>
          <input type="submit" name="BTEnvia" value="Confirmar"> 
   <input type="reset" name="BTApaga" value="Cancelar">
        </p>
