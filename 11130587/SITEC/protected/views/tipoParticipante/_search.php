<?php
/* @var $this TipoParticipanteController */
/* @var $model TipoParticipante */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_tipo'); ?>
		<?php echo $form->textField($model,'id_tipo',array('class'=>'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'desc_tipo'); ?>
		<?php echo $form->textArea($model,'desc_tipo',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->