<?php
/* @var $this IndiceArticuloController */
/* @var $model IndiceArticulo */

$this->breadcrumbs=array(
	'Indice Articulos'=>array('index'),
	$model->id_indice_articulo,
);

$this->menu=array(
	array('label'=>'Lista de IndiceArticulo', 'url'=>array('index')),
	array('label'=>'Crear IndiceArticulo', 'url'=>array('create')),
	array('label'=>'Actualizar IndiceArticulo', 'url'=>array('update', 'id'=>$model->id_indice_articulo)),
	array('label'=>'Eliminar IndiceArticulo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_indice_articulo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar IndiceArticulo', 'url'=>array('admin')),
);
?>

<h1>Vista de IndiceArticulo #<?php echo $model->id_indice_articulo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_indice_articulo',
		'id_indice',
		'numero',
	),
)); ?>
