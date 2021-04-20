<?php
/* @var $this DeviceStoreController */
/* @var $model DeviceStore */

$this->breadcrumbs=array(
	'Device Stores'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List DeviceStore', 'url'=>array('index')),
	array('label'=>'Create DeviceStore', 'url'=>array('create')),
	array('label'=>'View DeviceStore', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage DeviceStore', 'url'=>array('admin')),
);
?>

<h1>Update DeviceStore <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>