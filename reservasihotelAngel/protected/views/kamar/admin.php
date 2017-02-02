<?php
/* @var $this KamarController */
/* @var $model Kamar */

$this->breadcrumbs=array(
	'Data Kamar'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Kamar', 'url'=>array('index')),
	array('label'=>'Create Kamar', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#kamar-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Kamar</h1>


<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'kamar-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		/*'idkamar',*/
		'idhotel',
		'jenis',
		'harga',
		'status',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
