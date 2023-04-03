<?php
 ini_set('default_charset','ISO-8859-1');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;/>
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    

    <script type="text/javascript" src="script.js"></script>

    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
    <!--[if IE 6]><link rel="stylesheet" href="style.ie6.css" type="text/css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" href="style.ie7.css" type="text/css" media="screen" /><![endif]-->
</head>
<body onLoad="abrePop()">
    <div id="art-page-background-gradient"></div>
    <div id="art-main">
        <div class="art-Sheet">
                
        
                                       
                        <h1 id="name-text" class="art-Logo-name"><a href="#">NOMENCLATURA DE REDE</a></h1>
                        
                        <div id="slogan-text" class="art-Logo-text">Tecnologia da Informação</div>
                        
                    </div>
                </div>
                <div class="art-contentLayout">                    
                                              
                        
                                                                              
                                         
                                        </h2>
                                     Hoje, 
                                        

<script language=javascript>
function janelaSecundaria (URL){
   window.open(URL,"janela1","width=1000,height=600,scrollbars=YES")
}


</script> 
                                        
                                        <script Language="JavaScript">
<!--
mydate = new Date();
myday = mydate.getDay();
mymonth = mydate.getMonth();
myweekday= mydate.getDate();
weekday= myweekday; 

if(myday == 0)
day = " Domingo, " 

else if(myday == 1)
day = " Segunda - Feira, " 

else if(myday == 2)
day = " Terça - Feira, " 

else if(myday == 3)
day = " Quarta - Feira, " 

else if(myday == 4)
day = " Quinta - Feira, " 

else if(myday == 5)
day = " Sexta - Feira, " 

else if(myday == 6)
day = " Sábado, " 

if(mymonth == 0)
month = "Janeiro " 

else if(mymonth ==1)
month = "Fevereiro " 

else if(mymonth ==2)
month = "Março " 

else if(mymonth ==3)
month = "Abril " 

else if(mymonth ==4)
month = "Maio " 

else if(mymonth ==5)
month = "Junho " 

else if(mymonth ==6)
month = "Julho " 

else if(mymonth ==7)
month = "Agosto " 

else if(mymonth ==8)
month = "Setembro " 

else if(mymonth ==9)
month = "Outubro " 

else if(mymonth ==10)
month = "Novembro " 

else if(mymonth ==11)
month = "Dezembro " 

document.write("<font face=arial, size=2>"+ day);
document.write(myweekday+" de "+month+ "</font>");
// -->

if(navigator.appName=='Microsoft Internet Explorer')
{
alert('NAVEGADOR NÃO INDICADO!\nPor favor use o FireFox');
location.href="firefox.html";
}
                </script>
                                        


<?php

include("seguranca.php"); // Inclui o arquivo com o sistema de segurança
protegePagina(); // Chama a função que protege a página
echo "Olá, " . $_SESSION['usuarioNome']." Seja bem vindo(a) Oque Deseja Fazer Hoje?";
?>

<blockquote>
<form name="form1" action="nomenclatura_rede_like.php" method="post">
<font color=red>
<thead>
<td>Pesquisar Por Nome?:
<br>
<input type="text"  name="colaborador_procura" class="campo"/></td></tr>
<tr>
<td></td>
<td><input type="submit" value="Pesquisar" /><input type="hidden" name="done"  value="" /></td>
</tr>
</tbody>
</table>
</form>
</blockquote>

<blockquote>
<a href=/images/rede_servers.png> ::VIZUALIZAR SERVIDORES::</a>
<br>
<br>
</blockquote>

<li>
<ul> 
<a href="cadastra_nomenclatura_rede.php">Cadastrar Hosts</a><br>
</ul>
<ul>
 <a href="nomenclatura_rede_update.php">Atualizar Hosts</a>
</ul>
</li>



</font>

</p>



</font>

  
 <font size=1>  
  <form name="form1" action="nomenclatura_rede_update.php" method="POST">

<table border=1 color=red>
<tr>

<td>Qual ID para Atualizar?:</td>
</font>

<td><input type="text" name="id_update" size=2  class="campo"/></td>

