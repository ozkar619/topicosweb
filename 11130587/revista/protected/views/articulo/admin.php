<?php
/* @var $this ArticuloController */
/* @var $model Articulo */

$this->breadcrumbs=array(
	'Articulos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Lista Articulo', 'url'=>array('index')),
	array('label'=>'Crear Articulo', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#articulo-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Articulos</h1>
<div class="col-md-6">
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'articulo-grid',
	'dataProvider'=>$modelGrid->search(),
	'filter'=>$modelGrid,
	'columns'=>array(
		'id_articulo',
		'nombre',
		'resumen',
		'abstrac',
		'introduccion',
		'metodologia',
		/*
		'contenido',
		'fecha_creacion',
		'archivo_pdf',
		'id_status',
		'conclusiones',
		'agradecimientos',
		'referencias',
		'id_indice_articulo',
		*/
			    array(
			'class'=>'CButtonColumn',
			'template'=>'{view}',
			'header'=>'Ver Articulo Autor',
			'buttons'=>array(
				'view'=>array(
					'url'=>'Yii::app()->createUrl("articuloAutor/admin",array(
						"id_articulo"=>$data->id_articulo
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
    <h3 class="panel-title">Nuevo Articulo</h3>
  </div>
  <div class="panel-body">
    <?php $this->renderPartial('_form', array('model'=>$model,
    'modelStatus'=>$modelStatus)); ?>
  </div>
</div>

</div>
