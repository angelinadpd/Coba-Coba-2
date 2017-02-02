<?php
/* @var $this AdminController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Data Admin',
);

$this->menu=array(
	array('label'=>'Create Admin', 'url'=>array('create'),'visible'=>!Yii::app()->user->isGuest),
	array('label'=>'Pencarian Data', 'url'=>array('admin'),'visible'=>!Yii::app()->user->isGuest),
);
?>

<h1>Data Admin</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
