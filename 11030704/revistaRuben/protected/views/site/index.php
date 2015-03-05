<<<<<<< HEAD
<?php
/* @var $this SiteController */

$this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProvider,
    'itemView'=>'_revista',   // refers to the partial view named '_post'
    'sortableAttributes'=>array(
    ),
));

$this->widget('zii.widgets.CListView', array(
    'dataProviderArticulo'=>$dataProviderArticulo,
    'itemView'=>'_articulo',   // refers to the partial view named '_post'
    'sortableAttributes'=>array(
    ),
));
?>
<?php
/* @var $this SiteController */

$this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProvider,
    'itemView'=>'_articulo',   // refers to the partial view named '_post'
    'sortableAttributes'=>array(
    ),
));
>>>>>>> 9a1deca70ffc4ba529c678573ff847f73ce5a900
