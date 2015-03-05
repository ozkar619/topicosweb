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
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

<<<<<<< HEAD
<<<<<<< HEAD
	<div class="form-group">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'resumen'); ?>
		<?php echo $form->textArea($model,'resumen',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'resumen'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'abstrac'); ?>
		<?php echo $form->textArea($model,'abstrac',array('rows'=>6, 'cols'=>50)); ?>
=======
	<div class="row">
=======
	<div class="form-group">
>>>>>>> d6f4b950a745d83fe77b6fc64056c9f811e786b1
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>500,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'resumen'); ?>
		<?php echo $form->textArea($model,'resumen',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'resumen'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'abstrac'); ?>
<<<<<<< HEAD
		<?php echo $form->textArea($model,'abstrac',array('rows'=>6, 'cols'=>50, 'class'=>'form-control')); ?>
>>>>>>> 8fac4e8427c70af79aedd102932bbe52dccb1688
=======
		<?php echo $form->textArea($model,'abstrac',array('rows'=>6, 'cols'=>50)); ?>
>>>>>>> d6f4b950a745d83fe77b6fc64056c9f811e786b1
		<?php echo $form->error($model,'abstrac'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'introduccion'); ?>
<<<<<<< HEAD
<<<<<<< HEAD
		<?php echo $form->textArea($model,'introduccion',array('rows'=>6, 'cols'=>50)); ?>
=======
		<?php echo $form->textArea($model,'introduccion',array('rows'=>6, 'cols'=>50, 'class'=>'form-control')); ?>
>>>>>>> 8fac4e8427c70af79aedd102932bbe52dccb1688
=======
		<?php echo $form->textArea($model,'introduccion',array('rows'=>6, 'cols'=>50)); ?>
>>>>>>> d6f4b950a745d83fe77b6fc64056c9f811e786b1
		<?php echo $form->error($model,'introduccion'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'metodologia'); ?>
<<<<<<< HEAD
<<<<<<< HEAD
		<?php echo $form->textArea($model,'metodologia',array('rows'=>6, 'cols'=>50)); ?>
=======
		<?php echo $form->textArea($model,'metodologia',array('rows'=>6, 'cols'=>50, 'class'=>'form-control')); ?>
>>>>>>> 8fac4e8427c70af79aedd102932bbe52dccb1688
=======
		<?php echo $form->textArea($model,'metodologia',array('rows'=>6, 'cols'=>50)); ?>
>>>>>>> d6f4b950a745d83fe77b6fc64056c9f811e786b1
		<?php echo $form->error($model,'metodologia'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'contenido'); ?>
<<<<<<< HEAD
<<<<<<< HEAD
		<?php echo $form->textArea($model,'contenido',array('rows'=>6, 'cols'=>50)); ?>
=======
		<?php echo $form->textArea($model,'contenido',array('rows'=>6, 'cols'=>50, 'class'=>'form-control')); ?>
>>>>>>> 8fac4e8427c70af79aedd102932bbe52dccb1688
=======
		<?php echo $form->textArea($model,'contenido',array('rows'=>6, 'cols'=>50)); ?>
>>>>>>> d6f4b950a745d83fe77b6fc64056c9f811e786b1
		<?php echo $form->error($model,'contenido'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'fecha_creacion'); ?>
<<<<<<< HEAD
<<<<<<< HEAD
		<?php echo $form->textField($model,'fecha_creacion'); ?>
=======
		<?php 
        echo $this->widget('zii.widgets.jui.CJuiDatePicker',
           array(
           	     'model'=>$model,
           	     'attribute'=>'fecha_creacion',
           	     'language'=>'es',
           	     'options'=>array(),
           	     'htmlOptions'=>array(
           	     	'class'=>'form-control'
           	     	)

                 )
           	     ,true);

		 ?>
>>>>>>> 8fac4e8427c70af79aedd102932bbe52dccb1688
=======
		<?php echo $form->textField($model,'fecha_creacion'); ?>
>>>>>>> d6f4b950a745d83fe77b6fc64056c9f811e786b1
		<?php echo $form->error($model,'fecha_creacion'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'archivo_pdf'); ?>
