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
  
 <?php

//criar a conexÃ£o com o banco

include "sql_t.i.php";



if(isset($_POST['done'])){   

    $endereco_ip = $_POST['endereco_ip'];
    $netbios = $_POST['netbios'];
    $sistema_operacional = $_POST['sistema_operacional'];
    $colaborador = $_POST['colaborador'];
    $departamento = $_POST['departamento'];
    $processador = $_POST['processador'];
    $memoria = $_POST['memoria'];
    $disco_rigido = $_POST['disco_rigido'];
    $tipo_equipamento = $_POST['tipo_equipamento'];

    if(empty($endereco_ip) || empty($netbios)|| empty($sistema_operacional) || empty($colaborador)|| empty($departamento)|| empty($processador)|| empty($memoria)|| empty($disco_rigido)|| empty($tipo_equipamento)){

        $erro = "Atenção, você deve preencher todos os campos";

    }else{        

       $sql = mysql_query("INSERT INTO `nomenclatura_rede`(`data_cadastro`,`endereco_ip`, `netbios`, `sistema_operacional`, `colaborador`,`departamento`,`processador`,`memoria`,`disco_rigido`,`tipo_equipamento`) VALUES (now(),'$endereco_ip ', '$netbios', '$sistema_operacional','$colaborador', '$departamento','$processador','$memoria','$disco_rigido','$tipo_equipamento')") or die(mysql_error());

            if($sql){

                $erro = "Dados cadastrados com sucesso!";

              } else{

                  $erro = "Não foi possivel cadastrar os dados";

              }

    }

}

?>
   
   
<font size=2>
<blockquote>
<form name="form1" action="cadastra_nomenclatura_rede.php" method="POST" style="padding-top:40px;">

<?php

if(isset($erro)){

    print '<div style="width:80%; background:red; color:Black; padding: 5px 0px 5px 0px; text-align:center; margin: 0 auto;">'.$erro.'</div>';

}

?>

<table border="0" >

<thead>

<tr>

<th colspan="2">.:: Cadastro dos Dados ::.</th>
</tr>

</thead>

<tbody>



<tr><td>Endereco IP:</td><td><input type="text" name="endereco_ip" value="" size=70/></td></tr>
<tr><td>Netbios:</td><td><input type="text" name="netbios"  value=""  class="campo" size=70/></td></tr>
<tr><td>Sistema Operacional:</td><td><input type="text" name="sistema_operacional" value=""  class="campo" size=70/></td></tr>
<tr><td>Colaborador:</td><td><input type="text" name="colaborador" value=""  class="campo"size=70 /></td></tr>
<tr><td>Departamento:</td><td><input type="text" name="departamento"  value=""  class="campo"size=70 /></td></tr>
<tr><td>Processador:</td><td><input type="text" name="processador"  value=""  class="campo"size=70 /></td></tr>
<tr><td>Memoria:</td><td><input type="text" name="memoria" value=""  class="campo"size=70 /></td></tr>
<tr><td>Disco:</td><td><input type="text" name="disco_rigido" value=""  class="campo"size=70 /></td></tr>
<tr><td>Tipo Equipamento:
<td>
	<select name="tipo_equipamento" class="campo" id="tipo_equipamento">
		<option>ESTACAO</option>
		<option>IMPRESSORA</option>
		<option>COLETOR</option>
		<option>SW</option>
		<option>VIRTUAL</option>
		<option>THINCLIENT</option>
		<option>RELOGIO</option>
		<option>NOTEBOOK</option>
		<option>NOBREAK</option>
		<option>BATERIAS</option>
		<option>CONTROLADOR</option>
		<option>SERVIDOR</option>
		<option>PABX</option>
		<option>NAS</option>
		<option>CATRACA</option>
		<option>DVR</option>
	</select>
</td>
<tr>


</select>
</td>
</tr>



<tr>
<td></td>
<td><input type="submit" value="Cadastrar" /><input type="hidden" name="done"  value="" /></td>
</tr>


</tbody>

</table>

</form>
</blockquote>
       <a href="lista_nomenclatura_rede.php">Voltar</a><br>

</body>
</html>
