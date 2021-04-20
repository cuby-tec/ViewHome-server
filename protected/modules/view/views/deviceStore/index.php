<?php
/* @var $this DeviceStoreController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Device Stores',
);

$this->menu=array(
	array('label'=>'Create DeviceStore', 'url'=>array('create')),
	array('label'=>'Manage DeviceStore', 'url'=>array('admin')),
);
?>

<h1>Device Stores</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