<<<<<<< HEAD
<<<<<<< HEAD
		<?php echo $form->textField($model,'archivo_pdf',array('size'=>60,'maxlength'=>100)); ?>
=======
		 <?php echo $form->textField($model,'archivo_pdf',array('size'=>60,'maxlength'=>100,'class'=> 'form-control')); ?>
>>>>>>> 8fac4e8427c70af79aedd102932bbe52dccb1688
=======
		<?php echo $form->textField($model,'archivo_pdf',array('size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
>>>>>>> d6f4b950a745d83fe77b6fc64056c9f811e786b1
		<?php echo $form->error($model,'archivo_pdf'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'id_status'); ?>
<<<<<<< HEAD
<<<<<<< HEAD
		<?php echo $form->textField($model,'id_status'); ?>
=======
		<?php 
		echo $form->dropDownList($model,'id_status',CHtml::listData($modelStatus,'id_status','status'),
          	array('empty'=> 'Selecciona un estatus...', 'class'=>'form-control')
          	);

          ?>
>>>>>>> 8fac4e8427c70af79aedd102932bbe52dccb1688
=======
		<?//php echo $form->textField($model,'id_status'); 
		   echo $form->dropDownList($model,'id_status',
		   CHtml::listData($modelStatus,'id_status','status'),
		   array('empty' => 'Selecciona un estatus...','class'=>'form-control' ); );
		  ?>
>>>>>>> d6f4b950a745d83fe77b6fc64056c9f811e786b1
		<?php echo $form->error($model,'id_status'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'conclusiones'); ?>
<<<<<<< HEAD
<<<<<<< HEAD
		<?php echo $form->textArea($model,'conclusiones',array('rows'=>6, 'cols'=>50)); ?>
=======
		<?php echo $form->textArea($model,'conclusiones',array('rows'=>6, 'cols'=>50, 'class'=>'form-control')); ?>
>>>>>>> 8fac4e8427c70af79aedd102932bbe52dccb1688
=======
		<?php echo $form->textArea($model,'conclusiones',array('rows'=>6, 'cols'=>50)); ?>
>>>>>>> d6f4b950a745d83fe77b6fc64056c9f811e786b1
		<?php echo $form->error($model,'conclusiones'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'agradecimientos'); ?>
<<<<<<< HEAD
<<<<<<< HEAD
		<?php echo $form->textArea($model,'agradecimientos',array('rows'=>6, 'cols'=>50)); ?>
=======
		<?php echo $form->textArea($model,'agradecimientos',array('rows'=>6, 'cols'=>50, 'class'=>'form-control')); ?>
>>>>>>> 8fac4e8427c70af79aedd102932bbe52dccb1688
=======
		<?php echo $form->textArea($model,'agradecimientos',array('rows'=>6, 'cols'=>50)); ?>
>>>>>>> d6f4b950a745d83fe77b6fc64056c9f811e786b1
		<?php echo $form->error($model,'agradecimientos'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'referencias'); ?>
<<<<<<< HEAD
<<<<<<< HEAD
		<?php echo $form->textArea($model,'referencias',array('rows'=>6, 'cols'=>50)); ?>
=======
		<?php echo $form->textArea($model,'referencias',array('rows'=>6, 'cols'=>50, 'class'=>'form-control')); ?>
>>>>>>> 8fac4e8427c70af79aedd102932bbe52dccb1688
=======
		<?php echo $form->textArea($model,'referencias',array('rows'=>6, 'cols'=>50)); ?>
>>>>>>> d6f4b950a745d83fe77b6fc64056c9f811e786b1
		<?php echo $form->error($model,'referencias'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'id_indice_articulo'); ?>
<<<<<<< HEAD
<<<<<<< HEAD
		<?php echo $form->textField($model,'id_indice_articulo'); ?>
=======
		<?php echo $form->textField($model,'id_indice_articulo', array('class'=>'form-control')); ?>
>>>>>>> 8fac4e8427c70af79aedd102932bbe52dccb1688
=======
		<?php echo $form->textField($model,'id_indice_articulo'); ?>
>>>>>>> d6f4b950a745d83fe77b6fc64056c9f811e786b1
		<?php echo $form->error($model,'id_indice_articulo'); ?>
	</div>

	<div class="form-group">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->