<?php
/* @var $this RevistaController */
/* @var $model Revista */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_revista'); ?>
<<<<<<< HEAD
		<?php echo $form->textField($model,'id_revista'); ?>
=======
		<?php echo $form->textField($model,'id_revista', array('class'=>'form-control')); ?>
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
		<?php echo $form->label($model,'portada'); ?>
<<<<<<< HEAD
		<?php echo $form->textField($model,'portada',array('size'=>60,'maxlength'=>100)); ?>
=======
		<?php echo $form->textField($model,'portada',array('size'=>60,'maxlength'=>100,'class'=> 'form-control')); ?>
>>>>>>> 8fac4e8427c70af79aedd102932bbe52dccb1688
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha'); ?>
<<<<<<< HEAD
		<?php echo $form->textField($model,'fecha'); ?>
=======
		<?php echo $form->textField($model,'fecha', array('class'=>'form-control')); ?>
>>>>>>> 8fac4e8427c70af79aedd102932bbe52dccb1688
	</div>

	<div class="row">
		<?php echo $form->label($model,'volumen'); ?>
<<<<<<< HEAD
		<?php echo $form->textField($model,'volumen',array('size'=>45,'maxlength'=>45)); ?>
=======
		<?php echo $form->textField($model,'volumen',array('size'=>45,'maxlength'=>45,'class'=> 'form-control')); ?>
>>>>>>> 8fac4e8427c70af79aedd102932bbe52dccb1688
	</div>

	<div class="row">
		<?php echo $form->label($model,'titulo'); ?>
<<<<<<< HEAD
		<?php echo $form->textField($model,'titulo',array('size'=>60,'maxlength'=>200)); ?>
=======
		<?php echo $form->textField($model,'titulo',array('size'=>60,'maxlength'=>200,'class'=> 'form-control')); ?>
>>>>>>> 8fac4e8427c70af79aedd102932bbe52dccb1688
	</div>

	<div class="row">
		<?php echo $form->label($model,'subtitulo'); ?>
<<<<<<< HEAD
		<?php echo $form->textField($model,'subtitulo',array('size'=>60,'maxlength'=>200)); ?>
=======
		<?php echo $form->textField($model,'subtitulo',array('size'=>60,'maxlength'=>200,'class'=> 'form-control')); ?>
>>>>>>> 8fac4e8427c70af79aedd102932bbe52dccb1688
	</div>

	<div class="row">
		<?php echo $form->label($model,'numero'); ?>
<<<<<<< HEAD
		<?php echo $form->textField($model,'numero'); ?>
=======
		<?php echo $form->textField($model,'numero', array('class'=>'form-control')); ?>
>>>>>>> 8fac4e8427c70af79aedd102932bbe52dccb1688
	</div>

	<div class="row">
		<?php echo $form->label($model,'clave'); ?>
<<<<<<< HEAD
		<?php echo $form->textField($model,'clave',array('size'=>45,'maxlength'=>45)); ?>
=======
		<?php echo $form->textField($model,'clave',array('size'=>45,'maxlength'=>45,'class'=> 'form-control')); ?>
>>>>>>> 8fac4e8427c70af79aedd102932bbe52dccb1688
	</div>

	<div class="row">
		<?php echo $form->label($model,'directorio'); ?>
<<<<<<< HEAD
		<?php echo $form->textArea($model,'directorio',array('rows'=>6, 'cols'=>50)); ?>
=======
		<?php echo $form->textArea($model,'directorio',array('rows'=>6, 'cols'=>50, 'class'=>'form-control')); ?>
>>>>>>> 8fac4e8427c70af79aedd102932bbe52dccb1688
	</div>

	<div class="row">
		<?php echo $form->label($model,'editorial'); ?>
<<<<<<< HEAD
		<?php echo $form->textArea($model,'editorial',array('rows'=>6, 'cols'=>50)); ?>
=======
		<?php echo $form->textArea($model,'editorial',array('rows'=>6, 'cols'=>50, 'class'=>'form-control')); ?>
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

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->