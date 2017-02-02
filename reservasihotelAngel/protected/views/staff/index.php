<?php
/* @var $this StaffController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Data Staff',
);

$this->menu=array(
	array('label'=>'Create Staff', 'url'=>array('create'),'visible'=>!Yii::app()->user->isGuest),
	array('label'=>'Pencarian Data', 'url'=>array('admin'),'visible'=>!Yii::app()->user->isGuest),
);
?>

<h1>Data Staff</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
