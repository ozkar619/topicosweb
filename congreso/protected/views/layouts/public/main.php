<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>CITEC</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
  <link id="callCss" rel="stylesheet" href="themes/css/bootstrap.min.css" type="text/css" media="screen" charset="utf-8" />

  <link id="callCss"rel="stylesheet" href="themes/css/style.css" type="text/css" media="screen" charset="utf-8" />
  <link href="themes/css/bootstrap-responsive.min.css" rel="stylesheet">

</head>
<body>
  <div id="headerSection">
  <div class="container">
  <div class="span3 logo"><a href="#"><img src="themes/img/super_logo2.png" alt="" /></a></div>
    
    <div class="navbar">
    
      
      <div class="nav-collapse">
        <ul class="nav">
          <li><a href="#ourServices">Información</a></li>
          <li><a href="#portfolioSection">Especificaciones</a></li>
          <li><a href="#meetourteamSection">Ponentes</a></li>
          <!--<li><a href="#recentpostSection">Blog</a></li>-->
          <li><a href="#contactSection">Registro</a></li>
          <?php if(Yii::app()->user->isGuest): ?>
              <li><a href="?r=site/login">Iniciar Sesión</a></li>
            <?php else: ?>
              <li><a href="?r=site/logout">Cerrar Sesión</a></li>
            <?php endif; ?>
        </ul>
      </div>
      
      <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
  </div>
  </div>
<!--Header Ends================================================ -->

<div id="carouselSection" class="cntr"> 
      <div class="carousel-inner">
        <div class="item active">
          <a class="cntr" href="#"><img src="themes/img/citec_logo.png" alt=""></a>
        </div>
      </div>   
</div>

<!-- Sectionone block ends======================================== -->
 

<!-- Our Services======================================== -->
<div id="ourServices">  
<div class="container"> 
        <div class="row">
                
                <div class="row-fluid">
      <div class="span4">
      
      <div class="info-img">
        <img src="themes/img/calendar.png" ></div>
        <h4>¿Cuándo?</h4>
        <p>Aquí pondremos la fecha cuando la sepamos XD </p>
      </div>
      <div class="span4">
        <div class="info-img"><img src="themes/img/where.png" ></div>
        <h4>¿Dónde?</h4>
         <p>El evento se llevará acabo en el INSTITUTO TECNOLÓGICO DE CELAYA CAMPUS II</p>
      </div>
      <a href="https://www.facebook.com/events/1420970331536992/">
      <div class="span4">
        <div class="info-img"><img src="themes/img/facebook.png"></div>
        <h4>Redes Sociales</h4>
         <p>Visítanos para conocer los más recientes aconteceres del evento.</p>
      </div>
      </a>
    </div>
    
    
    
    
    
    
</div>
</div>
</div>

<!-- Our Portfolio======================================== -->
<div id="portfolioSection">
<div class="span6"><h1 class="cntr">Especificaciones</h1>
<p>En esta sección ecnontrarás todo lo que necesitas saber acerca del evento. Haz clic sobre la opción que desees ver en el menú de abajo.</p></div>
<div class="container"> 
  <ul class="nav nav-pills">
  <li class="active"><a href="#all" data-toggle="tab">COSTOS</a></li>
    <li><a href="#web" data-toggle="tab">CALENDARIO</a></li>
    <li><a href="#mobile" data-toggle="tab">CONVOCATORIA</a></li>
    <li><a href="#photo" data-toggle="tab">MÁS INFORMACIÓN</a></li>
    
  </ul>
