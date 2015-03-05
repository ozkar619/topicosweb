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

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

<<<<<<< HEAD
	<div class="form-group">
=======
	<div class="row">
>>>>>>> 8fac4e8427c70af79aedd102932bbe52dccb1688
		<?php echo $form->labelEx($model,'id_articulo'); ?>
		<?php echo $form->textField($model,'id_articulo'); ?>
		<?php echo $form->error($model,'id_articulo'); ?>
	</div>

<<<<<<< HEAD
	<div class="form-group">
=======
	<div class="row">
>>>>>>> 8fac4e8427c70af79aedd102932bbe52dccb1688
		<?php echo $form->labelEx($model,'id_autor'); ?>
		<?php echo $form->textField($model,'id_autor'); ?>
		<?php echo $form->error($model,'id_autor'); ?>
	</div>

<<<<<<< HEAD
	<div class="form-group buttons">
=======
	<div class="row buttons">
>>>>>>> 8fac4e8427c70af79aedd102932bbe52dccb1688
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->