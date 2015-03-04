<?php
/* @var $this ContenidoExtraController */
/* @var $model ContenidoExtra */

$this->breadcrumbs=array(
	'Contenido Extras'=>array('index'),
	$model->id_contenido_extra=>array('view','id'=>$model->id_contenido_extra),
	'Update',
);

$this->menu=array(
	array('label'=>'Lista de ContenidoExtra', 'url'=>array('index')),
	array('label'=>'Crear ContenidoExtra', 'url'=>array('create')),
	array('label'=>'Vista de ContenidoExtra', 'url'=>array('view', 'id'=>$model->id_contenido_extra)),
	array('label'=>'Administrar ContenidoExtra', 'url'=>array('admin')),
);
?>

<h1>Acutalizar ContenidoExtra <?php echo $model->id_contenido_extra; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>