<?php
/* @var $this ArticuloAutorController */
/* @var $model ArticuloAutor */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'articulo-autor-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'id_articulo'); ?>
		<?php echo $form->textField($model,'id_articulo',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'id_articulo'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'id_autor'); ?>
		<?php echo $form->textField($model,'id_autor',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'id_autor'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Save', array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->