<td><input type="submit" value="Pesquisar" /><input type="hidden" name="done"  value="" /></td>

</table>

</form>


   <?php 
   include "sql_t.i.php";//conexão com o banco de dados
   
   @mysql_select_db($db);//selecione o banco de dados
   
if(isset($_POST['done'])){   

    $id_retorno = $_POST['id_update'];
    

           $sqltudo = mysql_query("select  * FROM nomenclatura_rede  where id= $id_retorno ")  or die(mysql_error());
           $colunas = mysql_num_rows($sqltudo);
	print 'Encontrados ';
	print  $colunas ;
	print ',Hosts ';
	
	   print'<br>';	
	
	   print'<br>';	
	   	
         


         for($j = 0; $j < $colunas; $j++){/*caso no mesmo dia tenha mais eventos continua imprimindo */
           $id = @mysql_result($sqltudo, $j, "id");/*pegando os valores do banco referente ao evento*/
           $endereco_ip = @mysql_result($sqltudo, $j, "endereco_ip");
           $netbios = @mysql_result($sqltudo, $j, "netbios");
           $sistema_operacional = @mysql_result($sqltudo, $j, "sistema_operacional");
           $so_original = @mysql_result($sqltudo, $j, "so_original");
           $colaborador = @mysql_result($sqltudo, $j, "colaborador");
           $departamento = @mysql_result($sqltudo, $j, "departamento");
           $processador = @mysql_result($sqltudo, $j, "processador");
           $memoria = @mysql_result($sqltudo, $j, "memoria");
           $disco_rigido = @mysql_result($sqltudo, $j, "disco_rigido");
           $observacao = @mysql_result($sqltudo, $j, "observacao");
           $tipo_equipamento = @mysql_result($sqltudo, $j, "tipo_equipamento");

	  

           }
}
	   print'</table>';

?>
<form name="form2" action="atualiza_nomenclatura_rede.php" method="POST">
<table border=1 border color=red gbcolor=blue>
<tr><td>ID:</td><td><input type="hidden" enable="false" name="id" value="<?php echo $id; ?>" size=6/><?php echo $id; ?></td></tr>
<tr><td>Endereco IP:</td><td><input type="text" name="endereco_ip" value="<?php echo $endereco_ip; ?>" size=20/></td></tr>
<tr><td>Netbios:</td><td><input type="text" name="netbios"  value="<?php echo $netbios; ?>"  class="campo" size=20/></td></tr>
<tr><td>S.O.I</td><td><input type="text" name="sistema_operacional" value="<?php echo $sistema_operacional; ?>"  class="campo" size=20/></td></tr>
<tr><td>S.O.O:</td><td><input type="text" name="so_original" value="<?php echo $so_original; ?>"  class="campo"size=20 /></td></tr>
<tr><td>Colaborador:</td><td><input type="text" name="colaborador" value="<?php echo $colaborador; ?>"  class="campo"size=20 /></td></tr>
<tr><td>Departamento:</td><td><input type="text" name="departamento"  value="<?php echo $departamento; ?>"  class="campo"size=20 /></td></tr>
<tr><td>Processador:</td><td><input type="text" name="processador"  value="<?php echo $processador; ?>"  class="campo"size=20 /></td></tr>
<tr><td>Memoria:</td><td><input type="text" name="memoria" value="<?php echo $memoria; ?>"  class="campo"size=20 /></td></tr>
<tr><td>Disco:</td><td><input type="text" name="disco_rigido" value="<?php echo $disco_rigido; ?>"  class="campo"size=20 /></td></tr>
<tr><td>Observações:</td><td><input type="text" name="observacao" value="<?php echo $observacao; ?>"  class="campo"size=100 /></td></tr>


<tr><td>Tipo:</td><td><input type="text" name="tipo_equipamento" value="<?php echo $tipo_equipamento; ?>"  class="campo"size=100 /></td></tr>

</table>
<input type="submit" value="Atualizar" /><input type="hidden" name="done"  value="" />
</form>


       <a href="lista_nomenclatura_rede.php">Voltar...</a>  
 
</body>
</html>
