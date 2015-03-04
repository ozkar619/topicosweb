<?php
/* @var $this IndiceArticuloController */
/* @var $model IndiceArticulo */

$this->breadcrumbs=array(
	'Indice Articulos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Lista IndiceArticulo', 'url'=>array('index')),
	array('label'=>'Administrar IndiceArticulo', 'url'=>array('admin')),
);
?>

<h1>Crear IndiceArticulo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>