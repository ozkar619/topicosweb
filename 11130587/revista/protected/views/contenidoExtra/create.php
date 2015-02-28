<?php
/* @var $this ContenidoExtraController */
/* @var $model ContenidoExtra */

$this->breadcrumbs=array(
	'Contenido Extras'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Lista ContenidoExtra', 'url'=>array('index')),
	array('label'=>'Administrar ContenidoExtra', 'url'=>array('admin')),
);
?>

<h1>Crear ContenidoExtra</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>