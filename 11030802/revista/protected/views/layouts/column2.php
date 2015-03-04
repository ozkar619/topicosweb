<<<<<<< HEAD
<?php $this->beginContent('//layouts/main'); ?>
<div>
	<?php echo $content; ?>
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

=======
<?php $this->beginContent('//layouts/main'); ?>
<div class="col-md-8">
		<?php echo $content; ?>
</div>
<div class="col-md-4">
	<div id="sidebar">
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
	</div><!-- sidebar -->
</div>
</div>
>>>>>>> 4337b7019fee661cee10d9e062aba4a6f4090dd6
<?php $this->endContent(); ?>