<?php
/* @var $this ParticipantesEventoController */
/* @var $data ParticipantesEvento */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_evento')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_evento), array('view', 'id'=>$data->id_evento)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_participante')); ?>:</b>
	<?php echo CHtml::encode($data->id_participante); ?>
	<br />


</div>