<?php
/* @var $this KamarController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Data Kamar',
);

$this->menu=array(
	array('label'=>'Create Kamar', 'url'=>array('create'),'visible'=>!Yii::app()->user->isGuest),
	array('label'=>'Pencarian Data', 'url'=>array('admin'),'visible'=>!Yii::app()->user->isGuest),
);
?>

<h1>Data Kamar</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
