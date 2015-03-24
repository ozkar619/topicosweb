<?php
/* @var $this TipoParticipanteController */
/* @var $model TipoParticipante */

$this->breadcrumbs=array(
	'Tipo Participantes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Lista TipoParticipante', 'url'=>array('index')),
	array('label'=>'Administrar TipoParticipante', 'url'=>array('admin')),
);
?>

<h1>Crear TipoParticipante</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>