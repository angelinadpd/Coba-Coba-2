<?php
/* @var $this HotelController */
/* @var $data Hotel */
?>

<div class="view">

	

	<b><?php echo CHtml::link(CHtml::encode($data->getAttributeLabel('Nama Hotel'),array('view','id'=>$data->idhotel))); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nama),array('view','id'=>$data->idhotel)); ?>
	<br />

	<b><?php /*echo CHtml::encode($data->getAttributeLabel('telp')); ?>:</b>
	<?php echo CHtml::encode($data->telp); */ ?>

	<b><?php echo CHtml::encode($data->getAttributeLabel('Alamat Hotel')); ?>:</b>
	<?php echo CHtml::encode($data->alamat); ?>

	<b><?php /*echo CHtml::encode($data->getAttributeLabel('detail')); ?>:</b>
	<?php echo CHtml::encode($data->detail); */ ?>
	<br />

<?php echo CHtml::link(CHtml::encode($data->idhotel), array('view', 'id'=>$data->idhotel)); ?>

</div>