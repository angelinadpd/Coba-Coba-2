<?php
/* @var $this KamarController */
/* @var $model Kamar */

$this->breadcrumbs=array(
	'Data Kamar'=>array('index'),
	$model->idkamar,
);

$this->menu=array(
	array('label'=>'List Kamar', 'url'=>array('index')),
	array('label'=>'Create Kamar', 'url'=>array('create')),
	array('label'=>'Update Kamar', 'url'=>array('update', 'id'=>$model->idkamar)),
	array('label'=>'Delete Kamar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idkamar),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Kamar', 'url'=>array('admin')),
);
?>

<h3>Kamar <?php echo $model->jenis; ?></h3>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		/*'idkamar',*/
		'jenis',
		'harga',
		'idhotel',
		'status',
	),
)); ?>
