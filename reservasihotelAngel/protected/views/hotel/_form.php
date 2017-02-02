<?php
/* @var $this HotelController */
/* @var $model Hotel */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'hotel-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>
<div class="span6">
  	<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'id'=>'hotel-form',
		));
		
	?>

	<p class="note">Isilah data dengan benar </p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Nama Hotel'); ?>
		<?php echo $form->textField($model,'nama',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'nama'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Contact Hotel'); ?>
		<?php echo $form->textField($model,'telp',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'telp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Alamat Hotel'); ?>
		<?php echo $form->textArea($model,'alamat',array('size'=>35,'maxlength'=>35)); ?>
		<?php echo $form->error($model,'alamat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Detail Hotel'); ?>
		<?php echo $form->textArea($model,'detail',array('size'=>60,'maxlength'=>400)); ?>
		<?php echo $form->error($model,'detail'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>
<div class="horizontal-bars-chart" style="height: 250px;width:100%;margin-top:15px; margin-bottom:15px;"></div>
	<?php $this->endWidget();?>
  </div>

</div><!-- form -->