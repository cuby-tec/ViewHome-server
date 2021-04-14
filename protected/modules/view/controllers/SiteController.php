<?php
/*
 * module: view
 */

class SiteController extends Controller
{
    
    public function init(){
       // use layout in current module.
       // In layout 'column1' should be write
        // $this->beginContent('/layouts/main'); 
        $this->layout = 'column1';
    }
    
    
	public function actionIndex()
	{
    
		$this->render('index');
// 	    $this->redirect('index.php?r=view/site/login');
// 	    $this->render('login');
	}
	
	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
	    $model=new LoginForm;

	    // collect user input data
	    if(isset($_POST['LoginForm']))
	    {
	        $model->attributes=$_POST['LoginForm'];
	        // validate user input and redirect to the previous page if valid
	        if($model->validate() && $model->login()){
// 	            $this->redirect(Yii::app()->user->returnUrl);
	            $this->redirect('index.php?r=view/site');
 	            $msg = var_export(Yii::app()->user->returnUrl,true) ;
 	            Yii::log($msg, 'warning');
 	            Yii::getLogger()->flush(true);
	        }
	    }

	    // display the login form
	    $this->render('login',array('model'=>$model));
	    
	}
	
	
	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
	    Yii::app()->user->logout();
// 	    $this->redirect(Yii::app()->homeUrl);
	    $this->redirect('index.php?r=view/site');
// 	    $this->redirect('view/site');
	}
	
	/**
	 * Displays the register page
	 */
	public function actionRegister() {
	    $model = new User();
	    
	    $this->render('register',array('model'=>$model));
	    
	}
	
}