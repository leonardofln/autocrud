<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>gerar autocrud</title>
	<link rel="stylesheet" type="text/css" href="/css/estilo.css">
	<script type="text/javascript" src="/js/jquery.js"></script>
	<script type="text/javascript">
	function passo2() {
		$("#passo2").attr("action", "passo1");
		$("#passo2").submit();
	}
	function passo3() {
		$("#passo2").submit();
	}
	</script>
</head>
<body>

<?php
$attributes = array('id'=>'passo2');
echo form_open('autocrud/passo3', $attributes);
?>

<?php echo form_fieldset('Campos'); ?>
<table>
	<?php
	foreach ($campos as $campo) {
	 	echo "<tr>\n";
		echo " <td><input type=\"checkbox\" checked=\"checked\"></td>\n";
		if ($campo->primary_key) {
			echo " <td>chave primária</td>\n";
		} else {
			echo " <td>" . form_input($campo->name) . "</td>\n";
		}
		echo " <td>" . $campo->name . "</td>\n";
		echo "</tr>\n";
	}
	?>
</table>
<?php echo form_fieldset_close(); ?>

<br>

<?php
$extra = 'onClick="passo2()"';
echo form_button('voltar', '<< voltar', $extra);

$extra = 'onClick="passo3()"';
echo form_button('avancar', 'avançar >>', $extra);
?>
<?php echo form_close(); ?>

</body>
</html>