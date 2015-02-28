<?php
/* @var $this RevistaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Revistas',
);

$this->menu=array(
	array('label'=>'Crear Revista', 'url'=>array('create')),
	array('label'=>'Administrar Revista', 'url'=>array('admin')),
);
?>

<h1>Revistas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
