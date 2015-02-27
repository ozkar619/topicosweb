<?php
/* @var $this TipoContenidoController */
/* @var $model TipoContenido */

$this->breadcrumbs=array(
	'Tipo Contenidos'=>array('index'),
	$model->id_tipo_contenido=>array('view','id'=>$model->id_tipo_contenido),
	'Update',
);

$this->menu=array(
	array('label'=>'Lista TipoContenido', 'url'=>array('index')),
	array('label'=>'Ingresar TipoContenido', 'url'=>array('create')),
	array('label'=>'Ver TipoContenido', 'url'=>array('view', 'id'=>$model->id_tipo_contenido)),
	array('label'=>'Administrar TipoContenido', 'url'=>array('admin')),
);
?>

<h1>Update TipoContenido <?php echo $model->id_tipo_contenido; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>