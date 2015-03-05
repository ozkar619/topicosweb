<?php
/* @var $this StatusController */
/* @var $model Status */

$this->breadcrumbs=array(
	'Statuses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Status', 'url'=>array('index')),
	array('label'=>'Manage Status', 'url'=>array('admin')),
);
?>

<h1>Create Status</h1>

<<<<<<< HEAD
<?php $this->renderPartial('_form', array('model'=>$model)); ?>
=======
<?php $this->renderPartial('_form', array('model'=>$model,'modelStatus'=>$modelStatus)); ?>
>>>>>>> 8fac4e8427c70af79aedd102932bbe52dccb1688
