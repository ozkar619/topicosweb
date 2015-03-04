<?php
/* @var $this IndiceArticuloController */
/* @var $model IndiceArticulo */

$this->breadcrumbs=array(
	'Indice Articulos'=>array('index'),
	$model->id_indice_articulo=>array('view','id'=>$model->id_indice_articulo),
	'Update',
);

$this->menu=array(
	array('label'=>'Lista IndiceArticulo', 'url'=>array('index')),
	array('label'=>'Ingresar IndiceArticulo', 'url'=>array('create')),
	array('label'=>'Ver IndiceArticulo', 'url'=>array('view', 'id'=>$model->id_indice_articulo)),
	array('label'=>'Administrar IndiceArticulo', 'url'=>array('admin')),
);
?>

<h1>Update IndiceArticulo <?php echo $model->id_indice_articulo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>