<?php
/* @var $this BookingController */
/* @var $data Booking */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Kode Booking')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idbooking), array('view', 'id'=>$data->idbooking)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jam')); ?>:</b>
	<?php echo CHtml::encode($data->jam); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idkamar')); ?>:</b>
	<?php echo CHtml::encode($data->idkamar); ?>
	<br />

	<b><?php /* echo CHtml::encode($data->getAttributeLabel('lama')); ?>:</b>
	<?php echo CHtml::encode($data->lama); */?>

	<b><?php /*echo CHtml::encode($data->getAttributeLabel('harga')); ?>:</b>
	<?php echo CHtml::encode($data->harga); */?>

	<b><?php /*echo CHtml::encode($data->getAttributeLabel('totalbayar')); ?>:</b>
	<?php echo CHtml::encode($data->totalbayar); */?>

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('idhotel')); ?>:</b>
	<?php echo CHtml::encode($data->idhotel); ?>
	<br />

	*/ ?>

	<?php echo CHtml::link(CHtml::encode($data->idbooking), array('view', 'id'=>$data->idbooking)); ?>


</div>