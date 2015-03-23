<?php
/* @var $this TipoParticipanteController */
/* @var $data TipoParticipante */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tipo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_tipo), array('view', 'id'=>$data->id_tipo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('desc_tipo')); ?>:</b>
	<?php echo CHtml::encode($data->desc_tipo); ?>
	<br />


</div>