<?php
/* @var $this ParticipantesEventoController */
/* @var $model ParticipantesEvento */

$this->breadcrumbs=array(
	'Participantes Eventos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Lista de ParticipantesEvento', 'url'=>array('index')),
	array('label'=>'Crear ParticipantesEvento', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#participantes-evento-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Participantes Eventos</h1>

<div class="col-md-6">
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'participantes-evento-grid',
	'dataProvider'=>$modelGrid->search(),
	'filter'=>$modelGrid,
	'columns'=>array(
		'id_participante',
		'id_evento',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
</div>
</div>

<div class="col-md-5">
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Nuevo Participante Evento</h3>
  </div>
  <div class="panel-body">
    <?php $this->renderPartial('_form', array('model'=>$model)); ?>
  </div>
</div>
</div>
