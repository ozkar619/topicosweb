<?php
/* @var $this RevistaController */
/* @var $model Revista */

$this->breadcrumbs=array(
	'Revistas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Revista', 'url'=>array('index')),
	array('label'=>'Create Revista', 'url'=>array('create')),
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

<h1>Revistas</h1>


<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'revista-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
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
			'header'=>'Ver índices',
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
			'template'=>'{view}{update}',
		),
	),
)); ?>
