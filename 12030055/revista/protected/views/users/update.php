<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Lista de Users', 'url'=>array('index')),
	array('label'=>'Crear Users', 'url'=>array('create')),
	array('label'=>'Vista de Users', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Users', 'url'=>array('admin')),
);
?>

<h1>Acutalizar Users <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>