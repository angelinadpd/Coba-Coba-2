<?php
/* @var $this BookingController */
/* @var $model Booking */

$this->breadcrumbs=array(
	'Data Booking'=>array('index'),
	$model->idbooking,
);

$this->menu=array(
	array('label'=>'List Booking', 'url'=>array('index')),
	array('label'=>'Create Booking', 'url'=>array('create')),
	array('label'=>'Update Booking', 'url'=>array('update', 'id'=>$model->idbooking)),
	array('label'=>'Delete Booking', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idbooking),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Booking', 'url'=>array('admin')),
);
?>

<h3>Data booking <?php echo $model->idbooking; ?></h3>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idbooking',
		'tanggal',
		'jam',
		'idkamar',
		'lama',
		'harga',
		'totalbayar',
		'idhotel',
	),
)); ?>
