<?php
/* @var $this IndiceArticuloController */
/* @var $model IndiceArticulo */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_indice_articulo'); ?>
		<?php echo $form->textField($model,'id_indice_articulo',array('class'=>'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_indice'); ?>
		<?php echo $form->textField($model,'id_indice',array('class'=>'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'numero'); ?>
		<?php echo $form->textField($model,'numero',array('class'=>'form-control')); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->