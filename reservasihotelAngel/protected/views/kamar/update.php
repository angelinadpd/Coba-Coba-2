<?php
/* @var $this KamarController */
/* @var $model Kamar */

$this->breadcrumbs=array(
	'Data Kamar'=>array('index'),
	$model->idkamar=>array('view','id'=>$model->idkamar),
	'Update',
);

$this->menu=array(
	array('label'=>'List Kamar', 'url'=>array('index')),
	array('label'=>'Create Kamar', 'url'=>array('create')),
	array('label'=>'View Kamar', 'url'=>array('view', 'id'=>$model->idkamar)),
	array('label'=>'Manage Kamar', 'url'=>array('admin')),
);
?>

<h1>Update Kamar <?php echo $model->idkamar; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>