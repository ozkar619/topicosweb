<?php
/* @var $this ArticuloController */
/* @var $model Articulo */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_articulo'); ?>
<<<<<<< HEAD
		<?php echo $form->textField($model,'id_articulo'); ?>
=======
		<?php echo $form->textField($model,'id_articulo', array('class'=>'form-control')); ?>
>>>>>>> 8fac4e8427c70af79aedd102932bbe52dccb1688
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre'); ?>
<<<<<<< HEAD
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>500)); ?>
=======
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>500,'class'=> 'form-control')); ?>
>>>>>>> 8fac4e8427c70af79aedd102932bbe52dccb1688
	</div>

	<div class="row">
		<?php echo $form->label($model,'resumen'); ?>
<<<<<<< HEAD
		<?php echo $form->textArea($model,'resumen',array('rows'=>6, 'cols'=>50)); ?>
=======
		<?php echo $form->textArea($model,'resumen',array('rows'=>6, 'cols'=>50, 'class'=>'form-control')); ?>
>>>>>>> 8fac4e8427c70af79aedd102932bbe52dccb1688
	</div>

	<div class="row">
		<?php echo $form->label($model,'abstrac'); ?>
<<<<<<< HEAD
		<?php echo $form->textArea($model,'abstrac',array('rows'=>6, 'cols'=>50)); ?>
=======
		<?php echo $form->textArea($model,'abstrac',array('rows'=>6, 'cols'=>50, 'class'=>'form-control')); ?>
>>>>>>> 8fac4e8427c70af79aedd102932bbe52dccb1688
	</div>

	<div class="row">
		<?php echo $form->label($model,'introduccion'); ?>
<<<<<<< HEAD
		<?php echo $form->textArea($model,'introduccion',array('rows'=>6, 'cols'=>50)); ?>
=======
		<?php echo $form->textArea($model,'introduccion',array('rows'=>6, 'cols'=>50, 'class'=>'form-control')); ?>
>>>>>>> 8fac4e8427c70af79aedd102932bbe52dccb1688
	</div>

	<div class="row">
		<?php echo $form->label($model,'metodologia'); ?>
<<<<<<< HEAD
		<?php echo $form->textArea($model,'metodologia',array('rows'=>6, 'cols'=>50)); ?>
=======
		<?php echo $form->textArea($model,'metodologia',array('rows'=>6, 'cols'=>50, 'class'=>'form-control')); ?>
>>>>>>> 8fac4e8427c70af79aedd102932bbe52dccb1688
	</div>

	<div class="row">
		<?php echo $form->label($model,'contenido'); ?>
<<<<<<< HEAD
		<?php echo $form->textArea($model,'contenido',array('rows'=>6, 'cols'=>50)); ?>
=======
		<?php echo $form->textArea($model,'contenido',array('rows'=>6, 'cols'=>50, 'class'=>'form-control')); ?>
>>>>>>> 8fac4e8427c70af79aedd102932bbe52dccb1688
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_creacion'); ?>
<<<<<<< HEAD
		<?php echo $form->textField($model,'fecha_creacion'); ?>
=======
		<?php echo $form->textField($model,'fecha_creacion', array('class'=>'form-control')); ?>
>>>>>>> 8fac4e8427c70af79aedd102932bbe52dccb1688
	</div>

	<div class="row">
		<?php echo $form->label($model,'archivo_pdf'); ?>
<<<<<<< HEAD
		<?php echo $form->textField($model,'archivo_pdf',array('size'=>60,'maxlength'=>100)); ?>
=======
		<?php echo $form->textField($model,'archivo_pdf',array('size'=>60,'maxlength'=>100,'class'=> 'form-control')); ?>
>>>>>>> 8fac4e8427c70af79aedd102932bbe52dccb1688
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_status'); ?>
<<<<<<< HEAD
		<?php echo $form->textField($model,'id_status'); ?>
=======
		<?php echo $form->textField($model,'id_status', array('class'=>'form-control')); ?>
>>>>>>> 8fac4e8427c70af79aedd102932bbe52dccb1688
	</div>

	<div class="row">
		<?php echo $form->label($model,'conclusiones'); ?>
<<<<<<< HEAD
		<?php echo $form->textArea($model,'conclusiones',array('rows'=>6, 'cols'=>50)); ?>
=======
		<?php echo $form->textArea($model,'conclusiones',array('rows'=>6, 'cols'=>50, 'class'=>'form-control')); ?>
>>>>>>> 8fac4e8427c70af79aedd102932bbe52dccb1688
	</div>

	<div class="row">
		<?php echo $form->label($model,'agradecimientos'); ?>
<<<<<<< HEAD
		<?php echo $form->textArea($model,'agradecimientos',array('rows'=>6, 'cols'=>50)); ?>
=======
		<?php echo $form->textArea($model,'agradecimientos',array('rows'=>6, 'cols'=>50, 'class'=>'form-control')); ?>
>>>>>>> 8fac4e8427c70af79aedd102932bbe52dccb1688
	</div>

	<div class="row">
		<?php echo $form->label($model,'referencias'); ?>
<<<<<<< HEAD
		<?php echo $form->textArea($model,'referencias',array('rows'=>6, 'cols'=>50)); ?>
=======
		<?php echo $form->textArea($model,'referencias',array('rows'=>6, 'cols'=>50, 'class'=>'form-control')); ?>
>>>>>>> 8fac4e8427c70af79aedd102932bbe52dccb1688
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_indice_articulo'); ?>
<<<<<<< HEAD
		<?php echo $form->textField($model,'id_indice_articulo'); ?>
=======
		<?php echo $form->textField($model,'id_indice_articulo', array('class'=>'form-control')); ?>
>>>>>>> 8fac4e8427c70af79aedd102932bbe52dccb1688
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->