<?php
/* @var $this IndiceController */
/* @var $model Indice */

$this->breadcrumbs=array(
	'Indices'=>array('index'),
	$model->id_indice=>array('view','id'=>$model->id_indice),
	'Update',
);

$this->menu=array(
	array('label'=>'Lista de Indice', 'url'=>array('index')),
	array('label'=>'Crear Indice', 'url'=>array('create')),
	array('label'=>'Vista de Indice', 'url'=>array('view', 'id'=>$model->id_indice)),
	array('label'=>'Administrar Indice', 'url'=>array('admin')),
);
?>

<h1>Acutalizar Indice <?php echo $model->id_indice; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>