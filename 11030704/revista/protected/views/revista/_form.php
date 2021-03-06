<?php
/* @var $this RevistaController */
/* @var $model Revista */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	
//***********************************************************************************************
    'id'=>'revista-form',
    'enableAjaxValidation'=>false,
    'htmlOptions' => array('enctype' => 'multipart/form-data'),//NO TE OLVIDES DE ASIGNAR ESTO
)); ?>
      <?php //echo $form->textFieldRow($model,'fotoprincipal',array('class'=>'span5','maxlength'=>15)); ?>
    
 

	<p class="note"><span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>500,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>
    
	<div class="form-group">
		<?php
        echo $form->labelEx($model, 'portada');
        echo $form->fileField($model, 'picture');
        echo $form->error($model, 'picture');
    ?>
 
    <?php if(!$model->isNewRecord){ //mostramos la imagen?>
    <div class="container">
            <?php //echo CHtml::image(Yii::app()->params['file_tours'].$model->fotoprincipal,"fotoprincipal",array("width"=>200, 'title'=>$model->fotoprincipal)); ?>
            <?php echo CHtml::image('images/uploads'.$model->portada,"portada",array("width"=>200, 'title'=>$model->portada)); ?>
    </div>
    <?php } ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php 
			echo $this->widget('zii.widgets.jui.CJuiDatePicker',
					array(
						'model'=>$model,
						'attribute'=>'fecha',
						'language'=>'es',
						'options'=>array(),
						'htmlOptions'=>array(
							'class'=>'form-control'
						)
					)
				,true);				

		 ?>
		<?php echo $form->error($model,'fecha'); ?>
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
		<?php echo $form->textField($model,'numero',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'numero'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'clave'); ?>
		<?php echo $form->textField($model,'clave',array('size'=>45,'maxlength'=>45,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'clave'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'directorio'); ?>
		<?php echo $form->textArea($model,'directorio',array('rows'=>6, 'cols'=>50,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'directorio'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'editorial'); ?>
		<?php echo $form->textArea($model,'editorial',array('rows'=>6, 'cols'=>50,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'editorial'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'id_status'); ?>
		<?php
			echo $form->dropDownList($model,'id_status',
				  		CHtml::listData($modelStatus,'id_status','status'),
				  		array('empty'=>'Selecciona un estatus...','class'=>'form-control')); 
		 ?>
		<?php echo $form->error($model,'id_status'); ?>
	</div>

	<div class="form-group">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->