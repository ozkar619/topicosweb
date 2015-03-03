<?php
/* @var $this RecursosController */
/* @var $model Recursos */

$this->breadcrumbs=array(
	'Recursoses'=>array('index'),
	$model->id_recurso=>array('view','id'=>$model->id_recurso),
	'Update',
);

$this->menu=array(
	array('label'=>'Lista Recursos', 'url'=>array('index')),
	array('label'=>'Ingresar Recursos', 'url'=>array('create')),
	array('label'=>'Ver Recursos', 'url'=>array('view', 'id'=>$model->id_recurso)),
	array('label'=>'Administrar Recursos', 'url'=>array('admin')),
);
?>

<h1>Update Recursos <?php echo $model->id_recurso; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>