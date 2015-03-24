<?php
/* @var $this TipoParticipanteController */
/* @var $model TipoParticipante */

$this->breadcrumbs=array(
	'Tipo Participantes'=>array('index'),
	$model->id_tipo,
);

$this->menu=array(
	array('label'=>'List TipoParticipante', 'url'=>array('index')),
	array('label'=>'Create TipoParticipante', 'url'=>array('create')),
	array('label'=>'Update TipoParticipante', 'url'=>array('update', 'id'=>$model->id_tipo)),
	array('label'=>'Delete TipoParticipante', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tipo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TipoParticipante', 'url'=>array('admin')),
);
?>

<h1>View TipoParticipante #<?php echo $model->id_tipo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tipo',
		'desc_tipo',
	),
)); ?>
