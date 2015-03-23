<?php
/* @var $this ParticipantesEventoController */
/* @var $model ParticipantesEvento */

$this->breadcrumbs=array(
	'Participantes Eventos'=>array('index'),
	$model->id_evento=>array('view','id'=>$model->id_evento),
	'Update',
);

$this->menu=array(
	array('label'=>'List ParticipantesEvento', 'url'=>array('index')),
	array('label'=>'Create ParticipantesEvento', 'url'=>array('create')),
	array('label'=>'View ParticipantesEvento', 'url'=>array('view', 'id'=>$model->id_evento)),
	array('label'=>'Manage ParticipantesEvento', 'url'=>array('admin')),
);
?>

<h1>Update ParticipantesEvento <?php echo $model->id_evento; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>