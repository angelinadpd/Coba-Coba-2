<?php
/* @var $this HotelController */
/* @var $model Hotel */

$this->breadcrumbs=array(
	'Data Hotel'=>array('index'),
	$model->idhotel,
);

$this->menu=array(
	array('label'=>'List Hotel', 'url'=>array('index')),
	array('label'=>'Create Hotel', 'url'=>array('create')),
	array('label'=>'Update Hotel', 'url'=>array('update', 'id'=>$model->idhotel)),
	array('label'=>'Delete Hotel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idhotel),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Hotel', 'url'=>array('admin')),
);
?>

<h1>Data Hotel <?php echo $model->nama; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		/*'idhotel',*/
		'nama',
		'telp',
		'alamat',
		'detail',
	),
)); ?>
