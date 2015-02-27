<?php
/* @var $this RevistaController */
/* @var $model Revista */

$this->breadcrumbs=array(
	'Revistas'=>array('index'),
	$model->id_revista=>array('view','id'=>$model->id_revista),
	'Update',
);

$this->menu=array(
	array('label'=>'Lista Revista', 'url'=>array('index')),
	array('label'=>'Ingresar Revista', 'url'=>array('create')),
	array('label'=>'Ver Revista', 'url'=>array('view', 'id'=>$model->id_revista)),
	array('label'=>'Administrar Revista', 'url'=>array('admin')),
);
?>

<h1>Update Revista <?php echo $model->id_revista; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>