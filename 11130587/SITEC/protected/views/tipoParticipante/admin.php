<?php
/* @var $this TipoParticipanteController */
/* @var $model TipoParticipante */

$this->breadcrumbs=array(
	'Tipo Participantes'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Lista TipoParticipante', 'url'=>array('index')),
	array('label'=>'Crear TipoParticipante', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tipo-participante-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Tipo Participante</h1>
<div class="col-md-6">
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tipo-participante-grid',
	'dataProvider'=>$modelGrid->search(),
	'filter'=>$modelGrid,
	'columns'=>array(
		'id_tipo',
		'desc_tipo',
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
    <h3 class="panel-title">Nuevo Tipo de Participante</h3>
  </div>
  <div class="panel-body">
    <?php $this->renderPartial('_form', array('model'=>$model)); ?>
  </div>
</div>
</div>
