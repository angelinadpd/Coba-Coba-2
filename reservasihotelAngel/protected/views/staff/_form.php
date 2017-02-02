<?php
/* @var $this StaffController */
/* @var $model Staff */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'staff-form',
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
		<?php echo $form->labelEx($model,'Username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Contact Person'); ?>
		<?php echo $form->textField($model,'telp',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'telp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Alamat'); ?>
		<?php echo $form->textArea($model,'alamat',array('size'=>35,'maxlength'=>35)); ?>
		<?php echo $form->error($model,'alamat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>5,'maxlength'=>5)); ?>
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