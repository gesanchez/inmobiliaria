<?php
 session_start();
  include ("../enlaces/conexion.php");
 //$_SESSION['desde']=desde;
 //$_SESSION['hasta']=hasta;


?>

<html>

	<table width="1115" height="558" border="0" align="center">

  <tr>

    <td width="1115" height="249"> <div class="title">

  <h3><span class="Estilo3">Bienvenido :</span> <?php echo "<font color=\"#000000\">$usuario</font>";?>

	</div>



<style>

body {

background:transparent url('iconos/fotosistema1.jpg')no-repeat  center center fixed;

-webkit-background-size: cover;

-moz-background-size: cover;

-o-background-size: cover;

background-size: cover;

margin:0;

font-family: 'Ubuntu', sans-serif;

}

.title {

  background:#6E96E6;

  margin-top: -220px;

  border-bottom:2px solid #fff;

  border-top:2px solid #fff;

  text-align:center;

  opacity:0.7;

  width:20%;

  color:#fff;

}

.menu {

margin-top:3%;

background:#69FF69;

width:60px;

color:#fff;

border:2px solid #fff;

border-left:none;

border-radius:0 10px 10px 0;

}

.menu ul {

list-style:none;

padding:5px;

line-height:30px;

float:left;

background:#FF5411;

width:30%;

margin-top:0px;

border:2px solid #fff;

border-left:none;

border-radius:0 0 10px 0;

}

.menu p {

padding-left:5px;

}

.menu li:hover{

background:#FF7741;

padding:0 5px 0 10px;

cursor:pointer;

}

.show, .hide {

cursor:pointer;

}

</style>



<head>



	<link rel="shortcut icon" href="iconos/icono.ico" />



	<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />



	<title>Rango Precio</title>



</head>







<form id="form1" name="form1" method="GET" action="inmuebles.php">

  <br>

  <br>

  <br>

  <br>

<table width="400" height="177" border="3" align="center" cellpadding="0" cellspacing="0" bordercolor="#FF6600">

	<tr>
		<td width="120" height="41" bgcolor="#CCCCCC" align="center"><strong>Precio $ desde:</strong></td>
	    <td width="20" align="center" bordercolor="#00FFFF" bgcolor="#CCCCCC">
			<strong>
				<label>	
					<input size="15" type="text" name="desde" id="desde" placeholder="Precio desde" maxlength="8" style="text-align:center">
				</label>
			</strong>
		</td>

	</tr>


<tr>
		<td width="120" height="41" bgcolor="#CCCCCC" align="center"><strong>Precio $ hasta:</strong></td>
	    <td width="20" align="center" bordercolor="#00FFFF" bgcolor="#CCCCCC">
			<strong>
				<label>	
					<input size="15" type="text" name="hasta" id="hasta" placeholder="Precio hasta" maxlength="8" style="text-align:center">
				</label>
			</strong>
		</td>

	</tr>

<tr>

<td height="74" colspan="2" align="center" bgcolor="#CCCCCC"><strong>

<label></label>

</strong><br>

<input name="button" type="submit" class="Estilo1" id="button" value="Buscar" />

<br>

<img src="iconos/66.png" alt="ir atras" width="36" height="29" border="0" usemap="#Map" longdesc="/iconos/66.png"></td>

</tr>

</table>

</form>



<map name="Map"><area shape="rect" coords="-2,0,47,29" href="../menu.php">

</map></html>


