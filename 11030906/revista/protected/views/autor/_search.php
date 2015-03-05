<?php
/* @var $this AutorController */
/* @var $model Autor */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_autor'); ?>
<<<<<<< HEAD
<<<<<<< HEAD
		<?php echo $form->textField($model,'id_autor'); ?>
=======
		<?php echo $form->textField($model,'id_autor', array('class'=>'form-control')); ?>
>>>>>>> 8fac4e8427c70af79aedd102932bbe52dccb1688
=======
		<?php echo $form->textField($model,'id_autor'); ?>
>>>>>>> d6f4b950a745d83fe77b6fc64056c9f811e786b1
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre'); ?>
<<<<<<< HEAD
<<<<<<< HEAD
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>100)); ?>
=======
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>100,'class'=> 'form-control')); ?>
>>>>>>> 8fac4e8427c70af79aedd102932bbe52dccb1688
=======
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
>>>>>>> d6f4b950a745d83fe77b6fc64056c9f811e786b1
	</div>

	<div class="row">
		<?php echo $form->label($model,'apellidos'); ?>
<<<<<<< HEAD
<<<<<<< HEAD
		<?php echo $form->textField($model,'apellidos',array('size'=>60,'maxlength'=>200)); ?>
=======
		<?php echo $form->textField($model,'apellidos',array('size'=>60,'maxlength'=>200,'class'=> 'form-control')); ?>
>>>>>>> 8fac4e8427c70af79aedd102932bbe52dccb1688
=======
		<?php echo $form->textField($model,'apellidos',array('size'=>60,'maxlength'=>200,'class'=>'form-control')); ?>
>>>>>>> d6f4b950a745d83fe77b6fc64056c9f811e786b1
	</div>

	<div class="row">
		<?php echo $form->label($model,'email'); ?>
<<<<<<< HEAD
<<<<<<< HEAD
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>100)); ?>
=======
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>100,'class'=> 'form-control')); ?>
>>>>>>> 8fac4e8427c70af79aedd102932bbe52dccb1688
=======
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
>>>>>>> d6f4b950a745d83fe77b6fc64056c9f811e786b1
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->