<?php
/* @var $this ParticipantesEventoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Participantes Eventos',
);

$this->menu=array(
	array('label'=>'Crear ParticipantesEvento', 'url'=>array('create')),
	array('label'=>'Administrar ParticipantesEvento', 'url'=>array('admin')),
);
?>

<h1>Participantes Eventos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
