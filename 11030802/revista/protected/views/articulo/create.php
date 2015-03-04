<<<<<<< HEAD
<?php
/* @var $this ArticuloController */
/* @var $model Articulo */

$this->breadcrumbs=array(
	'Articulos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Articulo', 'url'=>array('index')),
	array('label'=>'Manage Articulo', 'url'=>array('admin')),
);
?>

<h1>Crear Articulo</h1>

<?php $this->renderPartial('_form', array('model'=>$model,'modelStatus'=>$modelStatus)); ?>
=======
<?php
/* @var $this ArticuloController */
/* @var $model Articulo */

$this->breadcrumbs=array(
	'Articulos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Articulo', 'url'=>array('index')),
	array('label'=>'Manage Articulo', 'url'=>array('admin')),
);
?>

<h1>Create Articulo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
>>>>>>> 4337b7019fee661cee10d9e062aba4a6f4090dd6
