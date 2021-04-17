<?php

/**
 * This is the model class for table "media".
 *
 * The followings are the available columns in table 'media':
 * @property integer $id
 * @property string $link
 * @property string $create_time
 * @property integer $type
 * @property integer $device
 */
class Media extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'media';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('link, device', 'required'),
			array('type, device', 'numerical', 'integerOnly'=>true),
			array('link', 'length', 'max'=>256),
			array('create_time', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, link, create_time, type, device', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'link' => 'Link',
			'create_time' => 'Create Time',
			'type' => 'Type',
			'device' => 'Device',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('link',$this->link,true);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('type',$this->type);
		$criteria->compare('device',$this->device);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	
	/**
	 * retern last image file for device id.
	 * @param array $param
	 */
	public function getLastFlePath(int $device_id)
	{
	    //select link from media where device = 2 AND create_time = (select MAX(create_time) from media where device=2);
	    $sql = 'select link from media where device = :device_id AND 
            create_time = (select MAX(create_time) from media where device=:device_id);';
	    
	    $params = array('device_id'=>$device_id);
	    
	    $data = Media::model()->findBySql($sql,$params);
	    return $data->link;
	}
	
	
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Media the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
