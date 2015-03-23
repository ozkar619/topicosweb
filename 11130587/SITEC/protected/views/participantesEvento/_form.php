<?php
/* @var $this ParticipantesEventoController */
/* @var $model ParticipantesEvento */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'participantes-evento-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_participante'); ?>
		<?php echo $form->textField($model,'id_participante',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'id_participante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_evento'); ?>
		<?php echo $form->textField($model,'id_evento',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'id_evento'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Save',array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->