<?php
/* @var $this IndiceArticuloController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Indice Articulos',
);

$this->menu=array(
	array('label'=>'Ingresar IndiceArticulo', 'url'=>array('create')),
	array('label'=>'Administrar IndiceArticulo', 'url'=>array('admin')),
);
?>

<h1>Indice Articulos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
