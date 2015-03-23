<?php
/* @var $this ArticuloAutorController */
/* @var $model ArticuloAutor */

$this->breadcrumbs=array(
	'Articulo Autors'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List ArticuloAutor', 'url'=>array('index')),
	array('label'=>'Create ArticuloAutor', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#articulo-autor-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Articulos y  Autores</h1>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'articulo-autor-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_articulo_autor',
		'id_articulo',
		'id_autor',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
