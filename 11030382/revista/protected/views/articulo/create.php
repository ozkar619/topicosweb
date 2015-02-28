<?php
/* @var $this ArticuloController */
/* @var $model Articulo */

$this->breadcrumbs=array(
	'Articulos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Lista de Articulo', 'url'=>array('index')),
	array('label'=>'Administrar Articulo', 'url'=>array('admin')),
);
?>

<h1>Crear Articulo</h1>

<?php $this->renderPartial('_form', 
	array('model'=>$model, 'modelStatus'=>$modelStatus)); ?>