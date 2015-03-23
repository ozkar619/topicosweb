<?php
/* @var $this ArticuloAutorController */
/* @var $model ArticuloAutor */

$this->breadcrumbs=array(
	'Articulo Autors'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Lista ArticuloAutor', 'url'=>array('index')),
	array('label'=>'Ingresar ArticuloAutor', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#articulo-autor-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Articulo Autor <br>Revista:
							   <br>Indice:
							   <br>Articulo:<?php echo $articulo->nombre;?></h1>

<!--<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>-->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'articulo-autor-grid',
	'dataProvider'=>$modelGrid->search(),
	'filter'=>$modelGrid,
	'columns'=>array(
		'id_articulo_autor',
		'id_articulo',
		'idAutor.nombre',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>



<h3>Nueva revista</h3>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'articulo-autor-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>



	<div class="form-group">
		<?php echo $form->labelEx($model,'id_autor'); ?>
		<?php echo $form->dropDownList($model,'id_autor',
		CHtml::listData($modelautores,'id_autor','nombre'),
		array('empty'=>'Selecciona un autor','class'=>'form-control')); ; ?>
		<?php echo $form->error($model,'id_autor'); ?>
	</div>

	<div class="form-group buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Ingresar' : 'Save',array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>