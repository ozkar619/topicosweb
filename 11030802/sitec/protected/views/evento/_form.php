<?php
/* @var $this EventoController */
/* @var $model Evento */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'evento-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'logo'); ?>
		<?php echo $form->textField($model,'logo',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'logo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'convocatoria'); ?>
		<?php echo $form->textField($model,'convocatoria',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'convocatoria'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textArea($model,'descripcion',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha'); ?>
			<?php 
      echo $this->widget('zii.widgets.jui.CJuiDatePicker',
           array(
           	     'model'=>$model,
           	     'attribute'=>'fecha',
           	     'language'=>'es',
           	     'options'=>array(
                    "dateformat"=>"yy-mm-dd",
                    'showButtonPanel'=>true,
                    'changeYear'=>true,
                    'yearRange'=>'-80:+10',
                    'minDate'=>'-80y',
                    'maxDate'=>'+10y',
           	     	),
           	     'htmlOptions'=>array(
           	     	'class'=>'form-control'
           	     	)

                 )
           	     ,true);
		 ?>
		<?php echo $form->error($model,'fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lugar'); ?>
		<?php echo $form->textField($model,'lugar',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'lugar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'como_llegar'); ?>
		<?php echo $form->textArea($model,'como_llegar',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'como_llegar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'programa_act'); ?>
		<?php echo $form->textField($model,'programa_act',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'programa_act'); ?>

		<div class="container">
        <?php //echo CHtml::image(Yii::app()->params['file_tours'].$model->fotoprincipal,"fotoprincipal",array("width"=>200, 'title'=>$model->fotoprincipal)); ?>
        <?php echo CHtml::programa_act('C:\xampp\htdocs\imagenes'.$model->portada,"programa_act",array("width"=>200, 'title'=>$model->programa_act)); ?>
        </div>

	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->