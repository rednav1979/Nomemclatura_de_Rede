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
   
   ########################################
   #                                                                                    
   #            Calendário de Eventos PHP 5 e MySQL                     
   #            Documento: Agenda de Eventos Dinâmica           
   #            Autor: Gaspar Teixeira                                  
   #            E-mail: gaspar.teixeira@gmail.com                       
   #            Data: 14/11/2008                                                
   #            Direito de Uso: Livre                                           
   #            Declaração: O autor não se responsabiliza               
   #            pelo utilização deste calendário!                                       
   #                                                                                            
   ########################################
   
   ?>
<?php

include("seguranca.php"); // Inclui o arquivo com o sistema de segurança
protegePagina(); // Chama a função que protege a página
echo "Olá, " . $_SESSION['usuarioNome']." Seja bem vindo(a) Oque Deseja Fazer Hoje?";
?>
   
  

<font size=1><br>

<hr>



   <?php 
   include "sql_t.i.php";//conexão com o banco de dados
   
   @mysql_select_db($db);//selecione o banco de dados
   
if(isset($_POST['done'])){   

    $id_retorno = $_POST['id'];
    $endereco_ip_retorno = $_POST['endereco_ip'];
    $netbios_retorno = $_POST['netbios'];
    $sistema_operacional_retorno = $_POST['sistema_operacional'];
    $sistema_original_retorno = $_POST['so_original'];
    
    $colaborador_retorno = $_POST['colaborador'];
    $departamento_retorno = $_POST['departamento'];
    $processador_retorno = $_POST['processador'];
    $memoria_retorno = $_POST['memoria'];
    $disco_rigido_retorno = $_POST['disco_rigido'];
    $observacao_retorno = $_POST['observacao'];
    $tipo_equipamento_retorno = $_POST['tipo_equipamento'];
	
           $sql_update = mysql_query("update `nomenclatura_rede` set endereco_ip='$endereco_ip_retorno',netbios='$netbios_retorno',sistema_operacional='$sistema_operacional_retorno',colaborador='$colaborador_retorno',departamento='$departamento_retorno',processador='$processador_retorno',memoria='$memoria_retorno',disco_rigido='$disco_rigido_retorno',observacao='$observacao_retorno' ,tipo_equipamento='$tipo_equipamento_retorno',so_original='$sistema_original_retorno' where id = '$id_retorno'") or die(mysql_error()); 

           $sqltudo = mysql_query("select  * FROM nomenclatura_rede  where id= '$id_retorno'")  or die(mysql_error());
           $colunas = mysql_num_rows($sqltudo);
	print 'Encontrados ';
	print  $colunas ;
	print ',Host(s) ';
	
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
	   print'<td><b>OBSERVACAO</td>';
	   print'<td><b>TIPO EQUIPAMENTO</td>';

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
           $observacao = @mysql_result($sqltudo, $j, "observacao");
           $tipo_equipamento = @mysql_result($sqltudo, $j, "tipo_equipamento");






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
	   print '<td>'.$observacao.'</td>';
	   print '<td>'.$tipo_equipamento.'</td>';
	   print '</tr>';	
           }
}
	   print'</table>';

	


?>
       <a href="nomenclatura_rede_update.php">Voltar...</a>   
   </body>
   </html>


</body>
</html>
