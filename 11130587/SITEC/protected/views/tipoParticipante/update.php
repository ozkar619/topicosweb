<?php
/* @var $this TipoParticipanteController */
/* @var $model TipoParticipante */

$this->breadcrumbs=array(
	'Tipo Participantes'=>array('index'),
	$model->id_tipo=>array('view','id'=>$model->id_tipo),
	'Update',
);

$this->menu=array(
	array('label'=>'List TipoParticipante', 'url'=>array('index')),
	array('label'=>'Create TipoParticipante', 'url'=>array('create')),
	array('label'=>'View TipoParticipante', 'url'=>array('view', 'id'=>$model->id_tipo)),
	array('label'=>'Manage TipoParticipante', 'url'=>array('admin')),
);
?>

<h1>Update TipoParticipante <?php echo $model->id_tipo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>