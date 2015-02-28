<?php
/* @var $this IndiceController */
/* @var $model Indice */

$this->breadcrumbs=array(
	'Indices'=>array('index'),
	$model->id_indice,
);

$this->menu=array(
	array('label'=>'Lista de Indice', 'url'=>array('index')),
	array('label'=>'Crear Indice', 'url'=>array('create')),
	array('label'=>'Actualizar Indice', 'url'=>array('update', 'id'=>$model->id_indice)),
	array('label'=>'Eliminar Indice', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_indice),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Indice', 'url'=>array('admin')),
);
?>

<h1>Vista de Indice #<?php echo $model->id_indice; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_indice',
		'titulo',
		'numero',
		'id_revista',
	),
)); ?>
