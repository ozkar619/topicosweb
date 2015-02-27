<?php
/* @var $this RevistaController */
/* @var $model Revista */

$this->breadcrumbs=array(
	'Revistas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Lista de Revista', 'url'=>array('index')),
	array('label'=>'Administrar Revista', 'url'=>array('admin')),
);
?>

<h1>Crear Revista</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>