<div class="clr"></div>
<div class="tabbable tabs">
<div class="tab-content label-primary">

  <div class="tab-pane active" id="all">
  <ul class="thumbnails">
  
    <li class="span4">
      <div class="thumbnail">
        <div class="blockDtl">
        <a href="#myModal1" role="button"  data-toggle="modal"><img src="themes/img/img-4.png" alt=""></a>
        </div>
      </div>
    </li>
    <li class="span4">
      <div class="thumbnail">
        <div class="blockDtl">
        <a href="#"><img src="themes/img/img-5.png" alt=""></a>
        </div>
      </div>
    </li>
    <li class="span4">
      <div class="thumbnail">
        <div class="blockDtl">
        <a href="#"><img src="themes/img/img-6.png" alt=""></a>
        </div>
      </div>
    </li><li class="span4">
      <div class="thumbnail">
        <div class="blockDtl">
        <a href="#"><img src="themes/img/img-7.png" alt=""></a>
        </div>
      </div>
    </li><li class="span4">
      <div class="thumbnail">
        <div class="blockDtl">
        <a href="#"><img src="themes/img/img-8.png" alt=""></a>
        </div>
      </div>
    </li>
    <li class="span4">
      <div class="thumbnail">
        <div class="blockDtl">
        <a href="#"><img src="themes/img/img-9.png" alt=""></a>
        </div>
      </div>
    </li>   
    
      
  </ul>
    
  </div>
  
  <div class="tab-pane" id="web">
  <ul class="thumbnails">
  
    <li class="span4">
      <div class="thumbnail">
        <div class="blockDtl">
        <a href="#myModal1" role="button" data-toggle="modal"><img src="themes/img/img-5.png" alt=""></a>
        </div>
      </div>
    </li>
    <li class="span4">
      <div class="thumbnail">
        <div class="blockDtl">
        <a href="#"><img src="themes/img/img-4.png" alt=""></a>
        </div>
      </div>
    </li>
    <li class="span4">
      <div class="thumbnail">
        <div class="blockDtl">
        <a href="#"><img src="themes/img/img-6.png" alt=""></a>
        </div>
      </div>
    </li><li class="span4">
      <div class="thumbnail">
        <div class="blockDtl">
        <a href="#"><img src="themes/img/img-7.png" alt=""></a>
        </div>
      </div>
    </li><li class="span4">
      <div class="thumbnail">
        <div class="blockDtl">
        <a href="#"><img src="themes/img/img-8.png" alt=""></a>
        </div>
      </div>
    </li>
    <li class="span4">
      <div class="thumbnail">
        <div class="blockDtl">
        <a href="#"><img src="themes/img/img-9.png" alt=""></a>
        </div>
      </div>
    </li>   
    
      
  </ul>
    
  </div>
  
  <div class="tab-pane" id="mobile">
  <ul class="thumbnails">
  
    <li class="span4">
      <div class="thumbnail">
        <div class="blockDtl">
        <a href="#myModal1" role="button" data-toggle="modal"><img src="themes/img/img-5.png" alt=""></a>
        </div>
      </div>
    </li>
    <li class="span4">
      <div class="thumbnail">
        <div class="blockDtl">
        <a href="#"><img src="themes/img/img-6.png" alt=""></a>
        </div>
      </div>
    </li>
    <li class="span4">
      <div class="thumbnail">
        <div class="blockDtl">
        <a href="#"><img src="themes/img/img-4.png" alt=""></a>
        </div>
      </div>
    </li><li class="span4">
      <div class="thumbnail">
        <div class="blockDtl">
        <a href="#"><img src="themes/img/img-7.png" alt=""></a>
        </div>
      </div>
    </li><li class="span4">
      <div class="thumbnail">
        <div class="blockDtl">
        <a href="#"><img src="themes/img/img-8.png" alt=""></a>
        </div>
      </div>
    </li>
    <li class="span4">
      <div class="thumbnail">
        <div class="blockDtl">
        <a href="#"><img src="themes/img/img-9.png" alt=""></a>
        </div>
      </div>
    </li>   
    
      
  </ul>
    
  </div>
  
  <div class="tab-pane" id="photo">
  <ul class="thumbnails">
  
    <li class="span4">
      <div class="thumbnail">
        <div class="blockDtl">
        <a href="#myModal1" role="button" data-toggle="modal"><img src="themes/img/img-7.png" alt=""></a>
        </div>
      </div>
    </li>
    <li class="span4">
      <div class="thumbnail">
        <div class="blockDtl">
        <a href="#"><img src="themes/img/img-4.png" alt=""></a>
        </div>
      </div>
    </li>
    <li class="span4">
      <div class="thumbnail">
        <div class="blockDtl">
        <a href="#"><img src="themes/img/img-6.png" alt=""></a>
        </div>
      </div>
    </li>
    
  
      
  </ul>
    
  </div>
  
  
  
  
    <a href="#" class="btn btn-large btn-primary disabled">SHOW MORE</a>

  
  
</div>
</div>
</div>
</div>





<!-- Blog Section -->
<div id="blogSection">
 
 <div class="container">
   
   <div class="row span12"> 
    
        
        <div class="span8">
        
    <div class="inner">
    <h1>Lineamientos</h1>
    <p>En esete documento encontrará la especificación de lineamientos requeridos para la publicación de artículos</p>
        
        <a href="#" class="btn btn-large btn-primary">Ver Documento</a>
    </div>
        
        </div>
        
        <div class="span4">
          <img src="themes/img/lineamientos.png" alt="" />
        </div>
        
   </div>
        
        <hr class="soften clear"/>
        
    <div class="row span12">  
    
        <div class="span4">
          <img src="themes/img/formato.png" alt="" />
        </div>
        
        <div class="span8">
        
    <div class="inner">
    <h1>Formato</h1>
    <p>Conozca y descargue el formato a utilizar para el artículo final.</p>
        
        <a href="#" class="btn btn-large btn-primary">Ver Documento</a>
    </div>
        
        </div>
        
       
        
   </div>    
      
   
  </div>
</div>

<!-- Meet our team======================================== -->
<div id="meetourteamSection">
<div class="span6"><h1 class="cntr">Ponentes</h1>
<p>Estos serán los ponentes (y sus proyectos) con los que contaremos durante el evento. </p></div>
<div class="container"> 
  
