<?php
/* @var $this TipoContenidoController */
/* @var $model TipoContenido */

$this->breadcrumbs=array(
	'Tipo Contenidos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Lista TipoContenido', 'url'=>array('index')),
	array('label'=>'Administracion TipoContenido', 'url'=>array('admin')),
);
?>

<h1>Create TipoContenido</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>