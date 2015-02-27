<?php
/* @var $this RevistaController */
/* @var $model Revista */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_revista'); ?>
		<?php echo $form->textField($model,'id_revista',array('class'=>'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>500, 'class'=>'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'portada'); ?>
		<?php echo $form->textField($model,'portada',array('size'=>60,'maxlength'=>100, 'class'=>'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha',array('class'=>'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'volumen'); ?>
		<?php echo $form->textField($model,'volumen',array('size'=>45,'maxlength'=>45, 'class'=>'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'titulo'); ?>
		<?php echo $form->textField($model,'titulo',array('size'=>60,'maxlength'=>200, 'class'=>'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'subtitulo'); ?>
		<?php echo $form->textField($model,'subtitulo',array('size'=>60,'maxlength'=>200, 'class'=>'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'numero'); ?>
		<?php echo $form->textField($model,'numero',array('class'=>'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'clave'); ?>
		<?php echo $form->textField($model,'clave',array('size'=>45,'maxlength'=>45, 'class'=>'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'directorio'); ?>
		<?php echo $form->textArea($model,'directorio',array('rows'=>6, 'cols'=>50, 'class'=>'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'editorial'); ?>
		<?php echo $form->textArea($model,'editorial',array('rows'=>6, 'cols'=>50, 'class'=>'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_status'); ?>
		<?php echo $form->textField($model,'id_status',array('class'=>'form-control')); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->