<?php
/* @var $this StatusController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Statuses',
);

$this->menu=array(
	array('label'=>'Ingresar Status', 'url'=>array('create')),
	array('label'=>'Administrar Status', 'url'=>array('admin')),
);
?>

<h1>Statuses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
