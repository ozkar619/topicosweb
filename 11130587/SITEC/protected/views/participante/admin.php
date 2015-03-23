<?php
/* @var $this ParticipanteController */
/* @var $model Participante */

$this->breadcrumbs=array(
	'Participantes'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Lista de Participante', 'url'=>array('index')),
	array('label'=>'Agregar Participante', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#participante-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Participante</h1>

<div class="col-md-6">
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'participante-grid',
	'dataProvider'=>$modelGrid->search(),
	'filter'=>$modelGrid,
	'columns'=>array(
		'id_participante',
		'id_tipo',
		'nombre',
		'email',
		'telefono',
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
    <h3 class="panel-title">Nuevo Participante</h3>
  </div>
  <div class="panel-body">
    <?php $this->renderPartial('_form', array('model'=>$model,
     'modelTipo'=>$modelTipo)); ?>
  </div>
</div>
</div>
