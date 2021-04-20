<?php
/* @var $this DeviceStoreController */
/* @var $model DeviceStore */

$this->breadcrumbs=array(
	'Device Stores'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DeviceStore', 'url'=>array('index')),
	array('label'=>'Manage DeviceStore', 'url'=>array('admin')),
);
?>

<h1>Create DeviceStore</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>