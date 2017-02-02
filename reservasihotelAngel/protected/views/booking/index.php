<?php
/* @var $this BookingController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Data Booking',
);

$this->menu=array(
	array('label'=>'Create Booking', 'url'=>array('create'),'visible'=>!Yii::app()->user->isGuest),
	array('label'=>'Pencarian Data', 'url'=>array('admin'),'visible'=>!Yii::app()->user->isGuest),
);
?>

<h1>Data Booking</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
