<<<<<<< HEAD
<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>

<div>
		<?php echo $content; ?>
=======
<?php $this->beginContent('//layouts/main'); ?>
<div>
	<?php echo $content; ?>
>>>>>>> 8fac4e8427c70af79aedd102932bbe52dccb1688
</div>
<div>
	<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'Operations',
		));
		$this->widget('zii.widgets.CMenu', array(
			'items'=>$this->menu,
			'htmlOptions'=>array('class'=>'operations'),
		));
		$this->endWidget();
	?>
</div>
<<<<<<< HEAD
=======

>>>>>>> 8fac4e8427c70af79aedd102932bbe52dccb1688
<?php $this->endContent(); ?>