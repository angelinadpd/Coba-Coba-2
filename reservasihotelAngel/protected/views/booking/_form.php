<?php
/* @var $this BookingController */
/* @var $model Booking */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'booking-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
<div class="span6">
  	<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'id'=>'booking-form',
		));
		
	?>


	<p class="note">Isilah data dengan benar</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php  echo $form->labelEx($model,'Kode Booking'); ?>
		<?php echo $form->textField($model,'idbooking'); ?>
		<?php echo $form->error($model,'idbooking'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'Tanggal Booking'); ?>
		<?php echo $form->textField($model,'tanggal'); ?>
		<?php echo $form->error($model,'tanggal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Jam Booking'); ?>
		<?php echo $form->textField($model,'jam'); ?>
		<?php echo $form->error($model,'jam'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Jenis Kamar'); ?>
		<?php echo $form->dropDownList($model,'idkamar',CHtml::listData(kamar::model()->findAll(),'idkamar','jenis')); ?>
		<?php echo $form->error($model,'idkamar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Lama Menginap'); ?>
		<?php echo $form->textField($model,'lama'); ?>
		<?php echo $form->error($model,'lama'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Harga per Hari'); ?>
		<?php echo $form->textField($model,'harga'); ?>
		<?php echo $form->error($model,'harga'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Total Bayar'); ?>
		<?php echo $form->textField($model,'totalbayar'); ?>
		<?php echo $form->error($model,'totalbayar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Nama Hotel'); ?>
		<?php echo $form->dropDownList($model,'idhotel',CHtml::listData(hotel::model()->findAll(),'idhotel','nama')); ?>
		<?php echo $form->error($model,'idhotel'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Save'); ?>
	</div>


<?php $this->endWidget(); ?>
<div class="horizontal-bars-chart" style="height: 250px;width:100%;margin-top:15px; margin-bottom:15px;"></div>
	<?php $this->endWidget();?>
  </div>

</div><!-- form -->