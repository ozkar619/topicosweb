  <div class="col-xs-6 col-lg-4">
  <h2><?php echo $data->nombre?></h2>
              <p>
              <?php echo $data->titulo;?>

              </p>

 <?php $this->widget('zii.widgets.CDetailView',
 array(
 'data'=>$data->nombre,
 'attributes'=>array(
  array('label'=>'nombre',
  		'value'=>$data->nombre,),
  array('label'=>'',
  		'type'=>'raw',
  		'value'=>html_entity_decode
  		                   (CHtml::image(Yii::app()->baseUrl.'/img/'.$data->portada,'portada',
  		                   	array('width'=>100,'height'=>150)))
  		       
  ),
))); ?>
<p><a class="btn btn-default" href="#" role="button">Detalles &raquo;</a></p>

  </div><!--/.col-xs-6.col-lg-4-->


