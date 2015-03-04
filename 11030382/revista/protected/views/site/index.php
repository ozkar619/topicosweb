<?php
	$this->widget('zii.widgets.CListView', array(
    	'dataProvider'=>$dataProvider,
    	'itemView'=>'_articulo',   // refers to the partial view named '_post'
    	'sortableAttributes'=>array(
    	),
	));
?>