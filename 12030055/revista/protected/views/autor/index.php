<?php
/* @var $this AutorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Autors',
);

$this->menu=array(
	array('label'=>'Ingresar Autor', 'url'=>array('create')),
	array('label'=>'Administrar Autor', 'url'=>array('admin')),
);
?>

<h1>Autors</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
