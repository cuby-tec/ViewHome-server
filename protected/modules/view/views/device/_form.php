<?php
/* @var $this DeviceController */
/* @var $model Device */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'device-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
<!-- 
	<div class="row">
		<?php //echo $form->labelEx($model,'create_time'); ?>
		<?php //echo $form->textField($model,'create_time'); ?>
		<?php //echo $form->error($model,'create_time'); ?>
	</div>
	
	<div class="row">
		<?php //echo $form->labelEx($model,'update_time'); ?>
		<?php //echo $form->textField($model,'update_time'); ?>
		<?php //echo $form->error($model,'update_time'); ?>
	</div>
-->

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'key'); ?>
		<?php echo $form->textField($model,'key',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'key'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->