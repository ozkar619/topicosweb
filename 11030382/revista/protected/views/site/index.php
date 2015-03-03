<<<<<<< HEAD
<?php
	$this->widget('zii.widgets.CListView', array(
    	'dataProvider'=>$dataProvider,
    	'itemView'=>'_articulo',
    	'sortableAttributes'=>array(
    	),
	));

	$this->widget('zii.widgets.CListView', array(
    	'dataProvider'=>$data,
    	'itemView'=>'_revista',
    	'sortableAttributes'=>array(
    	),
	));

//	$this->widget('zii.widgets.CDetailView', array(
//    'data'=>$model,
//    'attributes'=>array(
//        'title',             // title attribute (in plain text)
//        'owner.name',        // an attribute of the related object "owner"
//        'description:html',  // description attribute in HTML
//        array(               // related city displayed as a link
//            'label'=>'City',
//            'type'=>'raw',
//            'value'=>CHtml::link(CHtml::encode($model->city->name),
//                                 array('city/view','id'=>$model->city->id)),
//        ),
//        ),
//	));
=======
<?php
	$this->widget('zii.widgets.CListView', array(
    	'dataProvider'=>$dataProvider,
    	'itemView'=>'_articulo',   // refers to the partial view named '_post'
    	'sortableAttributes'=>array(
    	),
	));
>>>>>>> d664bc42fbcbb99ec095d841329317726ad33266
?>