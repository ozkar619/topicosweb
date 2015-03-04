<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_usuario'); ?>
		<?php echo $form->textField($model,'id_usuario',array('class'=>'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nick_usuario'); ?>
		<?php echo $form->textField($model,'nick_usuario',array('size'=>60,'maxlength'=>128,'class'=>'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pass_usuario'); ?>
		<?php echo $form->textField($model,'pass_usuario',array('size'=>60,'maxlength'=>128,'class'=>'form-control')); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->