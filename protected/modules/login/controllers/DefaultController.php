<?php

class DefaultController extends Controller
{
    
    public function init(){
        //$this->layoutPath = Yii::getPathOfAlias('login.views.layouts');
        $this->layout = 'main';
//         $this->layout = NULL;
    }
    
    
    
    
	public function actionIndex()
	{
		$this->render('index');
	}
	
	
}


