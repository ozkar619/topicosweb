<?php
/* @var $this IndiceArticuloController */
/* @var $model IndiceArticulo */

$this->breadcrumbs=array(
	'Indice Articulos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Lista IndiceArticulo', 'url'=>array('index')),
	array('label'=>'Ingresar IndiceArticulo', 'url'=>array('create')),
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

<h1>Administrar Indice Articulos</h1>

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
	'id'=>'indice-articulo-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_indice_articulo',
		'id_indice',
		'numero',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
