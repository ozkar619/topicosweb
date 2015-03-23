<?php
/* @var $this ParticipanteController */
/* @var $data Participante */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idparticipante')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idparticipante), array('view', 'id'=>$data->idparticipante)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idtipo')); ?>:</b>
	<?php echo CHtml::encode($data->idtipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono')); ?>:</b>
	<?php echo CHtml::encode($data->telefono); ?>
	<br />


</div>