<?php
/* @var $this RecursosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Recursoses',
);

$this->menu=array(
	array('label'=>'Crear Recursos', 'url'=>array('create')),
	array('label'=>'Administrar Recursos', 'url'=>array('admin')),
);
?>

<h1>Recursoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
