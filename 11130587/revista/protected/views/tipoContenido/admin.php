<?php
/* @var $this TipoContenidoController */
/* @var $model TipoContenido */

$this->breadcrumbs=array(
	'Tipo Contenidos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Lista TipoContenido', 'url'=>array('index')),
	array('label'=>'Crear TipoContenido', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tipo-contenido-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Tipo Contenidos</h1>

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
	'id'=>'tipo-contenido-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_tipo_contenido',
		'tipo',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
