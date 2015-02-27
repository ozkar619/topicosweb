<?php
/* @var $this AutorController */
/* @var $model Autor */

$this->breadcrumbs=array(
	'Autors'=>array('index'),
	$model->id_autor=>array('view','id'=>$model->id_autor),
	'Update',
);

$this->menu=array(
	array('label'=>'Lista Autor', 'url'=>array('index')),
	array('label'=>'Ingresar Autor', 'url'=>array('create')),
	array('label'=>'Ver Autor', 'url'=>array('view', 'id'=>$model->id_autor)),
	array('label'=>'Administrar Autor', 'url'=>array('admin')),
);
?>

<h1>Update Autor <?php echo $model->id_autor; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>