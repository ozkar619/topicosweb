<<<<<<< HEAD
<?php /* @var $this Controller */ ?>
=======
>>>>>>> 8fac4e8427c70af79aedd102932bbe52dccb1688
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<<<<<<< HEAD
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="<?PHP echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css" rel="stylesheet">


     <!-- Custom styles for this template -->
    <link href="<?PHP echo Yii::app()->request->baseUrl; ?>/css/dashboard.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
=======
    
    <!-- Bootstrap -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/dashboard.css" rel="stylesheet">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
>>>>>>> 8fac4e8427c70af79aedd102932bbe52dccb1688
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<<<<<<< HEAD
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
=======
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.min.js"></script>
>>>>>>> 8fac4e8427c70af79aedd102932bbe52dccb1688
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>


<<<<<<< HEAD

=======
>>>>>>> 8fac4e8427c70af79aedd102932bbe52dccb1688
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<<<<<<< HEAD
<div class="container-fluid">
=======
<div class="container-fluid" >
>>>>>>> 8fac4e8427c70af79aedd102932bbe52dccb1688

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

<<<<<<< HEAD
		<?php 
		/*$this->widget('zii.widgets.CMenu',array(
=======
	<div id="mainmenu">
		<?php /* $this->widget('zii.widgets.CMenu',array(
>>>>>>> 8fac4e8427c70af79aedd102932bbe52dccb1688
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
<<<<<<< HEAD
		)); */?>
	
=======
		)); */ ?> 
	</div><!-- mainmenu -->
>>>>>>> 8fac4e8427c70af79aedd102932bbe52dccb1688
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>
<<<<<<< HEAD
	
	<body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
=======


	<nav class="navbar navbar-inverse navbar-fixed-top">
>>>>>>> 8fac4e8427c70af79aedd102932bbe52dccb1688
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Help</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
<<<<<<< HEAD
            <li class="active"><a href="#">Overview <span class="sr-only">(current)</span></a></li>
=======
            <li class="active"><a href="?r=/site/index">Inicio <span class="sr-only">(current)</span></a></li>
>>>>>>> 8fac4e8427c70af79aedd102932bbe52dccb1688
            <li><a href="?r=articulo/create">Articulos</a></li>
            <li><a href="?r=revista/create">Revistas</a></li>
            <li><a href="?r=autor/create">Autores</a></li>
          </ul>
<<<<<<< HEAD
          <ul class="nav nav-sidebar">
            <li><a href="">Nav item</a></li>
            <li><a href="">Nav item again</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
            <li><a href="">More navigation</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Nav item again</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Dashboard</h1>
          <?php echo $content; ?>

          

          <h2 class="sub-header">Section title</h2>
          <div class="table-responsive">
          
          </div>
=======
          
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Dashboard</h1>
          	<?php echo $content; ?>
          <div class="row placeholders">
            
          </div>

          <h2 class="sub-header">Section title</h2>
          
>>>>>>> 8fac4e8427c70af79aedd102932bbe52dccb1688
        </div>
      </div>
    </div>

<<<<<<< HEAD
    <script src="<?PHP echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>
    <script src="<?PHP echo Yii::app()->request->baseUrl; ?>/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?PHP echo Yii::app()->request->baseUrl; ?>/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
=======
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
 
	
</body>
</html>
>>>>>>> 8fac4e8427c70af79aedd102932bbe52dccb1688
