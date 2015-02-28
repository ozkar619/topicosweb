<?php
/* @var $this AutorController */
/* @var $model Autor */

$this->breadcrumbs=array(
	'Autors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Lista de Autor', 'url'=>array('index')),
	array('label'=>'Administrar Autor', 'url'=>array('admin')),
);
?>

<h1>Crear Autor</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>