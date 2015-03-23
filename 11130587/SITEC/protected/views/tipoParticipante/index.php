<?php
/* @var $this TipoParticipanteController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tipo Participantes',
);

$this->menu=array(
	array('label'=>'Crear TipoParticipante', 'url'=>array('create')),
	array('label'=>'Administrar TipoParticipante', 'url'=>array('admin')),
);
?>

<h1>Tipo Participante</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
