<?php
/* @var $this TipoContenidoController */
/* @var $model TipoContenido */

$this->breadcrumbs=array(
	'Tipo Contenidos'=>array('index'),
	$model->id_tipo_contenido,
);

$this->menu=array(
	array('label'=>'Lista TipoContenido', 'url'=>array('index')),
	array('label'=>'Ingresar TipoContenido', 'url'=>array('create')),
	array('label'=>'Actualizar TipoContenido', 'url'=>array('update', 'id'=>$model->id_tipo_contenido)),
	array('label'=>'Borrar TipoContenido', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tipo_contenido),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar TipoContenido', 'url'=>array('admin')),
);
?>

<h1>View TipoContenido #<?php echo $model->id_tipo_contenido; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tipo_contenido',
		'tipo',
	),
)); ?>
