<?php
/* @var $this StatusController */
/* @var $model Status */

$this->breadcrumbs=array(
	'Statuses'=>array('index'),
	$model->id_status,
);

$this->menu=array(
	array('label'=>'Lista Status', 'url'=>array('index')),
	array('label'=>'Ingesar Status', 'url'=>array('create')),
	array('label'=>'Actualizar Status', 'url'=>array('update', 'id'=>$model->id_status)),
	array('label'=>'Borrar Status', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_status),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Status', 'url'=>array('admin')),
);
?>

<h1>View Status #<?php echo $model->id_status; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_status',
		'status',
	),
)); ?>
