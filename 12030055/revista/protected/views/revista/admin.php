<?php
/* @var $this RevistaController */
/* @var $model Revista */

$this->breadcrumbs=array(
	'Revistas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Lista Revista', 'url'=>array('index')),
	array('label'=>'Ingresar Revista', 'url'=>array('create')),
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

<!--<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>-->

<?php echo CHtml::link('Busqueda avanzada','#',array('class'=>'search-button')); ?>
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
		array(
			'type'=>'raw',
            'name'=>'portada',
            'value'=>'html_entity_decode
  		                   (CHtml::image(Yii::app()->baseUrl."/img/".$data->portada,"portada",
  		                   	array("width"=>100,"height"=>150)))',
			),
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
			'header'=>'ver indices',
			'buttons'=>array(
							'view'=>array(
										  'url'=>'Yii::app()->createUrl("indice/admin",
										  	array(
										  		"id_revista"=>$data->id_revista,
										  		
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
