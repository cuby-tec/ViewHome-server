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
    
    /**
     * Declares class-based actions.
     */
    public function actions()
    {
        return array(
            // captcha action renders the CAPTCHA image displayed on the contact page
            'captcha'=>array(
                'class'=>'CCaptchaAction',
                'backColor'=>0xFFFFFF,
            ),
            // page action renders "static" pages stored under 'protected/views/site/pages'
            // They can be accessed via: index.php?r=site/page&view=FileName
            'page'=>array(
                'class'=>'CViewAction',
            ),
        );
    }
    
    
    
	public function actionIndex()
	{
    
		$this->render('index');
// 	    $this->redirect('index.php?r=view/site/login');
// 	    $this->render('login');
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
	    if($error=Yii::app()->errorHandler->error)
	    {
	        if(Yii::app()->request->isAjaxRequest)
	            echo $error['message'];
	            else
	                $this->render('error', $error);
	    }
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
// 	    $model = new User();
        $model = new RegisterForm();
	    
        
        // collect user input data
        if(isset($_POST['RegisterForm']))
        { 
            $model->attributes=$_POST['RegisterForm'];
            // validate user input and redirect to the previous page if valid
            if($model->validate()){
                // 	            $this->redirect(Yii::app()->user->returnUrl);
//                 $msg = var_export($model,true) ;
//                 Yii::log($msg, 'warning');
//                 Yii::getLogger()->flush(true);
               if( $this->_store($model))
                    $this->redirect('index.php?r=view/site');
            }
            
        }
        
	    $this->render('register',array('model'=>$model));
	    
	}
	
	/**
	 * Store registration user data in database.
	 * @model of type RegisterForm.
	 */
	protected function _store(RegisterForm $model) {
	    /* 'username' => 'asdf',
	     * 'password' => '123',
	     * 'email' => 'asdfqweeqsdasdf@mail.ru'
	     */
	    $store = new User();
	    $store->username = $model->username;
	    $store->email = $model->email;
	    $store->password = $this->criptPassword($model->password);

// 	    $msg = var_export($store,true) ;
// 	    Yii::log($msg, 'warning');
// 	    Yii::getLogger()->flush(true);
        return ($store->save(FALSE,array('username','password','email')));
            
	    
	}
	
	protected function criptPassword(string $pass) {
	    $salt = substr(str_replace('+', '.', base64_encode(pack('N4', mt_rand(), mt_rand(), mt_rand(), mt_rand()))), 0, 22);
	    $param = '$'.implode('$',array("2y","07",$salt));
	    $pasenc = crypt($pass,$param);
	    return ($pasenc);
	}
	
}