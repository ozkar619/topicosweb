<?php
/* @var $this ArticuloController */
/* @var $model Articulo */

$this->breadcrumbs=array(
	'Articulos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Lista de Articulo', 'url'=>array('index')),
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

<p>
También puede escribir un operador de comparación (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) al principio de cada uno de los valores de búsqueda para especificar cómo se debe hacer la comparación.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'articulo-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
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
		),
	),
)); ?>
