<?php
/* @var $this UsuariosController */
/* @var $data Usuarios */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_usuario')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_usuario), array('view', 'id'=>$data->id_usuario)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nick_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->nick_usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pass_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->pass_usuario); ?>
	<br />


</div>