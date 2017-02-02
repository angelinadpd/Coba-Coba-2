<?php
/* @var $this BookingController */
/* @var $model Booking */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idbooking'); ?>
		<?php echo $form->textField($model,'idbooking'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tanggal'); ?>
		<?php echo $form->textField($model,'tanggal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jam'); ?>
		<?php echo $form->textField($model,'jam'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idkamar'); ?>
		<?php echo $form->textField($model,'idkamar'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lama'); ?>
		<?php echo $form->textField($model,'lama'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'harga'); ?>
		<?php echo $form->textField($model,'harga'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'totalbayar'); ?>
		<?php echo $form->textField($model,'totalbayar'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idhotel'); ?>
		<?php echo $form->textField($model,'idhotel'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->