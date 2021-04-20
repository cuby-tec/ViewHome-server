<?php
/* @var $this DeviceStoreController */
/* @var $model DeviceStore */

$this->breadcrumbs=array(
	'Device Stores'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List DeviceStore', 'url'=>array('index')),
	array('label'=>'Create DeviceStore', 'url'=>array('create')),
	array('label'=>'Update DeviceStore', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete DeviceStore', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DeviceStore', 'url'=>array('admin')),
);
?>

<h1>View DeviceStore #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'name',
		'description',
		'id',
		'create_time',
		'user',
	),
)); ?>
