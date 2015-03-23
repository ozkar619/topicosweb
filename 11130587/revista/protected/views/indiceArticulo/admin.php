<?php
/* @var $this IndiceArticuloController */
/* @var $model IndiceArticulo */

$this->breadcrumbs=array(
	'Indice Articulos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Lista IndiceArticulo', 'url'=>array('index')),
	array('label'=>'Crear IndiceArticulo', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#indice-articulo-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administar Indice Articulos</h1>

<p>
Usted opcionalmente puede escribir un operador de comparación (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
o <b>=</b>) al principio de cada una de los valores de su búsqueda para especificar como debe hacerse la comparación.
</p>

<?php echo CHtml::link('Búsqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'indice-articulo-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_indice_articulo',
		'id_indice',
		'numero',
	    array(
			'class'=>'CButtonColumn',
			'template'=>'{view}',
			'header'=>'Ver Articulos',
			'buttons'=>array(
				'view'=>array(
					'url'=>'Yii::app()->createUrl("articulo/admin",array(
						"id_indice_articulo"=>$data->id_indice_articulo 
						))'
					)
				),

			),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
