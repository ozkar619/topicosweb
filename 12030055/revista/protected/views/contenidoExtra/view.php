<?php
/* @var $this ContenidoExtraController */
/* @var $model ContenidoExtra */

$this->breadcrumbs=array(
	'Contenido Extras'=>array('index'),
	$model->id_contenido_extra,
);

$this->menu=array(
	array('label'=>'Lista ContenidoExtra', 'url'=>array('index')),
	array('label'=>'Ingresar ContenidoExtra', 'url'=>array('create')),
	array('label'=>'Actualizar ContenidoExtra', 'url'=>array('update', 'id'=>$model->id_contenido_extra)),
	array('label'=>'Borrar ContenidoExtra', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_contenido_extra),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar ContenidoExtra', 'url'=>array('admin')),
);
?>

<h1>View ContenidoExtra #<?php echo $model->id_contenido_extra; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_contenido_extra',
		'nombre',
		'archivo_pdf',
		'id_tipo_contenido',
		'id_indice_articulo',
		'contenido',
	),
)); ?>
