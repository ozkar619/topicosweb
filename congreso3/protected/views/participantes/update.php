<?php
/* @var $this ParticipantesController */
/* @var $model Participantes */

$this->breadcrumbs=array(
	'Participantes'=>array('index'),
	$model->id_participante=>array('view','id'=>$model->id_participante),
	'Update',
);

$this->menu=array(
	array('label'=>'List Participantes', 'url'=>array('index')),
	array('label'=>'Create Participantes', 'url'=>array('create')),
	array('label'=>'View Participantes', 'url'=>array('view', 'id'=>$model->id_participante)),
	array('label'=>'Manage Participantes', 'url'=>array('admin')),
);
?>

<h1>Update Participantes <?php echo $model->id_participante; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>