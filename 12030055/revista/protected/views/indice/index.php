<?php
/* @var $this IndiceController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Indices',
);

$this->menu=array(
	array('label'=>'Ingresar Indice', 'url'=>array('create')),
	array('label'=>'Administrar Indice', 'url'=>array('admin')),
);
?>

<h1>Indices</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
