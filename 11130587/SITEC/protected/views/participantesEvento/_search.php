<?php
/* @var $this ParticipantesEventoController */
/* @var $model ParticipantesEvento */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_participante'); ?>
		<?php echo $form->textField($model,'id_participante',array('class'=>'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_evento'); ?>
		<?php echo $form->textField($model,'id_evento',array('class'=>'form-control')); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->