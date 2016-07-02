<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>gerar autocrud</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	</style>
</head>
<body>

<fieldset>
	<legend>Entidade</legend>
	<table>
		<tr>
		 <td>Tabela:</td>
		 <td>
			 <select>
			 <?php
			 foreach ($tabelas as $tabela) {
			 	echo "<option value='$tabela'>$tabela</option>\n";
			 }
			 ?>
			 </select>
		 </td>
		</tr>
		<tr>
		 <td>Nome singular:</td><td><input type="text"></td>
		</tr>
		<tr>
		 <td>Nome plural:</td><td><input type="text"></td>
		</tr>
	</table>
</fieldset>

<br>

<input type="button" name="avancar" value="avançar >>">

</body>
</html>