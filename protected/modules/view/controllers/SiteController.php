<?php
/*
 * module: view
 */

class SiteController extends Controller
{
    
/*    public function init(){
        //$this->layoutPath = Yii::getPathOfAlias('login.views.layouts');
        $this->layout = 'main';
        //         $this->layout = NULL;
    }
  */  
    
	public function actionIndex()
	{
		$this->render('index');
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
	            $this->redirect(Yii::app()->user->returnUrl);
 	            $msg = var_export(Yii::app()->user->returnUrl,true) ;
 	            Yii::log($msg, 'warning');
 	            Yii::getLogger()->flush(true);
	        }
	    }

	    // display the login form
	    $this->render('login',array('model'=>$model));
	    
	}
	
	/**
	 * Displays the register page
	 */
	public function actionRegister() {
	    $model = new User();
	    
	    $this->render('register',array('model'=>$model));
	    
	}
	
}