










<?php
$this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProvider,
    'itemView'=>'_revista',   // refers to the partial view named '_post'
    'sortableAttributes'=>array(),
));

$this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProviderArticulo,
    'itemView'=>'_articulo',   // refers to the partial view named '_post'
    'sortableAttributes'=>array(),
));

?>
