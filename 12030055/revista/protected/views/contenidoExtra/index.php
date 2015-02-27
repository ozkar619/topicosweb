<?php
/* @var $this ContenidoExtraController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Contenido Extras',
);

$this->menu=array(
	array('label'=>'Ingresar ContenidoExtra', 'url'=>array('create')),
	array('label'=>'Administrar ContenidoExtra', 'url'=>array('admin')),
);
?>

<h1>Contenido Extras</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
