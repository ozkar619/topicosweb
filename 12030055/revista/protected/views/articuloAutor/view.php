<?php
/* @var $this ArticuloAutorController */
/* @var $model ArticuloAutor */

$this->breadcrumbs=array(
	'Articulo Autors'=>array('index'),
	$model->id_articulo_autor,
);

$this->menu=array(
	array('label'=>'Lista ArticuloAutor', 'url'=>array('index')),
	array('label'=>'Ingresar ArticuloAutor', 'url'=>array('create')),
	array('label'=>'Actualizar ArticuloAutor', 'url'=>array('update', 'id'=>$model->id_articulo_autor)),
	array('label'=>'Borrar ArticuloAutor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_articulo_autor),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar ArticuloAutor', 'url'=>array('admin')),
);
?>

<h1>View ArticuloAutor #<?php echo $model->id_articulo_autor; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_articulo_autor',
		'id_articulo',
		'id_autor',
	),
)); ?>
