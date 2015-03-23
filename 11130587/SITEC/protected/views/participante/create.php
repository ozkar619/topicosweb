<?php
/* @var $this ParticipanteController */
/* @var $model Participante */

$this->breadcrumbs=array(
	'Participantes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Lista de Participante', 'url'=>array('index')),
	array('label'=>'Administrar Participante', 'url'=>array('admin')),
);
?>

<h1>Agregar Participante</h1>

<?php $this->renderPartial('_form', array('model'=>$model,
	'modelTipo'=>$modelTipo,
	)); ?>