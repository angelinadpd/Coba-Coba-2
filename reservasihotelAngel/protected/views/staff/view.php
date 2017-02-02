<?php
/* @var $this StaffController */
/* @var $model Staff */

$this->breadcrumbs=array(
	'Data Staff'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Staff', 'url'=>array('index')),
	array('label'=>'Create Staff', 'url'=>array('create')),
	array('label'=>'Update Staff', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Staff', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Staff', 'url'=>array('admin')),
);
?>

<h3>Staff <?php echo $model->username; ?></h3>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		/*'id',*/
		'username',
		/*'password',*/
		'telp',
		'alamat',
		'status',
	),
)); ?>
