<?php
/* @var $this RevistaController */
/* @var $model Revista */
/* @var $form CActiveForm */
?>
<script type="text/javascript">
	
$('.fileinput').fileinput();	
</script>


<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'revista-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group">

		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>500,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="form-group">

	<?php echo $form->labelEx($model,'portada'); ?>
	<div class="fileinput fileinput-new" data-provides="fileinput">
  	<div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
  	</div>
  	<div>
    <span class="btn btn-default btn-file">
    <span class="fileinput-new">Seleccionar portada</span><span class="fileinput-exists">Change</span>
    <input type="file" name="..."></span>
    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remover</a>
  </div>
</div>
</div>
	






	<div class="form-group">

		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php 
		echo $this->widget('zii.widgets.jui.CJuiDatePicker',
			array(
				'model'=>$model,
				'attribute'=>'fecha',
				'language'=>'es',
				'options'=>array( ),
				'htmlOptions'=>array(
				'class'=>'form-control')
				),true);
		?>

	</div>

	<div class="form-group">

		<?php echo $form->labelEx($model,'volumen'); ?>
		<?php echo $form->textField($model,'volumen',array('size'=>45,'maxlength'=>45,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'volumen'); ?>
	</div>

	<div class="form-group">

		<?php echo $form->labelEx($model,'titulo'); ?>
		<?php echo $form->textField($model,'titulo',array('size'=>60,'maxlength'=>200,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'titulo'); ?>
	</div>

	<div class="form-group">

		<?php echo $form->labelEx($model,'subtitulo'); ?>
		<?php echo $form->textField($model,'subtitulo',array('size'=>60,'maxlength'=>200,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'subtitulo'); ?>
	</div>

	<div class="form-group">

		<?php echo $form->labelEx($model,'numero'); ?>
		<?php echo $form->textField($model,'numero'); ?>
		<?php echo $form->error($model,'numero'); ?>
	</div>

	<div class="form-group">

		<?php echo $form->labelEx($model,'clave'); ?>
		<?php echo $form->textField($model,'clave',array('size'=>45,'maxlength'=>45,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'clave'); ?>
	</div>

	<div class="form-group">

		<?php echo $form->labelEx($model,'directorio'); ?>
		<?php echo $form->textArea($model,'directorio',array('rows'=>6, 'cols'=>50, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'directorio'); ?>
	</div>

	<div class="form-group">

		<?php echo $form->labelEx($model,'editorial'); ?>
		<?php echo $form->textArea($model,'editorial',array('rows'=>6, 'cols'=>50, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'editorial'); ?>
	</div>


	<div class="form-group">

		<?php echo $form->labelEx($model,'id_status'); ?>
		<?php //echo $form->textField($model,'id_status',array('class'=>'form-control'));
		
		echo  $form ->dropDownList($model,'id_status',
			CHtml::listData($modelStatus,'id_status','status'),
				array('empty'=>'Selecciona un estatus...','class'=>'form-control')
				);?>
		
		
	</div>

	<div class="form-group buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->