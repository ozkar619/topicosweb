<?php
/* @var $this StatusController */
/* @var $model Status */

$this->breadcrumbs=array(
	'Statuses'=>array('index'),
	$model->id_status=>array('view','id'=>$model->id_status),
	'Update',
);

$this->menu=array(
	array('label'=>'Lista Status', 'url'=>array('index')),
	array('label'=>'Ingresar Status', 'url'=>array('create')),
	array('label'=>'Ver Status', 'url'=>array('view', 'id'=>$model->id_status)),
	array('label'=>'Administrar Status', 'url'=>array('admin')),
);
?>

<h1>Update Status <?php echo $model->id_status; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>