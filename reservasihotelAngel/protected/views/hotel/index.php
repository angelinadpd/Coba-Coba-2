<?php
/* @var $this HotelController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Data Hotel',
);

$this->menu=array(
	array('label'=>'Create Hotel', 'url'=>array('create'),'visible'=>!Yii::app()->user->isGuest),
	array('label'=>'Pencarian Data', 'url'=>array('admin'),'visible'=>!Yii::app()->user->isGuest),
);
?>

<h1>Data Hotel</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
