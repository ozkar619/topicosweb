<?php
/* @var $this IndiceArticuloController */
/* @var $model IndiceArticulo */

$this->breadcrumbs=array(
	'Indice Articulos'=>array('index'),
	$model->id_indice_articulo=>array('view','id'=>$model->id_indice_articulo),
	'Update',
);

$this->menu=array(
	array('label'=>'Lista de IndiceArticulo', 'url'=>array('index')),
	array('label'=>'Crear IndiceArticulo', 'url'=>array('create')),
	array('label'=>'Vista de IndiceArticulo', 'url'=>array('view', 'id'=>$model->id_indice_articulo)),
	array('label'=>'Administrar IndiceArticulo', 'url'=>array('admin')),
);
?>

<h1>Acutalizar IndiceArticulo <?php echo $model->id_indice_articulo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>