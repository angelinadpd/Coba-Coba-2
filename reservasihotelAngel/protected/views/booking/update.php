<?php
/* @var $this BookingController */
/* @var $model Booking */

$this->breadcrumbs=array(
	'Data Booking'=>array('index'),
	$model->idbooking=>array('view','id'=>$model->idbooking),
	'Update',
);

$this->menu=array(
	array('label'=>'List Booking', 'url'=>array('index')),
	array('label'=>'Create Booking', 'url'=>array('create')),
	array('label'=>'View Booking', 'url'=>array('view', 'id'=>$model->idbooking)),
	array('label'=>'Manage Booking', 'url'=>array('admin')),
);
?>

<h1>Update Booking <?php echo $model->idbooking; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>