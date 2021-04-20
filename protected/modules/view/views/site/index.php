<?php
/* @var $this SiteController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	$this->module->id,
);
?>
<h1><?php echo $this->uniqueId . '/' . $this->action->id; ?></h1>
<h1>Index page</h1>

<?php 

// sidebar
$this->menu=array(
    array('label'=>'List DeviceStore', 'url'=>array('index')),
    array('label'=>'Create DeviceStore', 'url'=>array('create')),
//     array('label'=>'Update DeviceStore', 'url'=>array('update', 'id'=>$model->id)),
//     array('label'=>'Delete DeviceStore', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
    array('label'=>'Manage DeviceStore', 'url'=>array('admin')),
);
?>

 
<h1>Device Stores</h1>

<?php
    $name = 'DropDownList';
    $select = 0;
//     $data = array('One'=>'dataOne','Two'=>'dataTwo','thre'=>'dataThre');
    $dataModel = DeviceStore::model()->findAll();
    $valueField =  'id'; //array('name');
    $textField = 'name';
    $data = CHtml::listData($dataModel, $valueField, $textField);
    echo CHtml::dropDownList($name, $select, $data);
?>

<?php 

$this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProvider,
    'itemView'=>'../deviceStore/_view',
)); 
?>

<p> This is the view content for action "<?php echo $this->action->id; ?>".
The action belongs to the controller "<?php echo get_class($this); ?>"
in the "<?php echo $this->module->id; ?>" module.
</p>
<p>
You may customize this page by editing <tt><?php echo __FILE__; ?></tt>
</p>