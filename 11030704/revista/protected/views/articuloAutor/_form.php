<?php
/* @var $this ArticuloAutorController */
/* @var $model ArticuloAutor */
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
    
 

	<p class="note"> <span class="required">*</span> Requerido.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group">
    <?php echo $form->labelEx($model,'id_articulo'); ?>
		<?php 
			echo $form->dropDownList($model,'id_articulo',
		  		CHtml::listData($modelArticulo,'id_articulo','nombre'),
		  		array('empty'=>'Selecciona un articulo...','class'=>'form-control')
		  		);
  		?>
		<?php echo $form->error($model,'id_articulo'); ?>
	</div>

	<div class="form-group">
       <?php echo $form->labelEx($model,'id_autor'); ?>
		<?php 
			echo $form->dropDownList($model,'id_autor',
		  		CHtml::listData($modelAutor,'id_autor','nombre','apellidos'),
		  		array('empty'=>'Selecciona un autor...','class'=>'form-control')
		  		);
  		?>
		<?php echo $form->error($model,'id_autor'); ?>
<!---------------------------------------------------------------------------------------------------->		
	</div>

	<div class="form-group">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->