<?php
/* @var $this AdminController */
/* @var $data Admin */
?>

<div class="view">

	<b><?php echo CHtml::link(CHtml::encode($data->getAttributeLabel('username'),array('view','id'=>$data->id))); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->username),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telpon')); ?>:</b>
	<?php echo CHtml::encode($data->telp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alamat')); ?>:</b>
	<?php echo CHtml::encode($data->alamat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>

</div>
