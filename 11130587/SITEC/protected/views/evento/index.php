<?php
/* @var $this EventoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Eventos',
);

$this->menu=array(
	array('label'=>'Crear Evento', 'url'=>array('create')),
	array('label'=>'Administrar Evento', 'url'=>array('admin')),
);
?>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
