<?php
/* @var $this ArticuloController */
/* @var $model Articulo */

$this->breadcrumbs=array(
	'Articulos'=>array('index'),
	$model->id_articulo=>array('view','id'=>$model->id_articulo),
	'Update',
);

$this->menu=array(
	array('label'=>'Lista de Articulo', 'url'=>array('index')),
	array('label'=>'Crear Articulo', 'url'=>array('create')),
	array('label'=>'Vista de Articulo', 'url'=>array('view', 'id'=>$model->id_articulo)),
	array('label'=>'Administrar Articulo', 'url'=>array('admin')),
);
?>

<h1>Acutalizar Articulo <?php echo $model->id_articulo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>