<?php
/* @var $this GuideCatController */
/* @var $model GuideCat */

$this->breadcrumbs=array(
	'Guide Cats'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List GuideCat', 'url'=>array('index')),
	array('label'=>'Create GuideCat', 'url'=>array('create')),
	array('label'=>'Update GuideCat', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete GuideCat', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage GuideCat', 'url'=>array('admin')),
);
?>

<h1>View GuideCat #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
	),
)); ?>
