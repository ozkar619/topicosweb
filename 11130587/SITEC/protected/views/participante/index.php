<?php
/* @var $this ParticipanteController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Participantes',
);

$this->menu=array(
	array('label'=>'Crear Participante', 'url'=>array('create')),
	array('label'=>'Administrar Participante', 'url'=>array('admin')),
);
?>

<h1>Participantes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
