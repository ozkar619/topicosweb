<?php
/* @var $this ParticipanteController */
/* @var $model Participante */

$this->breadcrumbs=array(
	'Participantes'=>array('index'),
	$model->idparticipante,
);

$this->menu=array(
	array('label'=>'List Participante', 'url'=>array('index')),
	array('label'=>'Create Participante', 'url'=>array('create')),
	array('label'=>'Update Participante', 'url'=>array('update', 'id'=>$model->idparticipante)),
	array('label'=>'Delete Participante', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idparticipante),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Participante', 'url'=>array('admin')),
);
?>

<h1>View Participante #<?php echo $model->idparticipante; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idparticipante',
		'idtipo',
		'nombre',
		'email',
		'telefono',
	),
)); ?>
