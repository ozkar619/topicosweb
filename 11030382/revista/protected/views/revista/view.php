<?php
/* @var $this RevistaController */
/* @var $model Revista */

$this->breadcrumbs=array(
	'Revistas'=>array('index'),
	$model->id_revista,
);

$this->menu=array(
	array('label'=>'Lista de Revista', 'url'=>array('index')),
	array('label'=>'Crear Revista', 'url'=>array('create')),
	array('label'=>'Actualizar Revista', 'url'=>array('update', 'id'=>$model->id_revista)),
	array('label'=>'Eliminar Revista', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_revista),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Revista', 'url'=>array('admin')),
);
?>

<h1>Vista de Revista #<?php echo $model->id_revista; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_revista',
		'nombre',
		'portada',
		'fecha',
		'volumen',
		'titulo',
		'subtitulo',
		'numero',
		'clave',
		'directorio',
		'editorial',
		'id_status',
	),
)); ?>
