<?php
/* @var $this IndiceController */
/* @var $model Indice */

$this->breadcrumbs=array(
	'Indices'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Lista de Indice', 'url'=>array('index')),
	array('label'=>'Administrar Indice', 'url'=>array('admin')),
);
?>

<h1>Crear Indice</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>