<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Lista de Users', 'url'=>array('index')),
	array('label'=>'Crear Users', 'url'=>array('create')),
	array('label'=>'Actualizar Users', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Users', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Users', 'url'=>array('admin')),
);
?>

<h1>Vista de Users #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'username',
		'password',
	),
)); ?>
