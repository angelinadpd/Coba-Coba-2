<?php
/* @var $this HotelController */
/* @var $model Hotel */

$this->breadcrumbs=array(
	'Hotel'=>array('index'),
	$model->idhotel=>array('view','id'=>$model->idhotel),
	'Update',
);

$this->menu=array(
	array('label'=>'List Hotel', 'url'=>array('index')),
	array('label'=>'Create Hotel', 'url'=>array('create')),
	array('label'=>'View Hotel', 'url'=>array('view', 'id'=>$model->idhotel)),
	array('label'=>'Manage Hotel', 'url'=>array('admin')),
);
?>

<h1>Update Hotel <?php echo $model->idhotel; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>