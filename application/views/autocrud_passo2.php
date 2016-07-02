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
	<legend>Campos</legend>
	<table>
		<?php
		foreach ($campos as $campo) {
		 	echo "<tr>\n";
			echo " <td><input type=\"checkbox\" checked=\"checked\"></td>\n";
			if ($campo->primary_key) {
				echo " <td>chave primária</td>\n";
			} else {
				echo " <td><input type=\"text\"></td>\n";
			}
			echo " <td>" . $campo->name . "</td>\n";
			echo "</tr>\n";
		}
		?>
		
	</table>
</fieldset>

<br>

<input type="button" name="voltar" value="<< voltar">
<input type="button" name="avancar" value="avançar >>">

</body>
</html>