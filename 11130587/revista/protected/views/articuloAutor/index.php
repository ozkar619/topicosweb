<?php
/* @var $this ArticuloAutorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Articulo Autors',
);

$this->menu=array(
	array('label'=>'Crear ArticuloAutor', 'url'=>array('create')),
	array('label'=>'Administrar ArticuloAutor', 'url'=>array('admin')),
);
?>

<h1>Articulo Autores</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
