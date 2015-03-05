<?php
/* @var $this StatusController */
/* @var $model Status */

$this->breadcrumbs=array(
	'Statuses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Lista Status', 'url'=>array('index')),
	array('label'=>'Administrar Status', 'url'=>array('admin')),
);
?>

<h1>Create Status</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>