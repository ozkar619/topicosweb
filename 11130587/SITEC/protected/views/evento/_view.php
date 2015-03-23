<?php
/* @var $this EventoController */
/* @var $data Evento */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_evento')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_evento), array('view', 'id'=>$data->id_evento)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('logo')); ?>:</b>
	<?php echo CHtml::encode($data->logo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('convocatoria')); ?>:</b>
	<?php echo CHtml::encode($data->convocatoria); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lugar')); ?>:</b>
	<?php echo CHtml::encode($data->lugar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('como_llegar')); ?>:</b>
	<?php echo CHtml::encode($data->como_llegar); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('programa_actividades')); ?>:</b>
	<?php echo CHtml::encode($data->programa_actividades); ?>
	<br />

	*/ ?>

</div>