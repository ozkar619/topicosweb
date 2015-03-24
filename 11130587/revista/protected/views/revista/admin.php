<?php
/* @var $this RevistaController */
/* @var $model Revista */

$this->breadcrumbs=array(
	'Revistas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Lista Revista', 'url'=>array('index')),
	array('label'=>'Crear Revista', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#revista-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Revistas</h1>
	<div class="col-md-6">
		<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'revista-grid',
	'dataProvider'=>$modelGrid->search(),
	'filter'=>$modelGrid,
	'columns'=>array(
		'id_revista',
		'nombre',
		'portada',
		'fecha',
		'volumen',
		'titulo',
		/*
		'subtitulo',
		'numero',
		'clave',
		'directorio',
		'editorial',
		'id_status',
		*/
		array(
			'class'=>'CButtonColumn',
			'template'=>'{view}',
			'header'=>'Ver Indices',
			'buttons'=>array(
				'view'=>array(
					'url'=>'Yii::app()->createUrl("indice/admin",array(
						"id_revista"=>$data->id_revista 
						))'
					)
				),

			),
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
    <h3 class="panel-title">Nueva Revista</h3>
  </div>
  <div class="panel-body">
    <?php $this->renderPartial('_form', array('model'=>$model,
    'modelStatus'=>$modelStatus)); ?>
  </div>
</div>

</div>