<div class="tabbable tabs">
<div class="tab-content label-primary">

  <div class="tab-pane active" id="all">
  <ul class="thumbnails">
  
    <li class="span4">
      <div class="thumbnail">
        <div class="blockDtl">
        <a href="#" ><img src="themes/img/img-11.png" alt=""></a>
                <h4>JOHN SMITH</h4>
                <h5>Proyecto</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et quam est. </p>
                <a class="facebook" href="#"></a>
                    <a class="twitter" href="#"></a>
                    <a class="pin" href="#"></a>
        </div>
      </div>
    </li>
    <li class="span4">
      <div class="thumbnail">
        <div class="blockDtl">
        <a href="#"><img src="themes/img/img-11.png" alt=""></a>
                <h4>JOHN SMITH</h4>
                <h5>Proyecto</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et quam est. </p>
                <a class="facebook" href="#"></a>
                    <a class="twitter" href="#"></a>
                    <a class="pin" href="#"></a>
        </div>
      </div>
    </li>
    <li class="span4">
      <div class="thumbnail">
        <div class="blockDtl">
        <a href="#"><img src="themes/img/img-11.png" alt=""></a>
                <h4>JOHN SMITH</h4>
                <h5>Proyecto</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et quam est. </p>
                <a class="facebook" href="#"></a>
                    <a class="twitter" href="#"></a>
                    <a class="pin" href="#"></a>
        </div>
      </div>
    </li>
    
      
  </ul>
   
    
  </div>
  
  
  
  

  
  
</div>
</div>
</div>
</div>

<!-- recent post======================================== -->
<!--<div id="recentpostSection">
<div class="span6"><h1 class="cntr">RECENT POST</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et quam est. Mauris faucibus tellus ac auctor posuere. </p></div>
<div class="container"> 
  
<div class="tabbable tabs">
<div class="tab-content label-primary">

  <div class="tab-pane active" id="all">
  <ul class="thumbnails">
  
    <li class="span4">
      <div class="thumbnail">
        <div class="blockDtl">
        <a href="#" ><img src="themes/img/img-12.png" alt=""></a>
                <h4>Really Interesting Post</h4>
                <h6>October 27</h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et quam est. </p>
                
        </div>
      </div>
    </li>
    <li class="span4">
      <div class="thumbnail">
        <div class="blockDtl">
        <a href="#"><img src="themes/img/img-12.png" alt=""></a>
                <h4>Really Interesting Post</h4>
                <h6>October 27</h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et quam est. </p>
                
        </div>
      </div>
    </li>
    <li class="span4">
      <div class="thumbnail">
        <div class="blockDtl">
        <a href="#"><img src="themes/img/img-12.png" alt=""></a>
                <h4>Really Interesting Post</h4>
                <h6>October 27</h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et quam est. </p>
               
        </div>
      </div>
    </li>
    
      
  </ul>
   <a href="#" class="btn btn-large btn-primary disabled">SHOW MORE</a>
    
  </div>
  
  
  
  

  
  
</div>
</div>
</div>
</div>


<!-- Contact Section -->
<div id="contactSection">
<div class="span6"><h1 class="cntr">Registro</h1>
<p>Por favor llene el siguiente formulario para registrarse como participante en el evento CITEC; ya sea como congresista o ponente.</p></div>
  <div class="container"> 
    <div class="row"> 
    <div class="span8">
      
      <form class="form-horizontal">
        <fieldset>
          <div class="control-group">
          
          <div class="controls">
            <input type="text" class="input-xlarge" id="input01" >
           
          </div>
          </div>
           <div class="control-group">
          
          <div class="controls">
            <input type="text" class="input-xlarge" id="input11">
           
          </div>
          </div>
           <div class="control-group">
          
          <div class="controls">
            <textarea class="input-xlarge" id="textarea" rows="3" style="height:210px"></textarea>
          </div>
          </div>
          
         
          <button type="submit" class="btn btn-large btn-primary disabled">Enviar</button>
          
        </fieldset>
        </form>
    </div> 
    
    
    </div> 
    </div> 
        
     <div class="footerSection container">
  
       
                <div class=" span4 socialicon">
                    <a class="facebook" href="http://www.facebook.com/xtendify"></a>
                    <a class="twitter" href="http://www.twitter.com/xtendify"></a>
                    <a class="html5" href="#"></a>
                    <a class="icon2" href="#"></a>
                </div>
                
        
  
    <div class="span8 copyright"><p>  Instituto Tecnológico de Celaya | CITEC  </p></div>
  </div>

        
        
        
</div> 
<!-- Wrapper end -->


<a href="#" class="go-top" ><i class="icon-arrow-up"></i></a>

<!-- Javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

<script src="themes/js/jquery-1.9.1.min.js"></script>
<script src="themes/js/bootstrap.min.js" type="text/javascript"></script>
<script src="themes/js/jquery.scrollTo-1.4.3.1-min.js" type="text/javascript"></script>
<script src="themes/js/jquery.easing-1.3.min.js"></script>
<script src="themes/js/default.js"></script>

<script type="text/javascript">

  $(document).ready(function() {
  $('#myCarousel').carousel({
    interval: 7000
  });
  
  });
  
  
  
  
 
</script>










</body>
</html>