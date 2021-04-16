<?php
/**
 * RegisterForm class.
 * RegisterForm is the data structure for keeping
 * user register form data. It is used by the 'register' action of 'SiteController'.
 */
//     define( ERROR_USERNAME_INVALID , 1);

class RegisterForm extends CFormModel
{
    public $username;
    public $password;
    public $email;
    public $verifyCode;
    
    const ERROR_USERNAME_INVALID = 1 ;
    
    
    /**
     * Declares the validation rules.
     */
    public function rules()
    {
        return array(
            // username, password, email are required
            array('username, email, password', 'required'),
            // email has to be a valid email address
            array('email', 'email','checkMX'=>true),
            // verifyCode needs to be entered correctly
            array('username','_uniqueName',),
            array('verifyCode', 'captcha', 'allowEmpty'=>!CCaptcha::checkRequirements()),
        );
    }
    
    /**
     * Check is username exist in dataase.
     * @param array $attribute
     * @param array $params
     * $user = User::model()->find('username=?',array($username));
     */
    public function _uniqueName($attribute,$params)
    {
        // 	    $model = new User();
        $_username = $this->attributes[$attribute];
        $msg = var_export($this->attributes[$attribute], true); //$this->attributes
        Yii::log($msg, 'warning');
        Yii::getLogger()->flush(true);
        $user = User::model()->find('username=?',array($_username));
        if($user != NULL)
            $this->addError($attribute,  'Invalid user name.');
            
    }
    
    
    
    /**
     * Declares customized attribute labels.
     * If not declared here, an attribute would have a label that is
     * the same as its name with the first letter in upper case.
     */
    public function attributeLabels()
    {
        return array(
            'verifyCode'=>'Verification Code',
        );
    }
    
}