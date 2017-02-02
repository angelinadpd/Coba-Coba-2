<?php
/* @var $this KamarController */
/* @var $model Kamar */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'kamar-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
<div class="span6">
  	<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'id'=>'kamar-form',
		));
		
	?>
    <p class="note">Isilah data dengan benar </p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Jenis Kamar'); ?>
		<?php echo $form->textField($model,'jenis',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'jenis'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Harga per Hari'); ?>
		<?php echo $form->textField($model,'harga'); ?>
		<?php echo $form->error($model,'harga'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Nama Hotel'); ?>
		<?php echo $form->dropDownList($model,'idhotel',CHtml::listData(hotel::model()->findAll(),'idhotel','nama')); ?>
		<?php echo $form->error($model,'idhotel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>
<div class="horizontal-bars-chart" style="height: 250px;width:100%;margin-top:15px; margin-bottom:15px;"></div>
	<?php $this->endWidget();?>
  </div>


</div><!-- form -->