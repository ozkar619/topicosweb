 <?php

class UsuariosController extends Controller
{
    public function actionIndex()
    {
        $this->render('index');
    }

    public function actionCreate()
 {
 $model=new Usuarios;
 
// Uncomment the following line if AJAX validation is needed
 // $this->performAjaxValidation($model);
 
if(isset($_POST['Usuarios']))
 {
 $model->attributes=$_POST['Usuarios'];
 $model->pass_usuario=md5($model->pass_usuario); //Esta es la linea que se debe agregar
 if($model->save())
 $this->redirect(array('view','id'=>$model->id_usuario));
 }
 
$this->render('create',array(
 'model'=>$model,
 ));
 }
 
 public function actionUpdate($id)
 {
 $model=$this->loadModel($id);
 
if(isset($_POST['Usuarios']))
 {
 $model->attributes=$_POST['Usuarios'];
 
 $model->pass_usuario=md5($model->pass_usuario); //Esta es la linea que se debe agregar
 if($model->save())
 $this->redirect(array('view','id'=>$model->id_usuario));
 }
 
$this->render('update',array(
 'model'=>$model,
 ));
 }

 public function accessRules()
 {
 return array(
 array('allow', // allow all users to perform 'index' and 'view' actions
 'actions'=>array('index','view'),
 'users'=>array('*'),
 ),
 array('allow', // allow authenticated user to perform 'create' and 'update' actions
 'actions'=>array('create','update'),
 'users'=>array('@'),
 ),
 array('allow', // allow admin user to perform 'admin' and 'delete' actions
 'actions'=>array('admin','delete'),
 'users'=>array('admin'),
 ),
 array('deny', // deny all users
 'users'=>array('*'),
 ),
 );
 }
 

    // Uncomment the following methods and override them if needed
    /*
    public function filters()
    {
        // return the filter configuration for this controller, e.g.:
        return array(
            'inlineFilterName',
            array(
                'class'=>'path.to.FilterClass',
                'propertyName'=>'propertyValue',
            ),
        );
    }

    public function actions()
    {
        // return external action classes, e.g.:
        return array(
            'action1'=>'path.to.ActionClass',
            'action2'=>array(
                'class'=>'path.to.AnotherActionClass',
                'propertyName'=>'propertyValue',
            ),
        );
    }
    */
} 
