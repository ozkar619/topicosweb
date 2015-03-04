<?php
/* @var $this ArticuloAutorController */
/* @var $model ArticuloAutor */

$this->breadcrumbs=array(
	'Articulo Autors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Lista ArticuloAutor', 'url'=>array('index')),
	array('label'=>'Administrar ArticuloAutor', 'url'=>array('admin')),
);
?>

<h1>Create ArticuloAutor</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>