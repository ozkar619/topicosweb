<?php
/* @var $this ArticuloController */
/* @var $model Articulo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'articulo-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),//NO TE OLVIDES DE ASIGNAR ESTO
)); ?>

<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>
<?php echo $form->errorSummary($model); ?>

<form>
	<div class="row">
        <?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>500,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'nombre'); ?>
    </div>
    <div class="row">
		<?php echo $form->labelEx($model,'resumen'); ?>
		<?php echo $form->textArea($model,'resumen',array('rows'=>6, 'cols'=>50,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'resumen'); ?>
  </div>

	<div class="row">
		<?php echo $form->labelEx($model,'abstrac'); ?>
		<?php echo $form->textArea($model,'abstrac',array('rows'=>6, 'cols'=>50,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'abstrac'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'introduccion'); ?>
		<?php echo $form->textArea($model,'introduccion',array('rows'=>6, 'cols'=>50,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'introduccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'metodologia'); ?>
		<?php echo $form->textArea($model,'metodologia',array('rows'=>6, 'cols'=>50,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'metodologia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contenido'); ?>
		<?php echo $form->textArea($model,'contenido',array('rows'=>6, 'cols'=>50,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'contenido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'archivo_pdf'); ?>
		<?php echo CHtml::activeFileField($model, 'archivo_pdf'); ?>
		<?php echo $form->error($model,'archivo_pdf'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_status'); ?>
		<?php //echo $form->textField($model,'id_statu'); 
		echo $form->dropDownList($model,'id_status',
			CHtml::listData($modelStatus,'id_status','status'),
			array('empty'=>'Selecciona un estatus...','class'=>'form-control')
		);
		?>
		<?php echo $form->error($model,'id_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'conclusiones'); ?>
		<?php echo $form->textArea($model,'conclusiones',array('rows'=>6, 'cols'=>50,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'conclusiones'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'agradecimientos'); ?>
		<?php echo $form->textArea($model,'agradecimientos',array('rows'=>6, 'cols'=>50,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'agradecimientos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'referencias'); ?>
		<?php echo $form->textArea($model,'referencias',array('rows'=>6, 'cols'=>50,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'referencias'); ?>
	</div>

	<div class="row buttons">
		<button class="btn btn-default" type="submit">Crear</button>
		<?php CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div>
</form><!-- form -->