<?php
/* @var $this MediaController */
/* @var $data Media */
?>
<?php Yii::app()->clientScript->registerCss('my_view'
    , ' .view img { position: relative;left: 100p;top: -40pt; }');?>
<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('link')); ?>:</b>
	<?php echo CHtml::encode($data->link); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_time')); ?>:</b>
	<?php echo CHtml::encode($data->create_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
	<?php echo CHtml::encode($data->type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('device')); ?>:</b>
	<?php echo CHtml::encode($data->device); ?>
	<br />
	
	<br />
	<b>image</b>
	<?php   
	$src = 'images'.'/'.($data->link);
	$alt = 'image name:'.$data->link;
	$htmlOptions = array('style'=>'border: 1px solid #ddd;border-radius: 4px;padding: 1px;width: 128px;display: block;margin-left: 150px;');
	echo CHTML::image($src,$alt,$htmlOptions) ?>
	?>


</div>