<?php
/* @var $this ParticipantesEventoController */
/* @var $model ParticipantesEvento */

$this->breadcrumbs=array(
	'Participantes Eventos'=>array('index'),
	$model->id_evento,
);

$this->menu=array(
	array('label'=>'List ParticipantesEvento', 'url'=>array('index')),
	array('label'=>'Create ParticipantesEvento', 'url'=>array('create')),
	array('label'=>'Update ParticipantesEvento', 'url'=>array('update', 'id'=>$model->id_evento)),
	array('label'=>'Delete ParticipantesEvento', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_evento),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ParticipantesEvento', 'url'=>array('admin')),
);
?>

<h1>View ParticipantesEvento #<?php echo $model->id_evento; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_participante',
		'id_evento',
	),
)); ?>
