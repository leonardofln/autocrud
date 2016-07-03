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
		$("#passo1").submit();
	}
	</script>
</head>
<body>

<?php
$attributes = array('id'=>'passo1');
echo form_open('autocrud/passo2', $attributes);
?>

<?php echo form_fieldset('Entidade'); ?>
<table>
	<tr>
	 <td>Tabela:</td>
	 <td>
	 	<?php
	 	$extra = array('id'=>'tabela');
	 	echo form_dropdown('tabela', $tabelas, null, $extra);
	 	?>
	 </td>
	</tr>
	<tr>
	 <td>Nome singular:</td>
	 <td><?php echo form_input('nm_singular'); ?></td>
	</tr>
	<tr>
	 <td>Nome plural:</td>
	 <td><?php echo form_input('nm_plural'); ?></td>
	</tr>
</table>
<?php echo form_fieldset_close(); ?>

<br>

<?php
$extra = 'onClick="passo2()"';
echo form_button('avancar', 'avançar >>', $extra);
?>
<?php echo form_close(); ?>

</body>
</html>