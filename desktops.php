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
                                        
de 2014.   

<?php

include("seguranca.php"); // Inclui o arquivo com o sistema de segurança
protegePagina(); // Chama a função que protege a página
echo "Olá, " . $_SESSION['usuarioNome']." Seja bem vindo(a) Oque Deseja Fazer Hoje?";
?>

<blockquote>
<form name="form1" action="desktops.php" method="post">
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
<a href=/images/rede_servers.png target=_blank> VIZUALIZAR SERVIDORES</a>
<br>
<br>
</blockquote>

<blockquote>
<a href=/images/rede.png target=_blank> VIZUALIZAR REDE</a>
<br>
<br>
</blockquote>


<blockquote>
<a href=agenda_backup.php > AGENDA DE BACKUP</a>
<br>
<br>
</blockquote>
<p>
<a href="cadastra_nomenclatura_rede.php">Cadastrar Hosts</a><br></p>
<a href="nomenclatura_rede_update.php">Atualizar Hosts</a>





</font>

</p>



</font>

  
 <font size=1>  



   <?php 
   include "sql_t.i.php";//conexão com o banco de dados
   
   @mysql_select_db($db);//selecione o banco de dados
   
if(isset($_POST['done'])){   

    $colaborador_retorno = $_POST['colaborador_procura'];
    

           $sqltudo = mysql_query("select  * FROM nomenclatura_rede  where tipo_equipamento='NOTEBOOK' order by endereco_ip ")  or die(mysql_error());
           $colunas = mysql_num_rows($sqltudo);
	print 'Encontrados ';
	print  $colunas ;
	print ',Hosts ';
	
	   print'<br>';	
	
	   print'<br>';	
	   	
                             print'<table border="1"   bordercolor="#00BFFF" >';
	   print'<tr>';
	    print'<td><b>ID</td>';
	   print'<td><b>IP</td>';
	   print'<td><b>NETBIOS</td>';
	   print'<td><b>S.O</td>';
	   print'<td><b>COLABORADOR</td>';
	   print'<td><b>DEPARTAMENTO</td>';
	   print'<td><b>PROCESSADOR</td>';
	   print'<td><b>MEMORIA</td>';
	   print'<td><b>DISCO</td>';
	   print'<td><b>DETALHES</td>';
	   print'</tr></b>';




         for($j = 0; $j < $colunas; $j++){/*caso no mesmo dia tenha mais eventos continua imprimindo */
           $id = @mysql_result($sqltudo, $j, "id");/*pegando os valores do banco referente ao evento*/
           $endereco_ip = @mysql_result($sqltudo, $j, "endereco_ip");
           $netbios = @mysql_result($sqltudo, $j, "netbios");
           $sistema_operacional = @mysql_result($sqltudo, $j, "sistema_operacional");
           $colaborador = @mysql_result($sqltudo, $j, "colaborador");
           $departamento = @mysql_result($sqltudo, $j, "departamento");
           $processador = @mysql_result($sqltudo, $j, "processador");
           $memoria = @mysql_result($sqltudo, $j, "memoria");
           $disco_rigido = @mysql_result($sqltudo, $j, "disco_rigido");
		   $tipo_equipamento = @mysql_result($sqltudo, $j, "tipo_equipamento");            
	       $detalhes = $netbios;	
 if ($tipo_equipamento == "ESTACAO") {
		$contador_estacao++;
           }

	   if ($tipo_equipamento == "NOTEBOOK") {
		$contador_notebook++;
           }

	   if ($tipo_equipamento == "AP") {
		$contador_ap++;
           }

	   if ($tipo_equipamento == "IMPRESSORA") {
		$contador_impressora++;
           }
	   
          if ($tipo_equipamento == "SERVIDOR") {
		$contador_servidor++;
		  }
		
          if ($tipo_equipamento == "NAS") {
		$contador_nas++;
		  }
		
          if ($tipo_equipamento == "SWITCH") {
		$contador_switch++;
           }
		   
		    if ($tipo_equipamento == "COLETOR") {
		$contador_coletor++;
           }
		   if ($tipo_equipamento == "THINCLIENT") {
		$contador_thinclient++;
           }
		    if ($tipo_equipamento == "VIRTUAL") {
		$contador_virtual++;
           }





	   /*print '<table border=1>';/*monta a tabela de eventos*/

	    print'<tr>';
	   print '<td>'.$id.'	</td>';
	   print '<td>'.$endereco_ip.'</td>';
	   print '<td>'.$netbios.'</td>';
	   print '<td>'.$sistema_operacional.'</td>';
	   print '<td>'.$colaborador.'</td>';
	   print '<td>'.$departamento.'</td>';
	   print '<td>'.$processador.'</td>';
	   print '<td>'.$memoria.'</td>';
	   print '<td>'.$disco_rigido.'</td>';
	   print '<td><a href="file:\\192.168.0.248\costasul$\inventario_rede\\'.$netbios.'.html">DETALHES</a>';
	   print '</tr>';	
           }
}
	   print'</table>';
print '<br>';
print '<hr>';
print '<blockquote>';
print '<font size=3 face=arial>';
echo 'EQUIPAMENTOS CADASTRADOS: ';
print '<ul>';

print '<li>';
echo 'Impressoras: ';
echo $contador_impressora;
print '</li>';
print '<br>';

print '<li>';
echo 'Notebooks: ';
echo $contador_notebook;
print '</li>';
print '<br>';

print '<li>';
echo 'Estações: ';
echo $contador_estacao;
print '</li>';
print '<br>';

print '<li>';
echo 'Acess Points: ';
echo $contador_ap;
print '</li>';
print '<br>';

print '<li>';
echo 'Thin Clients: ';
echo $contador_thinclient;
print '</li>';
print '<br>';


print '<li>';
echo 'Switch: ';
echo $contador_switch;
print '</li>';
print '<br>';

print '<li>';
echo 'Servidor NAS: ';
echo $contador_nas;
print '</li>';
print '<br>';

print '<li>';
echo 'Coletores: ';
echo $contador_coletor;
print '</li>';
print '<br>';


print '<li>';
echo 'Servidores Fisicos: ';
echo $contador_servidor;
print '</li>';
print '<br>';

print '<li>';
echo 'Servidores Virtuais: ';
echo $contador_virtual;
print '</li>';
print '<br>';
print '<ul>';
   
print '</blockquote>';	


?>

</body>
</html>
