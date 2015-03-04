<?php
/* @var $this RecursosController */
/* @var $model Recursos */

$this->breadcrumbs=array(
	'Recursoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Lista de Recursos', 'url'=>array('index')),
	array('label'=>'Administrar Recursos', 'url'=>array('admin')),
);
?>

<h1>Crear Recursos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>