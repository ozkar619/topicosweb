<?php
/* @var $this ArticuloAutorController */
/* @var $model ArticuloAutor */

$this->breadcrumbs=array(
	'Articulo Autors'=>array('index'),
	$model->id_articulo_autor=>array('view','id'=>$model->id_articulo_autor),
	'Update',
);

$this->menu=array(
	array('label'=>'Lista de ArticuloAutor', 'url'=>array('index')),
	array('label'=>'Crear ArticuloAutor', 'url'=>array('create')),
	array('label'=>'Vista de ArticuloAutor', 'url'=>array('view', 'id'=>$model->id_articulo_autor)),
	array('label'=>'Administrar ArticuloAutor', 'url'=>array('admin')),
);
?>

<h1>Acutalizar ArticuloAutor <?php echo $model->id_articulo_autor; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>