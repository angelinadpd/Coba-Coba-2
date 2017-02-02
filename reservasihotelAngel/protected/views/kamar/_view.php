<?php
/* @var $this KamarController */
/* @var $data Kamar */
?>

<div class="view">

	<b><?php /*echo CHtml::encode($data->getAttributeLabel('idkamar')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idkamar), array('view', 'id'=>$data->idkamar)); */?>

	<b><?php echo CHtml::link(CHtml::encode($data->getAttributeLabel('Jenis Hotel'),array('view','id'=>$data->idkamar))); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->jenis),array('view','id'=>$data->idkamar)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('harga')); ?>:</b>
	<?php echo CHtml::encode($data->harga); ?>
	<br />

	<b><?php /*echo CHtml::encode($data->getAttributeLabel('idhotel')); ?>:</b>
	<?php echo CHtml::encode($data->idhotel); */?>

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

<?php echo CHtml::link(CHtml::encode($data->idkamar), array('view', 'id'=>$data->idkamar)); ?>


</div>