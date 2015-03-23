<?php
/* @var $this ParticipantesEventoController */
/* @var $model ParticipantesEvento */

$this->breadcrumbs=array(
	'Participantes Eventos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Lista de ParticipantesEvento', 'url'=>array('index')),
	array('label'=>'Administrar ParticipantesEvento', 'url'=>array('admin')),
);
?>

<h1>Crear ParticipantesEvento</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>